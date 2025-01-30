<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comporter
 * 
 * @property int $idCommande
 * @property int $idPlat
 * @property int $prix
 * @property int $nbCommander
 * 
 * @property Commande $commande
 * @property Plat $plat
 *
 * @package App\Models
 */
class Comporter extends Model
{
	protected $table = 'comporter';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idCommande' => 'int',
		'idPlat' => 'int',
		'prix' => 'int',
		'nbCommander' => 'int'
	];

	protected $fillable = [
		'prix',
		'nbCommander',
		'idCommande',
		'idPlat'

	];

	public function commande()
	{
		return $this->belongsTo(Commande::class, 'idCommande');
	}

	public function plat()
	{
		return $this->belongsTo(Plat::class, 'idPlat');
	}
}
