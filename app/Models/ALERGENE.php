<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alergene
 * 
 * @property int $idAlergenes
 * @property string $descriptionAlergenes
 *
 * @package App\Models
 */
class Alergene extends Model
{
	protected $table = 'alergenes';
	protected $primaryKey = 'idAlergenes';
	public $timestamps = false;

	protected $fillable = [
		'descriptionAlergenes'
	];
}
