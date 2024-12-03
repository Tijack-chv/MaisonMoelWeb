<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TYPEEVENEMENT
 * 
 * @property int $IDTYPEEVENEMENT
 * @property string $LIBELLETYPEEVENEMENT
 * 
 * @property Collection|EVENEMENT[] $e_v_e_n_e_m_e_n_t_s
 *
 * @package App\Models
 */
class TYPEEVENEMENT extends Model
{
	protected $table = 'TYPE_EVENEMENT';
	protected $primaryKey = 'IDTYPEEVENEMENT';
	public $timestamps = false;

	protected $fillable = [
		'LIBELLETYPEEVENEMENT'
	];

	public function e_v_e_n_e_m_e_n_t_s()
	{
		return $this->hasMany(EVENEMENT::class, 'IDTYPEEVENEMENT');
	}
}
