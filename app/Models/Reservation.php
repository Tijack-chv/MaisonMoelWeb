<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservation
 * 
 * @property int $idTable
 * @property int|null $idPersonne
 * @property int $nbPersonnes
 * @property Carbon|null $dateMoment
 * @property int $idReservation
 * @property Carbon $dateReservation
 * 
 * @property Client|null $client
 * @property Table $table
 * @property Collection|Commande[] $commandes
 *
 * @package App\Models
 */
class Reservation extends Model
{
	protected $table = 'reservation';
	protected $primaryKey = 'idReservation';
	public $timestamps = false;

	protected $casts = [
		'idTable' => 'int',
		'idPersonne' => 'int',
		'nbPersonnes' => 'int',
		'dateMoment' => 'datetime',
		'dateReservation' => 'datetime'
	];

	protected $fillable = [
		'idTable',
		'idPersonne',
		'nbPersonnes',
		'dateMoment',
		'dateReservation'
	];

	public function client()
	{
		return $this->belongsTo(Client::class, 'idPersonne');
	}

	public function table()
	{
		return $this->belongsTo(Table::class, 'idTable');
	}

	public function commandes()
	{
		return $this->hasMany(Commande::class, 'idReservation');
	}
}
