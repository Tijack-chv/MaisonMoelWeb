<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MENU
 * 
 * @property int $IDMENU
 * @property string $LIBELLEMENU
 * 
 * @property Collection|CONSTITUER[] $c_o_n_s_t_i_t_u_e_r_s
 * @property Collection|PROMOMENU[] $p_r_o_m_o_m_e_n_u_s
 *
 * @package App\Models
 */
class MENU extends Model
{
	protected $table = 'MENU';
	protected $primaryKey = 'IDMENU';
	public $timestamps = false;

	protected $fillable = [
		'LIBELLEMENU'
	];

	public function c_o_n_s_t_i_t_u_e_r_s()
	{
		return $this->hasMany(CONSTITUER::class, 'IDMENU');
	}

	public function p_r_o_m_o_m_e_n_u_s()
	{
		return $this->hasMany(PROMOMENU::class, 'IDMENU');
	}
}
