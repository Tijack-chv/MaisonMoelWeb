<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TokenApi
 * 
 * @property string $token
 *
 * @package App\Models
 */
class TokenApi extends Model
{
	protected $table = 'token_api';
	public $incrementing = false;
	public $timestamps = false;

	protected $hidden = [
		'token'
	];

	protected $fillable = [
		'token'
	];
}
