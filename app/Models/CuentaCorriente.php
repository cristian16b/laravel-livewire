<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CuentaCorriente
 * 
 * @property int $ENT_ID
 * @property string $ENT_ASOC_PREST
 * @property string $CTA_PERIODO
 * @property int|null $EJE_ID
 * @property float|null $CTA_GASTO
 * @property float|null $CTA_PRESTACION
 * @property int|null $CTA_CANT_AFI
 * @property string|null $CTA_ESTADO
 * @property Carbon|null $CTA_FECHA_PAGO_TOTAL
 * @property Carbon|null $CTA_FECHA_VENCIM
 * @property string|null $CTA_EJERCICIO
 * @property int $PRM_ID
 * @property Carbon $PRM_FECHA_EF
 * @property int|null $CTA_CANT_AFI_CON
 * 
 * @property Ejercicio|null $ejercicio
 * @property Entidad $entidad
 * @property Collection|PagoCtacte[] $pago_ctactes
 *
 * @package App\Models
 */
class CuentaCorriente extends Model
{
	protected $table = 'cuenta_corriente';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ENT_ID' => 'int',
		'EJE_ID' => 'int',
		'CTA_GASTO' => 'float',
		'CTA_PRESTACION' => 'float',
		'CTA_CANT_AFI' => 'int',
		'PRM_ID' => 'int',
		'CTA_CANT_AFI_CON' => 'int'
	];

	protected $dates = [
		'CTA_FECHA_PAGO_TOTAL',
		'CTA_FECHA_VENCIM',
		'PRM_FECHA_EF'
	];

	protected $fillable = [
		'EJE_ID',
		'CTA_GASTO',
		'CTA_PRESTACION',
		'CTA_CANT_AFI',
		'CTA_ESTADO',
		'CTA_FECHA_PAGO_TOTAL',
		'CTA_FECHA_VENCIM',
		'CTA_EJERCICIO',
		'PRM_ID',
		'PRM_FECHA_EF',
		'CTA_CANT_AFI_CON'
	];

	public function ejercicio()
	{
		return $this->belongsTo(Ejercicio::class, 'EJE_ID');
	}

	public function entidad()
	{
		return $this->belongsTo(Entidad::class, 'ENT_ID')
					->where('entidad.ENT_ID', '=', 'cuenta_corriente.ENT_ID')
					->where('entidad.ENT_ASOC_PREST', '=', 'cuenta_corriente.ENT_ASOC_PREST');
	}

	public function pago_ctactes()
	{
		return $this->hasMany(PagoCtacte::class, 'CTA_PERIODO');
	}
}
