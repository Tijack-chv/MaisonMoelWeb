<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TYPENOTIFICATION
 * 
 * @property int $IDTYPENOTIFICATION
 * @property string $LIBELLETYPENOTIFICATION
 * 
 * @property Collection|NOTIFICATION[] $n_o_t_i_f_i_c_a_t_i_o_n_s
 *
 * @package App\Models
 */
class TYPENOTIFICATION extends Model
{
	protected $table = 'TYPE_NOTIFICATION';
	protected $primaryKey = 'IDTYPENOTIFICATION';
	public $timestamps = false;

	protected $fillable = [
		'LIBELLETYPENOTIFICATION'
	];

	public function n_o_t_i_f_i_c_a_t_i_o_n_s()
	{
		return $this->hasMany(NOTIFICATION::class, 'IDTYPENOTIFICATION');
	}
}
