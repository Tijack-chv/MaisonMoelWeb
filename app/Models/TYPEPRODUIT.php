<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TYPEPRODUIT
 * 
 * @property int $IDTYPEPRODUIT
 * @property string $LIBELLETYPEPRODUIT
 * 
 * @property Collection|PRODUIT[] $p_r_o_d_u_i_t_s
 *
 * @package App\Models
 */
class TYPEPRODUIT extends Model
{
	protected $table = 'TYPE_PRODUIT';
	protected $primaryKey = 'IDTYPEPRODUIT';
	public $timestamps = false;

	protected $fillable = [
		'LIBELLETYPEPRODUIT'
	];

	public function p_r_o_d_u_i_t_s()
	{
		return $this->hasMany(PRODUIT::class, 'IDTYPEPRODUIT');
	}
}
