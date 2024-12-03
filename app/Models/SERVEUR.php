<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SERVEUR
 * 
 * @property int $IDPERSONNE
 * @property int|null $APPRECIATIONS
 * @property int $SALAIRES
 * @property string $NOM
 * @property string $PRENOM
 * @property string $EMAIL
 * @property string $PASSWORD
 * @property Carbon|null $DATENAISS
 * 
 * @property PERSONNE $p_e_r_s_o_n_n_e
 * @property Collection|COMMANDE[] $c_o_m_m_a_n_d_e_s
 *
 * @package App\Models
 */
class SERVEUR extends Model
{
	protected $table = 'SERVEUR';
	protected $primaryKey = 'IDPERSONNE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'IDPERSONNE' => 'int',
		'APPRECIATIONS' => 'int',
		'SALAIRES' => 'int',
		'DATENAISS' => 'datetime'
	];

	protected $fillable = [
		'APPRECIATIONS',
		'SALAIRES',
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

	public function c_o_m_m_a_n_d_e_s()
	{
		return $this->hasMany(COMMANDE::class, 'IDPERSONNE');
	}
}
