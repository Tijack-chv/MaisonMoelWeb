<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Etat
 * 
 * @property int $idEtat
 * @property string $libelleEtat
 * 
 * @property Collection|Commande[] $commandes
 *
 * @package App\Models
 */
class Etat extends Model
{
	protected $table = 'etat';
	protected $primaryKey = 'idEtat';
	public $timestamps = false;

	protected $fillable = [
		'libelleEtat'
	];

	public function commandes()
	{
		return $this->hasMany(Commande::class, 'idEtat');
	}
}
