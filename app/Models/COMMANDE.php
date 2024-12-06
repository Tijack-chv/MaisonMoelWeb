<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Commande
 * 
 * @property int $idEtat
 * @property int $idReservation
 * @property int $idPersonne
 * @property Carbon $dateCommande
 * @property int $idCommande
 * 
 * @property Etat $etat
 *
 * @package App\Models
 */
class Commande extends Model
{
	protected $table = 'commande';
	protected $primaryKey = 'idCommande';
	public $timestamps = false;

	protected $casts = [
		'idEtat' => 'int',
		'idReservation' => 'int',
		'idPersonne' => 'int',
		'dateCommande' => 'datetime'
	];

	protected $fillable = [
		'idEtat',
		'idReservation',
		'idPersonne',
		'dateCommande'
	];

	public function etat()
	{
		return $this->belongsTo(Etat::class, 'idEtat');
	}
}
