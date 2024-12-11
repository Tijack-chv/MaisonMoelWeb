<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PromoPlat
 * 
 * @property int $idEvenement
 * @property int $idPlat
 * @property Carbon $dateDebut
 * @property Carbon $dateFin
 * 
 * @property Evenement $evenement
 * @property Plat $plat
 *
 * @package App\Models
 */
class PromoPlat extends Model
{
	protected $table = 'promo_plat';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idEvenement' => 'int',
		'idPlat' => 'int',
		'dateDebut' => 'datetime',
		'dateFin' => 'datetime'
	];

	protected $fillable = [
		'dateDebut',
		'dateFin'
	];

	public function evenement()
	{
		return $this->belongsTo(Evenement::class, 'idEvenement');
	}

	public function plat()
	{
		return $this->belongsTo(Plat::class, 'idPlat');
	}
}
