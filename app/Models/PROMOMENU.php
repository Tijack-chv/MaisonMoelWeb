<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PROMOMENU
 * 
 * @property int $IDEVENEMENT
 * @property int $IDMENU
 * @property Carbon $DATEDEBUT
 * @property Carbon $DATEFIN
 * 
 * @property EVENEMENT $e_v_e_n_e_m_e_n_t
 * @property MENU $m_e_n_u
 *
 * @package App\Models
 */
class PROMOMENU extends Model
{
	protected $table = 'PROMO_MENU';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'IDEVENEMENT' => 'int',
		'IDMENU' => 'int',
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

	public function m_e_n_u()
	{
		return $this->belongsTo(MENU::class, 'IDMENU');
	}
}
