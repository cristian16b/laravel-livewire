<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ParamRecaudacion
 * 
 * @property int $PRM_ID
 * @property float|null $PRM_CUOTA
 * @property float|null $PRM_GASTO
 * @property Carbon $PRM_FECHA_EF
 * @property string|null $PRM_ESTADO
 *
 * @package App\Models
 */
class ParamRecaudacion extends Model
{
	protected $table = 'param_recaudacion';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'PRM_ID' => 'int',
		'PRM_CUOTA' => 'float',
		'PRM_GASTO' => 'float'
	];

	protected $dates = [
		'PRM_FECHA_EF'
	];

	protected $fillable = [
		'PRM_CUOTA',
		'PRM_GASTO',
		'PRM_ESTADO'
	];
}
