<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Reapprovisionnement
 * 
 * @property Carbon $dateHeureReapro
 * @property int $idPlat
 * @property int $quantiteReapro
 * 
 * @property Plat $plat
 *
 * @package App\Models
 */
class Reapprovisionnement extends Model
{
	protected $table = 'reapprovisionnement';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'dateHeureReapro' => 'datetime',
		'idPlat' => 'int',
		'quantiteReapro' => 'int'
	];

	protected $fillable = [
		'quantiteReapro'
	];

	public function plat()
	{
		return $this->belongsTo(Plat::class, 'idPlat');
	}
}
