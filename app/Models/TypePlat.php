<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TypePlat
 * 
 * @property int $idTypePlat
 * @property string $libelleTypePlat
 * 
 * @property Collection|Plat[] $plats
 *
 * @package App\Models
 */
class TypePlat extends Model
{
	protected $table = 'type_plat';
	protected $primaryKey = 'idTypePlat';
	public $timestamps = false;

	protected $fillable = [
		'libelleTypePlat'
	];

	public function plats()
	{
		return $this->hasMany(Plat::class, 'idTypePlat');
	}
}
