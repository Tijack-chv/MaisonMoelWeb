<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Message
 * 
 * @property int $id
 * @property string $message
 * @property int $idPersonne
 * @property Carbon $date
 * 
 * @property Personne $personne
 *
 * @package App\Models
 */
class Message extends Model
{
	protected $table = 'message';
	public $timestamps = false;

	protected $casts = [
		'idPersonne' => 'int',
		'date' => 'datetime'
	];

	protected $fillable = [
		'message',
		'idPersonne',
		'date'
	];

	public function personne()
	{
		return $this->belongsTo(Personne::class, 'idPersonne');
	}
}
