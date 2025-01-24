<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
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
 * @property string $token
 * 
 * @property Admin $admin
 * @property Collection|Avi[] $avis
 * @property Cuisinier $cuisinier
 * @property Serveur $serveur
 * @property Collection|TokenUserApi[] $token_user_apis
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
		'password',
		'token'
	];

	protected $fillable = [
		'nom',
		'prenom',
		'email',
		'password',
		'dateNaiss',
		'token'
	];

	public function admin()
	{
		return $this->hasOne(Admin::class, 'idPersonne');
	}

	public function avis()
	{
		return $this->hasMany(Avi::class, 'idPersonne');
	}

	public function cuisinier()
	{
		return $this->hasOne(Cuisinier::class, 'idPersonne');
	}

	public function serveur()
	{
		return $this->hasOne(Serveur::class, 'idPersonne');
	}

	public function token_user_apis()
	{
		return $this->hasMany(TokenUserApi::class, 'idUser');
	}
}
