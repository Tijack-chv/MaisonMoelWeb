<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CLIENT
 * 
 * @property int $IDPERSONNE
 * @property int $POINTFIDELITE
 * @property string $NOM
 * @property string $PRENOM
 * @property string $EMAIL
 * @property string $PASSWORD
 * @property Carbon|null $DATENAISS
 * 
 * @property PERSONNE $p_e_r_s_o_n_n_e
 * @property Collection|RESERVATION[] $r_e_s_e_r_v_a_t_i_o_n_s
 *
 * @package App\Models
 */
class CLIENT extends Model
{
	protected $table = 'CLIENT';
	protected $primaryKey = 'IDPERSONNE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'IDPERSONNE' => 'int',
		'POINTFIDELITE' => 'int',
		'DATENAISS' => 'datetime'
	];

	protected $fillable = [
		'POINTFIDELITE',
		'NOM',
		'PRENOM',
		'EMAIL',
		'PASSWORD',
		'DATENAISS'
	];

	public function p_e_r_s_o_n_n_e()
	{
		return $this->belongsTo(PERSONNE::class, 'IDPERSONNE');
	}

	public function r_e_s_e_r_v_a_t_i_o_n_s()
	{
		return $this->hasMany(RESERVATION::class, 'IDPERSONNE');
	}
}
