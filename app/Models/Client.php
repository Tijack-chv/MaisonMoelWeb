<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * 
 * @property int $idPersonne
 * @property int $pointFidelite
 * @property string $imageClient
 * 
 * @property Collection|Reservation[] $reservations
 *
 * @package App\Models
 */
class Client extends Model
{
	protected $table = 'client';
	protected $primaryKey = 'idPersonne';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'idPersonne' => 'int',
		'pointFidelite' => 'int',
	];

	protected $fillable = [
		'pointFidelite',
		'imageClient'
	];

	public function reservations()
	{
		return $this->hasMany(Reservation::class, 'idPersonne');
	}
}
