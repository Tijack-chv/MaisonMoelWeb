<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class COMPOSER
 * 
 * @property int $IDPLAT
 * @property int $IDPRODUIT
 * 
 * @property PLAT $p_l_a_t
 * @property PRODUIT $p_r_o_d_u_i_t
 *
 * @package App\Models
 */
class COMPOSER extends Model
{
	protected $table = 'COMPOSER';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'IDPLAT' => 'int',
		'IDPRODUIT' => 'int'
	];

	public function p_l_a_t()
	{
		return $this->belongsTo(PLAT::class, 'IDPLAT');
	}

	public function p_r_o_d_u_i_t()
	{
		return $this->belongsTo(PRODUIT::class, 'IDPRODUIT');
	}
}
