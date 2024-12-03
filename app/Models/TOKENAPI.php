<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TOKENAPI
 * 
 * @property string $token
 *
 * @package App\Models
 */
class TOKENAPI extends Model
{
	protected $table = 'TOKEN_API';
	protected $primaryKey = 'token';
	public $incrementing = false;
	public $timestamps = false;

	protected $hidden = [
		'token'
	];
}
