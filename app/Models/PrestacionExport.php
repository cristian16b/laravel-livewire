<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PrestacionExport
 * 
 * @property int|null $Caja
 * @property string|null $Numero de Formulario
 * @property string|null $Fecha Aprobacion
 * @property int|null $Tipo documento
 * @property string|null $N documeto bef
 * @property int $nro_prestacion
 * @property string|null $NroAfiliado
 * @property string|null $CodParentesco
 * @property string|null $Nombre bef
 * @property string|null $Apellido bef
 * @property string|null $Tipo Prestacion
 * @property string|null $Prestador
 * @property string|null $Monto Asignado
 * @property string|null $Numero Acta
 * @property string|null $Anio
 * @property string|null $Fecha de Realizacion
 *
 * @package App\Models
 */
class PrestacionExport extends Model
{
	protected $table = 'prestacion_export';
	protected $primaryKey = 'nro_prestacion';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Caja' => 'int',
		'Tipo documento' => 'int',
		'nro_prestacion' => 'int'
	];

	protected $fillable = [
		'Caja',
		'Numero de Formulario',
		'Fecha Aprobacion',
		'Tipo documento',
		'N documeto bef',
		'NroAfiliado',
		'CodParentesco',
		'Nombre bef',
		'Apellido bef',
		'Tipo Prestacion',
		'Prestador',
		'Monto Asignado',
		'Numero Acta',
		'Anio',
		'Fecha de Realizacion'
	];
}
