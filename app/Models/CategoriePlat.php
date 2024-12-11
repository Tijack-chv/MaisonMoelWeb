<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoriePlat
 * 
 * @property int $idCategoriePlat
 * @property string $libelleCategoriePlat
 * 
 * @property Collection|Plat[] $plats
 *
 * @package App\Models
 */
class CategoriePlat extends Model
{
	protected $table = 'categorie_plat';
	protected $primaryKey = 'idCategoriePlat';
	public $timestamps = false;

	protected $fillable = [
		'libelleCategoriePlat'
	];

	public function plats()
	{
		return $this->hasMany(Plat::class, 'idCategoriePlat');
	}
}
