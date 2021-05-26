<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoPrestacion
 * 
 * @property int $TPR_ID
 * @property Carbon $TPR_FECHA_EF
 * @property string|null $TPR_DES
 * @property float|null $TPR_MONTO_TOPE
 * @property string|null $TPR_ESTADO
 * 
 * @property Collection|Prestacion[] $prestacions
 *
 * @package App\Models
 */
class TipoPrestacion extends Model
{
	protected $table = 'tipo_prestacion';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'TPR_ID' => 'int',
		'TPR_MONTO_TOPE' => 'float'
	];

	protected $dates = [
		'TPR_FECHA_EF'
	];

	protected $fillable = [
		'TPR_DES',
		'TPR_MONTO_TOPE',
		'TPR_ESTADO'
	];

	protected $primaryKey = 'TPR_ID';

	public function prestacions()
	{
		return $this->hasMany(Prestacion::class, 'TPR_ID');
	}
}
