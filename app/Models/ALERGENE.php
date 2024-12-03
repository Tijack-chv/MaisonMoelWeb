<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ALERGENE
 * 
 * @property int $IDALERGENES
 * @property string $DESCRIPTIONALERGENES
 * 
 * @property Collection|RESTREINDRE[] $r_e_s_t_r_e_i_n_d_r_e_s
 *
 * @package App\Models
 */
class ALERGENE extends Model
{
	protected $table = 'ALERGENES';
	protected $primaryKey = 'IDALERGENES';
	public $timestamps = false;

	protected $fillable = [
		'DESCRIPTIONALERGENES'
	];

	public function r_e_s_t_r_e_i_n_d_r_e_s()
	{
		return $this->hasMany(RESTREINDRE::class, 'IDALERGENES');
	}
}
