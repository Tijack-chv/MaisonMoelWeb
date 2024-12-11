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
 * 
 * @property TypeTable $type_table
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
		'capacite' => 'int'
	];

	protected $fillable = [
		'idTypeTable',
		'NomTable',
		'capacite'
	];

	public function type_table()
	{
		return $this->belongsTo(TypeTable::class, 'idTypeTable');
	}

	public function reservations()
	{
		return $this->hasMany(Reservation::class, 'idTable');
	}
}
