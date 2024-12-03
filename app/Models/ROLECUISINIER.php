<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ROLECUISINIER
 * 
 * @property int $IDROLE
 * @property string $LIBELLEROLE
 * 
 * @property Collection|CUISINIER[] $c_u_i_s_i_n_i_e_r_s
 *
 * @package App\Models
 */
class ROLECUISINIER extends Model
{
	protected $table = 'ROLE_CUISINIER';
	protected $primaryKey = 'IDROLE';
	public $timestamps = false;

	protected $fillable = [
		'LIBELLEROLE'
	];

	public function c_u_i_s_i_n_i_e_r_s()
	{
		return $this->hasMany(CUISINIER::class, 'IDROLE');
	}
}
