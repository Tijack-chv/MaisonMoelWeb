<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RESTREINDRE
 * 
 * @property int $IDPRODUIT
 * @property int $IDALERGENES
 * 
 * @property PRODUIT $p_r_o_d_u_i_t
 * @property ALERGENE $a_l_e_r_g_e_n_e
 *
 * @package App\Models
 */
class RESTREINDRE extends Model
{
	protected $table = 'RESTREINDRE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'IDPRODUIT' => 'int',
		'IDALERGENES' => 'int'
	];

	public function p_r_o_d_u_i_t()
	{
		return $this->belongsTo(PRODUIT::class, 'IDPRODUIT');
	}

	public function a_l_e_r_g_e_n_e()
	{
		return $this->belongsTo(ALERGENE::class, 'IDALERGENES');
	}
}
