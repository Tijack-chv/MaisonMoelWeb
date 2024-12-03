<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class COMPORTER
 * 
 * @property int $IDCOMMANDE
 * @property int $IDPLAT
 * @property int $PRIX
 * 
 * @property COMMANDE $c_o_m_m_a_n_d_e
 * @property PLAT $p_l_a_t
 *
 * @package App\Models
 */
class COMPORTER extends Model
{
	protected $table = 'COMPORTER';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'IDCOMMANDE' => 'int',
		'IDPLAT' => 'int',
		'PRIX' => 'int'
	];

	protected $fillable = [
		'PRIX'
	];

	public function c_o_m_m_a_n_d_e()
	{
		return $this->belongsTo(COMMANDE::class, 'IDCOMMANDE');
	}

	public function p_l_a_t()
	{
		return $this->belongsTo(PLAT::class, 'IDPLAT');
	}
}
