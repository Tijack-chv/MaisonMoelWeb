<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Admin
 * 
 * @property int $idPersonne
 * @property string|null $profilAdmin
 * 
 * @property Personne $personne
 *
 * @package App\Models
 */
class Admin extends Model
{
	protected $table = 'admin';
	protected $primaryKey = 'idPersonne';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idPersonne' => 'int'
	];

	protected $fillable = [
		'profilAdmin'
	];

	public function personne()
	{
		return $this->belongsTo(Personne::class, 'idPersonne');
	}
}
