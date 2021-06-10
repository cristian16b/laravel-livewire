<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProcesoArch
 * 
 * @property int $ENT_ID
 * @property string $ENT_ASOC_PREST
 * @property string $PRO_ARC_NOM
 * @property Carbon $PRO_FEC_ING
 * @property string|null $PRO_EST
 * @property string|null $PRO_ARC_ERROR
 * 
 * @property Entidad $entidad
 *
 * @package App\Models
 */
class ProcesoArch extends Model
{
	protected $table = 'proceso_arch';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ENT_ID' => 'int'
	];

	protected $dates = [
		'PRO_FEC_ING'
	];

	protected $fillable = [
		'PRO_FEC_ING',
		'PRO_EST',
		'PRO_ARC_ERROR'
	];

	public function entidad()
	{
		return $this->belongsTo(Entidad::class, 'ENT_ID')
					->where('entidad.ENT_ID', '=', 'proceso_arch.ENT_ID')
					->where('entidad.ENT_ASOC_PREST', '=', 'proceso_arch.ENT_ASOC_PREST');
	}
}
