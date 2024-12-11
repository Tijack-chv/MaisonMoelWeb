<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Plat
 * 
 * @property int $idPlat
 * @property int $idCategoriePlat
 * @property int $idTypePlat
 * @property string $nomPlat
 * @property int $quantite
 * @property string $descriptionPlat
 * @property float $prixHT
 * 
 * @property CategoriePlat $categorie_plat
 * @property TypePlat $type_plat
 * @property Collection|Comporter[] $comporters
 * @property Collection|PromoPlat[] $promo_plats
 * @property Collection|Reapprovisionnement[] $reapprovisionnements
 * @property Collection|Restreindre[] $restreindres
 *
 * @package App\Models
 */
class Plat extends Model
{
	protected $table = 'plat';
	protected $primaryKey = 'idPlat';
	public $timestamps = false;

	protected $casts = [
		'idCategoriePlat' => 'int',
		'idTypePlat' => 'int',
		'quantite' => 'int',
		'prixHT' => 'float'
	];

	protected $fillable = [
		'idCategoriePlat',
		'idTypePlat',
		'nomPlat',
		'quantite',
		'descriptionPlat',
		'prixHT'
	];

	public function categorie_plat()
	{
		return $this->belongsTo(CategoriePlat::class, 'idCategoriePlat');
	}

	public function type_plat()
	{
		return $this->belongsTo(TypePlat::class, 'idTypePlat');
	}

	public function comporters()
	{
		return $this->hasMany(Comporter::class, 'idPlat');
	}

	public function promo_plats()
	{
		return $this->hasMany(PromoPlat::class, 'idPlat');
	}

	public function reapprovisionnements()
	{
		return $this->hasMany(Reapprovisionnement::class, 'idPlat');
	}

	public function restreindres()
	{
		return $this->hasMany(Restreindre::class, 'idPlat');
	}
}
