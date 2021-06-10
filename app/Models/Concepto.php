<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Concepto
 * 
 * @property int $CON_ID
 * @property string|null $CON_DES
 * 
 * @property PagoPrestacion $pago_prestacion
 *
 * @package App\Models
 */
class Concepto extends Model
{
	protected $table = 'concepto';
	protected $primaryKey = 'CON_ID';
	public $timestamps = false;

	protected $fillable = [
		'CON_DES'
	];

	public function pago_prestacion()
	{
		return $this->hasOne(PagoPrestacion::class, 'CON_ID');
	}
}
