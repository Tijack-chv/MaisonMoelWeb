<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CONSTITUER
 * 
 * @property int $IDMENU
 * @property int $IDPLAT
 * 
 * @property MENU $m_e_n_u
 * @property PLAT $p_l_a_t
 *
 * @package App\Models
 */
class CONSTITUER extends Model
{
	protected $table = 'CONSTITUER';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'IDMENU' => 'int',
		'IDPLAT' => 'int'
	];

	public function m_e_n_u()
	{
		return $this->belongsTo(MENU::class, 'IDMENU');
	}

	public function p_l_a_t()
	{
		return $this->belongsTo(PLAT::class, 'IDPLAT');
	}
}
