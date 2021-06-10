<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FormaPago
 * 
 * @property int $FOR_ID
 * @property string|null $FOR_DES
 * 
 * @property Collection|Pago[] $pagos
 * @property PagoPrestacion $pago_prestacion
 *
 * @package App\Models
 */
class FormaPago extends Model
{
	protected $table = 'forma_pago';
	protected $primaryKey = 'FOR_ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'FOR_ID' => 'int'
	];

	protected $fillable = [
		'FOR_DES'
	];

	public function pagos()
	{
		return $this->hasMany(Pago::class, 'FOR_ID');
	}

	public function pago_prestacion()
	{
		return $this->hasOne(PagoPrestacion::class, 'FOR_ID');
	}
}
