<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PagoPrestacion
 * 
 * @property int $PRE_ID
 * @property int|null $CON_ID
 * @property int $FOR_ID
 * @property Carbon $PGP_FECHA
 * @property string|null $PGP_OBSERV
 * @property float|null $PGP_MONTO_PAGADO
 * @property int $PGP_OP_NRO
 * @property string $PGP_OP_ESTADO
 * 
 * @property Concepto|null $concepto
 * @property FormaPago $forma_pago
 * @property Prestacion $prestacion
 *
 * @package App\Models
 */
class PagoPrestacion extends Model
{
	protected $table = 'pago_prestacion';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'PRE_ID' => 'int',
		'CON_ID' => 'int',
		'FOR_ID' => 'int',
		'PGP_MONTO_PAGADO' => 'float',
		'PGP_OP_NRO' => 'int'
	];

	protected $dates = [
		'PGP_FECHA'
	];

	protected $fillable = [
		'PRE_ID',
		'CON_ID',
		'FOR_ID',
		'PGP_FECHA',
		'PGP_OBSERV',
		'PGP_MONTO_PAGADO',
		'PGP_OP_NRO',
		'PGP_OP_ESTADO'
	];

	public function concepto()
	{
		return $this->belongsTo(Concepto::class, 'CON_ID');
	}

	public function forma_pago()
	{
		return $this->belongsTo(FormaPago::class, 'FOR_ID');
	}

	public function prestacion()
	{
		return $this->belongsTo(Prestacion::class, 'PRE_ID');
	}
}
