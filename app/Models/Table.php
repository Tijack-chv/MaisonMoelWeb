<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Table
 * 
 * @property int $idTable
 * @property int $idTypeTable
 * @property string $NomTable
 * @property int $capacite
 * @property int|null $idReservation
 * 
 * @property TypeTable $type_table
 * @property Reservation|null $reservation
 * @property Collection|Reservation[] $reservations
 *
 * @package App\Models
 */
class Table extends Model
{
	protected $table = 'tables';
	protected $primaryKey = 'idTable';
	public $timestamps = false;

	protected $casts = [
		'idTypeTable' => 'int',
		'capacite' => 'int',
		'idReservation' => 'int'
	];

	protected $fillable = [
		'idTypeTable',
		'NomTable',
		'capacite',
		'idReservation'
	];

	public function type_table()
	{
		return $this->belongsTo(TypeTable::class, 'idTypeTable');
	}

	public function reservation()
	{
		return $this->belongsTo(Reservation::class, 'idReservation');
	}

	public function reservations()
	{
		return $this->hasMany(Reservation::class, 'idTable');
	}
}
