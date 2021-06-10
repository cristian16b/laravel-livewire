<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Afiliado
 * 
 * @property int $AFI_ID
 * @property int $PAR_ID
 * @property int $ENT_ID
 * @property string $AFI_ID_CAJA
 * @property string|null $ENT_ASOC_PREST
 * @property string|null $AFI_TIPO_DOCUMENTO
 * @property string|null $AFI_SEXO
 * @property string|null $AFI_NRO_DOCUMENTO
 * @property Carbon|null $AFI_FECHA_NACIM
 * @property string|null $AFI_APELLIDO_NOMBRE
 * @property Carbon|null $AFI_FECHA_INGRESO
 * 
 * @property Parentesco $parentesco
 * @property Entidad $entidad
 * @property Collection|EstadoAfiliado[] $estado_afiliados
 * @property Collection|Prestacion[] $prestacions
 *
 * @package App\Models
 */
class Afiliado extends Model
{
	protected $table = 'afiliado';
	protected $primaryKey = 'AFI_ID';
	public $timestamps = false;

	protected $casts = [
		'PAR_ID' => 'int',
		'ENT_ID' => 'int'
	];

	protected $dates = [
		'AFI_FECHA_NACIM',
		'AFI_FECHA_INGRESO'
	];

	protected $fillable = [
		'PAR_ID',
		'ENT_ID',
		'AFI_ID_CAJA',
		'ENT_ASOC_PREST',
		'AFI_TIPO_DOCUMENTO',
		'AFI_SEXO',
		'AFI_NRO_DOCUMENTO',
		'AFI_FECHA_NACIM',
		'AFI_APELLIDO_NOMBRE',
		'AFI_FECHA_INGRESO'
	];

	public function parentesco()
	{
		return $this->belongsTo(Parentesco::class, 'PAR_ID');
	}

	public function entidad()
	{
		return $this->belongsTo(Entidad::class, 'ENT_ID')
					->where('entidad.ENT_ID', '=', 'afiliado.ENT_ID')
					->where('entidad.ENT_ASOC_PREST', '=', 'afiliado.ENT_ASOC_PREST');
	}

	public function estado_afiliados()
	{
		return $this->hasMany(EstadoAfiliado::class, 'AFI_ID');
	}

	public function prestacions()
	{
		return $this->hasMany(Prestacion::class, 'AFI_ID');
	}
}
