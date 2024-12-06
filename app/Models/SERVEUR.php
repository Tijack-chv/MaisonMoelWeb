<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Serveur
 * 
 * @property int $idPersonne
 * @property int|null $appreciations
 * @property int $salaires
 * 
 * @property Personne $personne
 *
 * @package App\Models
 */
class Serveur extends Model
{
	protected $table = 'serveur';
	protected $primaryKey = 'idPersonne';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idPersonne' => 'int',
		'appreciations' => 'int',
		'salaires' => 'int'
	];

	protected $fillable = [
		'appreciations',
		'salaires'
	];

	public function personne()
	{
		return $this->belongsTo(Personne::class, 'idPersonne');
	}
}
