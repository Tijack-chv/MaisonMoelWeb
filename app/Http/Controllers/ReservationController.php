<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeTable;

class ReservationController extends Controller
{
    public function payment()
    {
        return view('reservation.payment');
    }

    public function index()
    {
        return view('reservation.reservation', ['tables' => TypeTable::all()]);
    }
}
