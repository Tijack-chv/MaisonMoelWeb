<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Log
 * 
 * @property int $idLog
 * @property string $description
 *
 * @package App\Models
 */
class Log extends Model
{
	protected $table = 'log';
	protected $primaryKey = 'idLog';
	public $timestamps = false;

	protected $fillable = [
		'description'
	];
}
