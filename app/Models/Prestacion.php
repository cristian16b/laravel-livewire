<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Prestacion
 * 
 * @property int $PRE_ID
 * @property int|null $AFI_ID
 * @property int|null $TPR_ID
 * @property Carbon|null $TPR_FECHA_EF
 * @property float|null $PRE_MONTO_ASIGN
 * @property string|null $PRE_NRO_ACTA
 * @property Carbon|null $PRE_FEC_APROB
 * @property string|null $PRE_NRO
 * @property string|null $PRE_ANIO
 * @property int $ENT_ID
 * @property string $ENT_ASOC_PREST
 * @property Carbon|null $PRE_FEC_REA
 * @property Carbon|null $PRE_FEC_COM
 * 
 * @property TipoPrestacion|null $tipo_prestacion
 * @property Afiliado|null $afiliado
 * @property PagoPrestacion $pago_prestacion
 *
 * @package App\Models
 */
class Prestacion extends Model
{
	protected $table = 'prestacion';
	protected $primaryKey = 'PRE_ID';
	public $timestamps = false;

	protected $casts = [
		'AFI_ID' => 'int',
		'TPR_ID' => 'int',
		'PRE_MONTO_ASIGN' => 'float',
		'ENT_ID' => 'int'
	];

	protected $dates = [
		'TPR_FECHA_EF',
		'PRE_FEC_APROB',
		'PRE_FEC_REA',
		'PRE_FEC_COM'
	];

	protected $fillable = [
		'AFI_ID',
		'TPR_ID',
		'TPR_FECHA_EF',
		'PRE_MONTO_ASIGN',
		'PRE_NRO_ACTA',
		'PRE_FEC_APROB',
		'PRE_NRO',
		'PRE_ANIO',
		'ENT_ID',
		'ENT_ASOC_PREST',
		'PRE_FEC_REA',
		'PRE_FEC_COM'
	];

	public function tipo_prestacion()
	{
		return $this->belongsTo(TipoPrestacion::class, 'TPR_ID')
					->where('tipo_prestacion.TPR_ID', '=', 'prestacion.TPR_ID')
					->where('tipo_prestacion.TPR_FECHA_EF', '=', 'prestacion.TPR_FECHA_EF');
	}

	public function afiliado()
	{
		return $this->belongsTo(Afiliado::class, 'AFI_ID');
	}

	public function pago_prestacion()
	{
		return $this->hasOne(PagoPrestacion::class, 'PRE_ID');
	}
}
