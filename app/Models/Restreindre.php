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
 * @property Alergene $alergene
 * @property Plat $plat
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

	public function alergene()
	{
		return $this->belongsTo(Alergene::class, 'idAlergenes');
	}

	public function plat()
	{
		return $this->belongsTo(Plat::class, 'idPlat');
	}
}
