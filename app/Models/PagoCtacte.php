<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PagoCtacte
 * 
 * @property int $PAG_ID
 * @property string $CTA_PERIODO
 * @property int $ENT_ID
 * @property string $ENT_ASOC_PREST
 * @property float $PCC_MONTO
 * 
 * @property CuentaCorriente $cuenta_corriente
 * @property Pago $pago
 *
 * @package App\Models
 */
class PagoCtacte extends Model
{
	protected $table = 'pago_ctacte';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'PAG_ID' => 'int',
		'ENT_ID' => 'int',
		'PCC_MONTO' => 'float'
	];

	protected $fillable = [
		'PCC_MONTO'
	];

	public function cuenta_corriente()
	{
		return $this->belongsTo(CuentaCorriente::class, 'CTA_PERIODO')
					->where('cuenta_corriente.CTA_PERIODO', '=', 'pago_ctacte.CTA_PERIODO')
					->where('cuenta_corriente.ENT_ID', '=', 'pago_ctacte.ENT_ID')
					->where('cuenta_corriente.ENT_ASOC_PREST', '=', 'pago_ctacte.ENT_ASOC_PREST');
	}

	public function pago()
	{
		return $this->belongsTo(Pago::class, 'PAG_ID');
	}
}
