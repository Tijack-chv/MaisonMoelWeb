<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EVENEMENT
 * 
 * @property int $IDEVENEMENT
 * @property int $IDTYPEEVENEMENT
 * @property string $DESCRITIONEVENEMENT
 * @property string|null $IMAGEEVENEMENT
 * 
 * @property TYPEEVENEMENT $t_y_p_e_e_v_e_n_e_m_e_n_t
 * @property Collection|PROMOMENU[] $p_r_o_m_o_m_e_n_u_s
 * @property Collection|PROMOPLAT[] $p_r_o_m_o_p_l_a_t_s
 *
 * @package App\Models
 */
class EVENEMENT extends Model
{
	protected $table = 'EVENEMENT';
	protected $primaryKey = 'IDEVENEMENT';
	public $timestamps = false;

	protected $casts = [
		'IDTYPEEVENEMENT' => 'int'
	];

	protected $fillable = [
		'IDTYPEEVENEMENT',
		'DESCRITIONEVENEMENT',
		'IMAGEEVENEMENT'
	];

	public function t_y_p_e_e_v_e_n_e_m_e_n_t()
	{
		return $this->belongsTo(TYPEEVENEMENT::class, 'IDTYPEEVENEMENT');
	}

	public function p_r_o_m_o_m_e_n_u_s()
	{
		return $this->hasMany(PROMOMENU::class, 'IDEVENEMENT');
	}

	public function p_r_o_m_o_p_l_a_t_s()
	{
		return $this->hasMany(PROMOPLAT::class, 'IDEVENEMENT');
	}
}
