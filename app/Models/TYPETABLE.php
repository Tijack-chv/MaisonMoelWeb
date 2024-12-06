<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeTable
 * 
 * @property int $idTypeTable
 * @property string $libelleTypeTable
 *
 * @package App\Models
 */
class TypeTable extends Model
{
	protected $table = 'type_table';
	protected $primaryKey = 'idTypeTable';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idTypeTable' => 'int'
	];

	protected $fillable = [
		'libelleTypeTable'
	];
}
