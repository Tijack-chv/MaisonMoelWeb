<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PERSONNE
 * 
 * @property int $IDPERSONNE
 * @property string $NOM
 * @property string $PRENOM
 * @property string $EMAIL
 * @property string $PASSWORD
 * @property Carbon|null $DATENAISS
 * 
 * @property ADMIN $a_d_m_i_n
 * @property CLIENT $c_l_i_e_n_t
 * @property CUISINIER $c_u_i_s_i_n_i_e_r
 * @property Collection|LOG[] $l_o_g_s
 * @property SERVEUR $s_e_r_v_e_u_r
 *
 * @package App\Models
 */
class PERSONNE extends Model
{
	protected $table = 'PERSONNE';
	protected $primaryKey = 'IDPERSONNE';
	public $timestamps = false;

	protected $casts = [
		'DATENAISS' => 'datetime'
	];

	protected $fillable = [
		'NOM',
		'PRENOM',
		'EMAIL',
		'PASSWORD',
		'DATENAISS'
	];

	public function a_d_m_i_n()
	{
		return $this->hasOne(ADMIN::class, 'IDPERSONNE');
	}

	public function c_l_i_e_n_t()
	{
		return $this->hasOne(CLIENT::class, 'IDPERSONNE');
	}

	public function c_u_i_s_i_n_i_e_r()
	{
		return $this->hasOne(CUISINIER::class, 'IDPERSONNE');
	}

	public function l_o_g_s()
	{
		return $this->hasMany(LOG::class, 'IDPERSONNE');
	}

	public function s_e_r_v_e_u_r()
	{
		return $this->hasOne(SERVEUR::class, 'IDPERSONNE');
	}
}
