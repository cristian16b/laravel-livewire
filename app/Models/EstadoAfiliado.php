<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EstadoAfiliado
 * 
 * @property Carbon $EST_FECHA_EF
 * @property int $AFI_ID
 * @property string|null $EST_ESTADO
 * @property string $est_baja
 * 
 * @property Afiliado $afiliado
 *
 * @package App\Models
 */
class EstadoAfiliado extends Model
{
	protected $table = 'estado_afiliado';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'AFI_ID' => 'int'
	];

	protected $dates = [
		'EST_FECHA_EF'
	];

	protected $fillable = [
		'EST_ESTADO',
		'est_baja'
	];

	public function afiliado()
	{
		return $this->belongsTo(Afiliado::class, 'AFI_ID');
	}
}
