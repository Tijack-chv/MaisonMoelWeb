<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Evenement
 * 
 * @property int $idEvenement
 * @property int $idTypeEvenement
 * @property string $descriptionEvenement
 * @property string|null $imageEvenement
 * @property Carbon|null $dateEvenement
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
		'idTypeEvenement' => 'int',
		'dateEvenement' => 'datetime'
	];

	protected $fillable = [
		'idTypeEvenement',
		'descriptionEvenement',
		'imageEvenement',
		'dateEvenement'
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
