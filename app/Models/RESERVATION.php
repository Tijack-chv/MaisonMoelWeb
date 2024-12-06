<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
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
}
