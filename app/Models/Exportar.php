<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Exportar
 * 
 * @property int|null $Tipo documento_Tit
 * @property string|null $N documeto_Tit
 * @property string|null $NroAfiliado_Tit
 * @property string|null $CodParentesco_Tit
 * @property string|null $Nombre_Tit
 * @property string|null $Apellido_Tit
 * @property int|null $Caja
 * @property string|null $Numero de Formulario
 * @property string|null $Fecha Aprobacion
 * @property int|null $Tipo documento
 * @property string|null $N documeto bef
 * @property int|null $nro_prestacion
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
 * @property string|null $Concepto
 * @property string|null $Forma Pago
 * @property string|null $Fecha Pago
 * @property string|null $Monto Pagado
 * @property string|null $Observaciones
 *
 * @package App\Models
 */
class Exportar extends Model
{
	protected $table = 'exportar';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'Tipo documento_Tit' => 'int',
		'Caja' => 'int',
		'Tipo documento' => 'int',
		'nro_prestacion' => 'int'
	];

	protected $fillable = [
		'Tipo documento_Tit',
		'N documeto_Tit',
		'NroAfiliado_Tit',
		'CodParentesco_Tit',
		'Nombre_Tit',
		'Apellido_Tit',
		'Caja',
		'Numero de Formulario',
		'Fecha Aprobacion',
		'Tipo documento',
		'N documeto bef',
		'nro_prestacion',
		'NroAfiliado',
		'CodParentesco',
		'Nombre bef',
		'Apellido bef',
		'Tipo Prestacion',
		'Prestador',
		'Monto Asignado',
		'Numero Acta',
		'Anio',
		'Fecha de Realizacion',
		'Concepto',
		'Forma Pago',
		'Fecha Pago',
		'Monto Pagado',
		'Observaciones'
	];
}
