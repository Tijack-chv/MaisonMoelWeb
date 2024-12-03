<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PLAT
 * 
 * @property int $IDPLAT
 * @property int $IDCATEGORIEPLAT
 * @property int $IDTYPEPLAT
 * @property string $NOMPLAT
 * 
 * @property CATEGORIEPLAT $c_a_t_e_g_o_r_i_e_p_l_a_t
 * @property TYPEPLAT $t_y_p_e_p_l_a_t
 * @property Collection|COMPORTER[] $c_o_m_p_o_r_t_e_r_s
 * @property Collection|COMPOSER[] $c_o_m_p_o_s_e_r_s
 * @property Collection|CONSTITUER[] $c_o_n_s_t_i_t_u_e_r_s
 * @property Collection|PROMOPLAT[] $p_r_o_m_o_p_l_a_t_s
 *
 * @package App\Models
 */
class PLAT extends Model
{
	protected $table = 'PLAT';
	protected $primaryKey = 'IDPLAT';
	public $timestamps = false;

	protected $casts = [
		'IDCATEGORIEPLAT' => 'int',
		'IDTYPEPLAT' => 'int'
	];

	protected $fillable = [
		'IDCATEGORIEPLAT',
		'IDTYPEPLAT',
		'NOMPLAT'
	];

	public function c_a_t_e_g_o_r_i_e_p_l_a_t()
	{
		return $this->belongsTo(CATEGORIEPLAT::class, 'IDCATEGORIEPLAT');
	}

	public function t_y_p_e_p_l_a_t()
	{
		return $this->belongsTo(TYPEPLAT::class, 'IDTYPEPLAT');
	}

	public function c_o_m_p_o_r_t_e_r_s()
	{
		return $this->hasMany(COMPORTER::class, 'IDPLAT');
	}

	public function c_o_m_p_o_s_e_r_s()
	{
		return $this->hasMany(COMPOSER::class, 'IDPLAT');
	}

	public function c_o_n_s_t_i_t_u_e_r_s()
	{
		return $this->hasMany(CONSTITUER::class, 'IDPLAT');
	}

	public function p_r_o_m_o_p_l_a_t_s()
	{
		return $this->hasMany(PROMOPLAT::class, 'IDPLAT');
	}
}
