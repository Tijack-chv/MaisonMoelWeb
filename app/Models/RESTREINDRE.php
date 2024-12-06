<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Restreindre
 * 
 * @property int $idAlergenes
 * @property int $idPlat
 *
 * @package App\Models
 */
class Restreindre extends Model
{
	protected $table = 'restreindre';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idAlergenes' => 'int',
		'idPlat' => 'int'
	];
}
