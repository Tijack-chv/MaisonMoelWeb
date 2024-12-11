<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Avi
 * 
 * @property int $id
 * @property int $idPersonne
 * @property int $note
 * @property string $titre
 * @property string $description
 * @property Carbon $date
 * 
 * @property Personne $personne
 *
 * @package App\Models
 */
class Avi extends Model
{
	protected $table = 'avis';
	public $timestamps = false;

	protected $casts = [
		'idPersonne' => 'int',
		'note' => 'int',
		'date' => 'datetime'
	];

	protected $fillable = [
		'idPersonne',
		'note',
		'titre',
		'description',
		'date'
	];

	public function personne()
	{
		return $this->belongsTo(Personne::class, 'idPersonne');
	}
}
