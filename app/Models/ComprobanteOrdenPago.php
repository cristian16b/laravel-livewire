<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ComprobanteOrdenPago
 * 
 * @property int $COM_ORD_PAG_ID
 * @property int $COM_ORD_PAG_COMP_ID
 * @property int $COM_ORD_PAG_ORD_ID
 *
 * @package App\Models
 */
class ComprobanteOrdenPago extends Model
{
	protected $table = 'comprobante_orden_pago';
	protected $primaryKey = 'COM_ORD_PAG_ID';
	public $timestamps = false;

	protected $casts = [
		'COM_ORD_PAG_COMP_ID' => 'int',
		'COM_ORD_PAG_ORD_ID' => 'int'
	];

	protected $fillable = [
		'COM_ORD_PAG_COMP_ID',
		'COM_ORD_PAG_ORD_ID'
	];
}
