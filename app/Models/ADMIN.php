<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ADMIN
 * 
 * @property int $IDPERSONNE
 * @property string|null $PROFILADMIN
 * @property string $NOM
 * @property string $PRENOM
 * @property string $EMAIL
 * @property string $PASSWORD
 * @property Carbon|null $DATENAISS
 * 
 * @property PERSONNE $p_e_r_s_o_n_n_e
 *
 * @package App\Models
 */
class ADMIN extends Model
{
	protected $table = 'ADMIN';
	protected $primaryKey = 'IDPERSONNE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'IDPERSONNE' => 'int',
		'DATENAISS' => 'datetime'
	];

	protected $fillable = [
		'PROFILADMIN',
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
}
