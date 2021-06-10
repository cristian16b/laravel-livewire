<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 * 
 * @property int $PAG_ID
 * @property int|null $FOR_ID
 * @property int $ENT_ID
 * @property string $ENT_ASOC_PREST
 * @property Carbon|null $PAG_FECHA
 * @property float|null $PAG_MONTO
 * @property string|null $PAG_COMPROB
 * @property string|null $PAG_OBSERV
 * @property string $PAG_TIPO
 * 
 * @property FormaPago|null $forma_pago
 * @property Collection|PagoCtacte[] $pago_ctactes
 *
 * @package App\Models
 */
class Pago extends Model
{
	protected $table = 'pago';
	protected $primaryKey = 'PAG_ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'PAG_ID' => 'int',
		'FOR_ID' => 'int',
		'ENT_ID' => 'int',
		'PAG_MONTO' => 'float'
	];

	protected $dates = [
		'PAG_FECHA'
	];

	protected $fillable = [
		'FOR_ID',
		'ENT_ID',
		'ENT_ASOC_PREST',
		'PAG_FECHA',
		'PAG_MONTO',
		'PAG_COMPROB',
		'PAG_OBSERV',
		'PAG_TIPO'
	];

	public function forma_pago()
	{
		return $this->belongsTo(FormaPago::class, 'FOR_ID');
	}

	public function pago_ctactes()
	{
		return $this->hasMany(PagoCtacte::class, 'PAG_ID');
	}
}
