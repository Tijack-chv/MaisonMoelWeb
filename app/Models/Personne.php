<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Personne
 * 
 * @property int $idPersonne
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property string $password
 * @property Carbon|null $dateNaiss
 * 
 * @property Admin $admin
 * @property Cuisinier $cuisinier
 * @property Serveur $serveur
 *
 * @package App\Models
 */
class Personne extends Model
{
	protected $table = 'personne';
	protected $primaryKey = 'idPersonne';
	public $timestamps = false;

	protected $casts = [
		'dateNaiss' => 'datetime'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'nom',
		'prenom',
		'email',
		'password',
		'dateNaiss'
	];

	public function admin()
	{
		return $this->hasOne(Admin::class, 'idPersonne');
	}

	public function cuisinier()
	{
		return $this->hasOne(Cuisinier::class, 'idPersonne');
	}

	public function serveur()
	{
		return $this->hasOne(Serveur::class, 'idPersonne');
	}
}
