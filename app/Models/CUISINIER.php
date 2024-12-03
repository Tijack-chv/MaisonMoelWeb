<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CUISINIER
 * 
 * @property int $IDPERSONNE
 * @property int $IDROLE
 * @property int $SALAIRES
 * @property string $NOM
 * @property string $PRENOM
 * @property string $EMAIL
 * @property string $PASSWORD
 * @property Carbon|null $DATENAISS
 * 
 * @property ROLECUISINIER $r_o_l_e_c_u_i_s_i_n_i_e_r
 * @property PERSONNE $p_e_r_s_o_n_n_e
 *
 * @package App\Models
 */
class CUISINIER extends Model
{
	protected $table = 'CUISINIER';
	protected $primaryKey = 'IDPERSONNE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'IDPERSONNE' => 'int',
		'IDROLE' => 'int',
		'SALAIRES' => 'int',
		'DATENAISS' => 'datetime'
	];

	protected $fillable = [
		'IDROLE',
		'SALAIRES',
		'NOM',
		'PRENOM',
		'EMAIL',
		'PASSWORD',
		'DATENAISS'
	];

	public function r_o_l_e_c_u_i_s_i_n_i_e_r()
	{
		return $this->belongsTo(ROLECUISINIER::class, 'IDROLE');
	}

	public function p_e_r_s_o_n_n_e()
	{
		return $this->belongsTo(PERSONNE::class, 'IDPERSONNE');
	}
}
