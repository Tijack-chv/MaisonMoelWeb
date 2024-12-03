<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PROMOPLAT
 * 
 * @property int $IDEVENEMENT
 * @property int $IDPLAT
 * @property Carbon $DATEDEBUT
 * @property Carbon $DATEFIN
 * 
 * @property EVENEMENT $e_v_e_n_e_m_e_n_t
 * @property PLAT $p_l_a_t
 *
 * @package App\Models
 */
class PROMOPLAT extends Model
{
	protected $table = 'PROMO_PLAT';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'IDEVENEMENT' => 'int',
		'IDPLAT' => 'int',
		'DATEDEBUT' => 'datetime',
		'DATEFIN' => 'datetime'
	];

	protected $fillable = [
		'DATEDEBUT',
		'DATEFIN'
	];

	public function e_v_e_n_e_m_e_n_t()
	{
		return $this->belongsTo(EVENEMENT::class, 'IDEVENEMENT');
	}

	public function p_l_a_t()
	{
		return $this->belongsTo(PLAT::class, 'IDPLAT');
	}
}
