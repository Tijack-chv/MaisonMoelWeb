<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class REAPPROVISIONNEMENT
 * 
 * @property int $IDPRODUIT
 * @property int $IDFOURNISSEUR
 * @property Carbon $DATEHEUREREAPRO
 * @property int $QUANTITECOMMANDE
 * 
 * @property PRODUIT $p_r_o_d_u_i_t
 * @property FOURNISSEUR $f_o_u_r_n_i_s_s_e_u_r
 *
 * @package App\Models
 */
class REAPPROVISIONNEMENT extends Model
{
	protected $table = 'REAPPROVISIONNEMENT';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'IDPRODUIT' => 'int',
		'IDFOURNISSEUR' => 'int',
		'DATEHEUREREAPRO' => 'datetime',
		'QUANTITECOMMANDE' => 'int'
	];

	protected $fillable = [
		'QUANTITECOMMANDE'
	];

	public function p_r_o_d_u_i_t()
	{
		return $this->belongsTo(PRODUIT::class, 'IDPRODUIT');
	}

	public function f_o_u_r_n_i_s_s_e_u_r()
	{
		return $this->belongsTo(FOURNISSEUR::class, 'IDFOURNISSEUR');
	}
}
