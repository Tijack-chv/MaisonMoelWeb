<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TABLE
 * 
 * @property int $IDTABLE
 * @property int $IDTYPETABLE
 * @property string $NOMTABLE
 * 
 * @property TYPETABLE $t_y_p_e_t_a_b_l_e
 * @property Collection|COMMANDE[] $c_o_m_m_a_n_d_e_s
 * @property Collection|RESERVATION[] $r_e_s_e_r_v_a_t_i_o_n_s
 *
 * @package App\Models
 */
class TABLE extends Model
{
	protected $table = 'TABLES';
	protected $primaryKey = 'IDTABLE';
	public $timestamps = false;

	protected $casts = [
		'IDTYPETABLE' => 'int'
	];

	protected $fillable = [
		'IDTYPETABLE',
		'NOMTABLE'
	];

	public function t_y_p_e_t_a_b_l_e()
	{
		return $this->belongsTo(TYPETABLE::class, 'IDTYPETABLE');
	}

	public function c_o_m_m_a_n_d_e_s()
	{
		return $this->hasMany(COMMANDE::class, 'IDTABLE');
	}

	public function r_e_s_e_r_v_a_t_i_o_n_s()
	{
		return $this->hasMany(RESERVATION::class, 'IDTABLE');
	}
}
