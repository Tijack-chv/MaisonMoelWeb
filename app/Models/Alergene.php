<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Alergene
 * 
 * @property int $idAlergenes
 * @property string $descriptionAlergenes
 * 
 * @property Collection|Restreindre[] $restreindres
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

	public function restreindres()
	{
		return $this->hasMany(Restreindre::class, 'idAlergenes');
	}
}
