<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CATEGORIEPLAT
 * 
 * @property int $IDCATEGORIEPLAT
 * @property string $LIBELLECATEGORIEPLAT
 * 
 * @property Collection|PLAT[] $p_l_a_t_s
 *
 * @package App\Models
 */
class CATEGORIEPLAT extends Model
{
	protected $table = 'CATEGORIE_PLAT';
	protected $primaryKey = 'IDCATEGORIEPLAT';
	public $timestamps = false;

	protected $fillable = [
		'LIBELLECATEGORIEPLAT'
	];

	public function p_l_a_t_s()
	{
		return $this->hasMany(PLAT::class, 'IDCATEGORIEPLAT');
	}
}
