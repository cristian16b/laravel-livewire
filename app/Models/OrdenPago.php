<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrdenPago
 * 
 * @property int $ORD_PAG_ID
 * @property int $ORD_PAG_TIP_PAG
 * @property int|null $ORD_PAG_BAN_ID
 * @property string $ORD_PAG_NRO
 * @property float $ORD_PAG_MONTO_PAG
 * @property Carbon $ORD_PAG_FECHA_PAG
 * @property string $ORD_PAG_EST
 *
 * @package App\Models
 */
class OrdenPago extends Model
{
	protected $table = 'orden_pago';
	protected $primaryKey = 'ORD_PAG_ID';
	public $timestamps = false;

	protected $casts = [
		'ORD_PAG_TIP_PAG' => 'int',
		'ORD_PAG_BAN_ID' => 'int',
		'ORD_PAG_MONTO_PAG' => 'float'
	];

	protected $dates = [
		'ORD_PAG_FECHA_PAG'
	];

	protected $fillable = [
		'ORD_PAG_TIP_PAG',
		'ORD_PAG_BAN_ID',
		'ORD_PAG_NRO',
		'ORD_PAG_MONTO_PAG',
		'ORD_PAG_FECHA_PAG',
		'ORD_PAG_EST'
	];
}
