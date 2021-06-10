<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AfiliadoExport
 * 
 * @property int|null $Tipo documento_Tit
 * @property string|null $N documeto_Tit
 * @property string|null $NroAfiliado_Tit
 * @property string|null $CodParentesco_Tit
 * @property string|null $Nombre_Tit
 * @property string|null $Apellido_Tit
 * @property int|null $Caja
 *
 * @package App\Models
 */
class AfiliadoExport extends Model
{
	protected $table = 'afiliado_export';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Tipo documento_Tit' => 'int',
		'Caja' => 'int'
	];

	protected $fillable = [
		'Tipo documento_Tit',
		'N documeto_Tit',
		'NroAfiliado_Tit',
		'CodParentesco_Tit',
		'Nombre_Tit',
		'Apellido_Tit',
		'Caja'
	];
}
