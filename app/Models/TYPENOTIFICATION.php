<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeNotification
 * 
 * @property int $idTypeNotification
 * @property string $libelleTypeNotification
 * 
 * @property Collection|Notification[] $notifications
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

	public function notifications()
	{
		return $this->hasMany(Notification::class, 'idTypeNotification');
	}
}
