<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NOTIFICATION
 * 
 * @property int $IDNOTIFICATION
 * @property int $IDTYPENOTIFICATION
 * @property string $DESCRIPTIONNOTIFICATION
 * 
 * @property TYPENOTIFICATION $t_y_p_e_n_o_t_i_f_i_c_a_t_i_o_n
 *
 * @package App\Models
 */
class NOTIFICATION extends Model
{
	protected $table = 'NOTIFICATION';
	protected $primaryKey = 'IDNOTIFICATION';
	public $timestamps = false;

	protected $casts = [
		'IDTYPENOTIFICATION' => 'int'
	];

	protected $fillable = [
		'IDTYPENOTIFICATION',
		'DESCRIPTIONNOTIFICATION'
	];

	public function t_y_p_e_n_o_t_i_f_i_c_a_t_i_o_n()
	{
		return $this->belongsTo(TYPENOTIFICATION::class, 'IDTYPENOTIFICATION');
	}
}
