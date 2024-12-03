<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TYPEPLAT
 * 
 * @property int $IDTYPEPLAT
 * @property string $LIBELLETYPEPLAT
 * 
 * @property Collection|PLAT[] $p_l_a_t_s
 *
 * @package App\Models
 */
class TYPEPLAT extends Model
{
	protected $table = 'TYPE_PLAT';
	protected $primaryKey = 'IDTYPEPLAT';
	public $timestamps = false;

	protected $fillable = [
		'LIBELLETYPEPLAT'
	];

	public function p_l_a_t_s()
	{
		return $this->hasMany(PLAT::class, 'IDTYPEPLAT');
	}
}
