<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;
use App\Models\TypeTable;
use App\Models\Reservation;
use Illuminate\Support\Str;
use App\Models\Table;
use App\utils\EmailHelpers;



class ReservationController extends Controller
{
    public function index_s()
    {
        if (!session()->has('client')) {
            return redirect()->route('login');
        }
        $reservationsPasse = Reservation::where('idPersonne', session('client')['idPersonne'])->where('dateReservation', '<', date('Y-m-d H:i:s'))->get();
        $reservationsFutur = Reservation::where('idPersonne', session('client')['idPersonne'])->where('dateReservation', '>', date('Y-m-d H:i:s'))->get();
        return view('reservation.logs_reservation', ['reservationsPasse' => $reservationsPasse, 'reservationsFutur' => $reservationsFutur]);
    }
    
    public function index()
    {
        if (session()->has('reservation')) {
            session()->forget('reservation');
        }
        return view('reservation.reservation', ['tables' => TypeTable::all()]);
    }
    public function cgr()
    {
        if (!session()->has('reservation')) {
            return redirect()->route('reservation.index');
        }
        return view('reservation.cgr');
    }

    public function payment()
    {
        if (!session()->has('reservation')) {
            return redirect()->route('reservation.index');
        }
        return view('reservation.payment');
    }


    public function cgr_valid(Request $request)
    {
        $request->validate([
           'cb-cgr' => 'accepted',
        ]);
        if (!session()->has('reservation')) {
            return redirect()->route('reservation.index');
        }
        return view('reservation.payment');
    }

    public function reservation(Request $request)
    {
        $request->validate([
                'datetime_reservation' => 'required|date',
                'type_table' => 'required|integer',
                'nb_personnes' => 'required|integer|min:1|max:99'
            ],
            [
                'required' => 'Le champ date et heure est obligatoire.',
                'date' => 'Le champ date et heure doit être une date.',
                'integer' => 'Le champ type de table doit être un entier.',
                'min' => 'Le champ nombre de personnes doit être supérieur à 0.',
                'max' => 'Le champ nombre de personnes doit être inférieur à 100.'
            ]
        );
        $request->session()->put('reservation', array(
            'datetime_reservation' => $request->datetime_reservation,
            'type_table' => $request->type_table,
            'nb_personnes' => $request->nb_personnes
        ));
        
        if (date('Y-m-d', strtotime(session('reservation')['datetime_reservation'])) <= date('Y-m-d')) {
            return redirect()->route('reservation.index')->with('error', 'Vous ne pouvez pas réserver pour aujourd\'hui ou plus tôt.');
        }

        $tables = Table::where('idTypeTable', $request->type_table)->where('capacite', '>=', $request->nb_personnes)->get();


        if ($tables) {
            foreach ($tables as $table) {
                $reservation = Reservation::where('idTable', $table->idTable)->whereBetween('dateReservation', [
                    date('Y-m-d H:i:s', strtotime($request->datetime_reservation . ' -2 hours')),
                    date('Y-m-d H:i:s', strtotime($request->datetime_reservation . ' +2 hours'))
                ])->first();
                if (!$reservation) {
                    $request->session()->put('reservation', ['table' => $table->idTable] + session('reservation'));
                    return redirect()->route('reservation.cgr');
                }
            }
        }

        $request->session()->forget('reservation');
        return redirect()->route('reservation.index')->with('error', 'Aucune table disponible pour cette date et ce nombre de personnes.');
    }

    public function register() {
        if (!session()->has('reservation')) {
            return redirect()->route('reservation.index');
        }
        $reservation = new Reservation();
        $reservation->idTable = session('reservation')['table'];
        $reservation->idPersonne = session('client')['idPersonne'];
        $reservation->dateMoment = date('Y-m-d H:i:s');
        $reservation->dateReservation = session('reservation')['datetime_reservation'];
        $reservation->nbPersonnes = (int) session('reservation')['nb_personnes'];
        $reservation->uuid = Str::uuid();
        $reservation->accompte = (int) session('reservation')['nb_personnes'] * 10;
        $reservation->save();
        $personne = Personne::find(session('client')['idPersonne']);
        EmailHelpers::sendEmail($personne->email, "Réservation MaisonMoël", "email.reserveremail", ['reservation' => $reservation, 'personne' => $personne]);
        session()->forget('reservation');
        return redirect()->route('reservation.index_s');
    }

    public function remove($id)
    {
        $reservation = Reservation::find($id);
        if ($reservation->idPersonne == session('client')['idPersonne']) {
            $reservation->delete();
        }
        return redirect()->route('reservation.index_s');
    }

    private function getHoursMinutes($time)
    {
        $time = explode(':', $time);
        if ($time[1] >= 30) {
            $hour = $time[0].'30';
        } else {
            $hour = $time[0].'00';
        }
        return $hour;
    }

    public function hours(Request $request)
    {
        $date = $request->date;
        $reservations = Reservation::where('dateReservation', 'like', $date . '%')->get();
        
        $hours = array();
        for($time = strtotime('12:30'); $time <= strtotime('22:00'); $time = strtotime('+30 minutes', $time)) {
            array_push($hours, date('H:i', $time));
        }
        return view('reservation.ajax.hoursReservation', ['hours' => $hours]);
    }
}
