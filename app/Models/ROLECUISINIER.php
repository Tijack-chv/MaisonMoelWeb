<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoleCuisinier
 * 
 * @property int $idRole
 * @property string $libelleRole
 * 
 * @property Collection|Cuisinier[] $cuisiniers
 *
 * @package App\Models
 */
class RoleCuisinier extends Model
{
	protected $table = 'role_cuisinier';
	protected $primaryKey = 'idRole';
	public $timestamps = false;

	protected $fillable = [
		'libelleRole'
	];

	public function cuisiniers()
	{
		return $this->hasMany(Cuisinier::class, 'idRole');
	}
}
