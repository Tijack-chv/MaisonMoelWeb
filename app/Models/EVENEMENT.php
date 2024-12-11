<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Evenement
 * 
 * @property int $idEvenement
 * @property int $idTypeEvenement
 * @property string $descritionEvenement
 * @property string|null $imageEvenement
 * 
 * @property TypeEvenement $type_evenement
 * @property Collection|PromoPlat[] $promo_plats
 *
 * @package App\Models
 */
class Evenement extends Model
{
	protected $table = 'evenement';
	protected $primaryKey = 'idEvenement';
	public $timestamps = false;

	protected $casts = [
		'idTypeEvenement' => 'int'
	];

	protected $fillable = [
		'idTypeEvenement',
		'descritionEvenement',
		'imageEvenement'
	];

	public function type_evenement()
	{
		return $this->belongsTo(TypeEvenement::class, 'idTypeEvenement');
	}

	public function promo_plats()
	{
		return $this->hasMany(PromoPlat::class, 'idEvenement');
	}
}
