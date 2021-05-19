<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ejercicio
 * 
 * @property int $EJE_ID
 * @property string|null $EJE_DES
 * @property Carbon $EJE_FECDES
 * @property Carbon $EJE_FECHAS
 * @property string $EJE_ESTADO
 * 
 * @property Collection|CuentaCorriente[] $cuenta_corrientes
 *
 * @package App\Models
 */
class Ejercicio extends Model
{
	protected $table = 'ejercicio';
	protected $primaryKey = 'EJE_ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'EJE_ID' => 'int'
	];

	protected $dates = [
		'EJE_FECDES',
		'EJE_FECHAS'
	];

	protected $fillable = [
		'EJE_DES',
		'EJE_FECDES',
		'EJE_FECHAS',
		'EJE_ESTADO'
	];

	public function cuenta_corrientes()
	{
		return $this->hasMany(CuentaCorriente::class, 'EJE_ID');
	}
}
