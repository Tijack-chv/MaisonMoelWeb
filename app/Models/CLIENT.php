<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * 
 * @property int $idPersonne
 * @property int $pointFidelite
 *
 * @package App\Models
 */
class Client extends Model
{
	protected $table = 'client';
	protected $primaryKey = 'idPersonne';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idPersonne' => 'int',
		'pointFidelite' => 'int'
	];

	protected $fillable = [
		'pointFidelite'
	];
}
