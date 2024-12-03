<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class COMMANDE
 * 
 * @property int $IDETAT
 * @property int $IDTABLE
 * @property int $IDPERSONNE
 * @property Carbon $DATECOMMANDE
 * @property int $IDCOMMANDE
 * 
 * @property ETAT $e_t_a_t
 * @property TABLE $t_a_b_l_e
 * @property SERVEUR $s_e_r_v_e_u_r
 * @property Collection|COMPORTER[] $c_o_m_p_o_r_t_e_r_s
 *
 * @package App\Models
 */
class COMMANDE extends Model
{
	protected $table = 'COMMANDE';
	protected $primaryKey = 'IDCOMMANDE';
	public $timestamps = false;

	protected $casts = [
		'IDETAT' => 'int',
		'IDTABLE' => 'int',
		'IDPERSONNE' => 'int',
		'DATECOMMANDE' => 'datetime'
	];

	protected $fillable = [
		'IDETAT',
		'IDTABLE',
		'IDPERSONNE',
		'DATECOMMANDE'
	];

	public function e_t_a_t()
	{
		return $this->belongsTo(ETAT::class, 'IDETAT');
	}

	public function t_a_b_l_e()
	{
		return $this->belongsTo(TABLE::class, 'IDTABLE');
	}

	public function s_e_r_v_e_u_r()
	{
		return $this->belongsTo(SERVEUR::class, 'IDPERSONNE');
	}

	public function c_o_m_p_o_r_t_e_r_s()
	{
		return $this->hasMany(COMPORTER::class, 'IDCOMMANDE');
	}
}
