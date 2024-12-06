<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeNotification
 * 
 * @property int $idTypeNotification
 * @property string $libelleTypeNotification
 *
 * @package App\Models
 */
class TypeNotification extends Model
{
	protected $table = 'type_notification';
	protected $primaryKey = 'idTypeNotification';
	public $timestamps = false;

	protected $fillable = [
		'libelleTypeNotification'
	];
}
