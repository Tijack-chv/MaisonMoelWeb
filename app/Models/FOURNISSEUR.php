<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FOURNISSEUR
 * 
 * @property int $IDFOURNISSEUR
 * @property string $LIBELLEFOURNISSEUR
 * 
 * @property Collection|REAPPROVISIONNEMENT[] $r_e_a_p_p_r_o_v_i_s_i_o_n_n_e_m_e_n_t_s
 *
 * @package App\Models
 */
class FOURNISSEUR extends Model
{
	protected $table = 'FOURNISSEUR';
	protected $primaryKey = 'IDFOURNISSEUR';
	public $timestamps = false;

	protected $fillable = [
		'LIBELLEFOURNISSEUR'
	];

	public function r_e_a_p_p_r_o_v_i_s_i_o_n_n_e_m_e_n_t_s()
	{
		return $this->hasMany(REAPPROVISIONNEMENT::class, 'IDFOURNISSEUR');
	}
}
