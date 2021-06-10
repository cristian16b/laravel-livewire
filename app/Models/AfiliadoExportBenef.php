<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AfiliadoExportBenef
 * 
 * @property int|null $Caja
 * @property int|null $Tipo documento
 * @property string|null $N documeto bef
 * @property int|null $NroAfiliado
 * @property string|null $CodParentesco
 * @property string|null $Nombre bef
 * @property string|null $Apellido bef
 *
 * @package App\Models
 */
class AfiliadoExportBenef extends Model
{
	protected $table = 'afiliado_export_benef';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Caja' => 'int',
		'Tipo documento' => 'int',
		'NroAfiliado' => 'int'
	];

	protected $fillable = [
		'Caja',
		'Tipo documento',
		'N documeto bef',
		'NroAfiliado',
		'CodParentesco',
		'Nombre bef',
		'Apellido bef'
	];
}
