<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LOG
 * 
 * @property int $IDLOGIN
 * @property int|null $IDPERSONNE
 * @property string $DESCRIPTION
 * 
 * @property PERSONNE|null $p_e_r_s_o_n_n_e
 *
 * @package App\Models
 */
class LOG extends Model
{
	protected $table = 'LOG';
	protected $primaryKey = 'IDLOGIN';
	public $timestamps = false;

	protected $casts = [
		'IDPERSONNE' => 'int'
	];

	protected $fillable = [
		'IDPERSONNE',
		'DESCRIPTION'
	];

	public function p_e_r_s_o_n_n_e()
	{
		return $this->belongsTo(PERSONNE::class, 'IDPERSONNE');
	}
}
