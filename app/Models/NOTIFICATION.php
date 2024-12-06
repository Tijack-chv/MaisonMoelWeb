<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Notification
 * 
 * @property int $idNotification
 * @property int $idTypeNotification
 * @property string $descriptionNotification
 *
 * @package App\Models
 */
class Notification extends Model
{
	protected $table = 'notification';
	protected $primaryKey = 'idNotification';
	public $timestamps = false;

	protected $casts = [
		'idTypeNotification' => 'int'
	];

	protected $fillable = [
		'idTypeNotification',
		'descriptionNotification'
	];
}
