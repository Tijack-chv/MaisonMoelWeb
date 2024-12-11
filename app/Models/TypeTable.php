<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeTable
 * 
 * @property int $idTypeTable
 * @property string $libelleTypeTable
 * 
 * @property Collection|Table[] $tables
 *
 * @package App\Models
 */
class TypeTable extends Model
{
	protected $table = 'type_table';
	protected $primaryKey = 'idTypeTable';
	public $timestamps = false;

	protected $fillable = [
		'libelleTypeTable'
	];

	public function tables()
	{
		return $this->hasMany(Table::class, 'idTypeTable');
	}
}
