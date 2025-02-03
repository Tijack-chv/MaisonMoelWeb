<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Commande
 * 
 * @property int $idCommande
 * @property int $idEtat
 * @property int $idReservation
 * @property int $idPersonne
 * @property Carbon $dateCommande
 * @property bool $est_payer
 * 
 * @property Etat $etat
 * @property Reservation $reservation
 * @property Serveur $serveur
 * @property Collection|Comporter[] $comporters
 *
 * @package App\Models
 */
class Commande extends Model
{
	protected $table = 'commande';
	protected $primaryKey = 'idCommande';
	public $timestamps = false;

	protected $casts = [
		'idEtat' => 'int',
		'idReservation' => 'int',
		'idPersonne' => 'int',
		'dateCommande' => 'datetime',
		'est_payer' => 'bool'
	];

	protected $fillable = [
		'idEtat',
		'idReservation',
		'idPersonne',
		'dateCommande',
		'est_payer'
	];

	public function etat()
	{
		return $this->belongsTo(Etat::class, 'idEtat');
	}

	public function reservation()
	{
		return $this->belongsTo(Reservation::class, 'idReservation');
	}

	public function serveur()
	{
		return $this->belongsTo(Serveur::class, 'idPersonne');
	}

	public function comporters()
	{
		return $this->hasMany(Comporter::class, 'idCommande');
	}
}
