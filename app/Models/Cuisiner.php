<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cuisinier
 * 
 * @property int $idPersonne
 * @property int $idRole
 * @property int $salaires
 * 
 * @property RoleCuisinier $role_cuisinier
 * @property Personne $personne
 *
 * @package App\Models
 */
class Cuisinier extends Model
{
	protected $table = 'cuisinier';
	protected $primaryKey = 'idPersonne';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idPersonne' => 'int',
		'idRole' => 'int',
		'salaires' => 'int'
	];

	protected $fillable = [
		'idRole',
		'salaires'
	];

	public function role_cuisinier()
	{
		return $this->belongsTo(RoleCuisinier::class, 'idRole');
	}

	public function personne()
	{
		return $this->belongsTo(Personne::class, 'idPersonne');
	}
}
