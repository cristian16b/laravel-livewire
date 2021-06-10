<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Entidad
 * 
 * @property int $ENT_ID
 * @property string $ENT_ASOC_PREST
 * @property string|null $ENT_RAZON_SOCIAL
 * @property string|null $ENT_DOMICILIO
 * @property string|null $ENT_TELEFONO
 * @property string|null $ENT_CORREO
 * @property string|null $ENT_PAGINA_WEB
 * @property int $ENT_PORC
 * @property Carbon $ENT_FECHA
 * 
 * @property Collection|Afiliado[] $afiliados
 * @property Collection|CuentaCorriente[] $cuenta_corrientes
 * @property Collection|ProcesoArch[] $proceso_arches
 *
 * @package App\Models
 */
class Entidad extends Model
{
	protected $table = 'entidad';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ENT_ID' => 'int',
		'ENT_PORC' => 'int'
	];

	protected $dates = [
		'ENT_FECHA'
	];

	protected $fillable = [
		'ENT_RAZON_SOCIAL',
		'ENT_DOMICILIO',
		'ENT_TELEFONO',
		'ENT_CORREO',
		'ENT_PAGINA_WEB',
		'ENT_PORC',
		'ENT_FECHA'
	];

	public function afiliados()
	{
		return $this->hasMany(Afiliado::class, 'ENT_ID');
	}

	public function cuenta_corrientes()
	{
		return $this->hasMany(CuentaCorriente::class, 'ENT_ID');
	}

	public function proceso_arches()
	{
		return $this->hasMany(ProcesoArch::class, 'ENT_ID');
	}
}
