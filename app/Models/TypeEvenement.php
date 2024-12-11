<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeEvenement
 * 
 * @property int $idTypeEvenement
 * @property string $libelleTypeEvenement
 * 
 * @property Collection|Evenement[] $evenements
 *
 * @package App\Models
 */
class TypeEvenement extends Model
{
	protected $table = 'type_evenement';
	protected $primaryKey = 'idTypeEvenement';
	public $timestamps = false;

	protected $fillable = [
		'libelleTypeEvenement'
	];

	public function evenements()
	{
		return $this->hasMany(Evenement::class, 'idTypeEvenement');
	}
}
