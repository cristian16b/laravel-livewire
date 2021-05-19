<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EstadoCivil
 * 
 * @property int $EST_CIV_ID
 * @property string $EST_CIV_DES
 * @property Carbon $EST_CIV_FEC_ALT
 * @property string $EST_CIV_EST
 *
 * @package App\Models
 */
class EstadoCivil extends Model
{
	protected $table = 'estado_civil';
	protected $primaryKey = 'EST_CIV_ID';
	public $timestamps = false;

	protected $dates = [
		'EST_CIV_FEC_ALT'
	];

	protected $fillable = [
		'EST_CIV_DES',
		'EST_CIV_FEC_ALT',
		'EST_CIV_EST'
	];
}
