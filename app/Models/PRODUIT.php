<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PRODUIT
 * 
 * @property int $QUANTITE
 * @property int $IDPRODUIT
 * @property string $TITREPRODUIT
 * @property string $DESCRIPTIONPRODUIT
 * @property int $PRIXHT
 * @property int $IDTYPEPRODUIT
 * 
 * @property TYPEPRODUIT $t_y_p_e_p_r_o_d_u_i_t
 * @property Collection|COMPOSER[] $c_o_m_p_o_s_e_r_s
 * @property Collection|REAPPROVISIONNEMENT[] $r_e_a_p_p_r_o_v_i_s_i_o_n_n_e_m_e_n_t_s
 * @property Collection|RESTREINDRE[] $r_e_s_t_r_e_i_n_d_r_e_s
 *
 * @package App\Models
 */
class PRODUIT extends Model
{
	protected $table = 'PRODUIT';
	protected $primaryKey = 'IDPRODUIT';
	public $timestamps = false;

	protected $casts = [
		'QUANTITE' => 'int',
		'PRIXHT' => 'int',
		'IDTYPEPRODUIT' => 'int'
	];

	protected $fillable = [
		'QUANTITE',
		'TITREPRODUIT',
		'DESCRIPTIONPRODUIT',
		'PRIXHT',
		'IDTYPEPRODUIT'
	];

	public function t_y_p_e_p_r_o_d_u_i_t()
	{
		return $this->belongsTo(TYPEPRODUIT::class, 'IDTYPEPRODUIT');
	}

	public function c_o_m_p_o_s_e_r_s()
	{
		return $this->hasMany(COMPOSER::class, 'IDPRODUIT');
	}

	public function r_e_a_p_p_r_o_v_i_s_i_o_n_n_e_m_e_n_t_s()
	{
		return $this->hasMany(REAPPROVISIONNEMENT::class, 'IDPRODUIT');
	}

	public function r_e_s_t_r_e_i_n_d_r_e_s()
	{
		return $this->hasMany(RESTREINDRE::class, 'IDPRODUIT');
	}
}
