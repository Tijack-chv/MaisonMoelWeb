<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TYPETABLE
 * 
 * @property int $IDTYPETABLE
 * @property string $LIBELLETYPEPLAT
 * 
 * @property Collection|TABLE[] $t_a_b_l_e_s
 *
 * @package App\Models
 */
class TYPETABLE extends Model
{
	protected $table = 'TYPE_TABLE';
	protected $primaryKey = 'IDTYPETABLE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'IDTYPETABLE' => 'int'
	];

	protected $fillable = [
		'LIBELLETYPEPLAT'
	];

	public function t_a_b_l_e_s()
	{
		return $this->hasMany(TABLE::class, 'IDTYPETABLE');
	}
}
