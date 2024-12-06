<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Dechet
 * 
 * @property int $idDechets
 * @property int $poids
 * @property Carbon $dateSaisie
 *
 * @package App\Models
 */
class Dechet extends Model
{
	protected $table = 'dechets';
	protected $primaryKey = 'idDechets';
	public $timestamps = false;

	protected $casts = [
		'poids' => 'int',
		'dateSaisie' => 'datetime'
	];

	protected $fillable = [
		'poids',
		'dateSaisie'
	];
}
