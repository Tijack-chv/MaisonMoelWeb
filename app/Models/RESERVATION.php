<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RESERVATION
 * 
 * @property int $IDPERSONNE
 * @property Carbon $DATEHEURERES
 * @property int $IDTABLE
 * @property int $NBPERSONNES
 * 
 * @property CLIENT $c_l_i_e_n_t
 * @property TABLE $t_a_b_l_e
 *
 * @package App\Models
 */
class RESERVATION extends Model
{
	protected $table = 'RESERVATION';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'IDPERSONNE' => 'int',
		'DATEHEURERES' => 'datetime',
		'IDTABLE' => 'int',
		'NBPERSONNES' => 'int'
	];

	protected $fillable = [
		'NBPERSONNES'
	];

	public function c_l_i_e_n_t()
	{
		return $this->belongsTo(CLIENT::class, 'IDPERSONNE');
	}

	public function t_a_b_l_e()
	{
		return $this->belongsTo(TABLE::class, 'IDTABLE');
	}
}
