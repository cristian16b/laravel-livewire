<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sexo
 * 
 * @property int $SEX_ID
 * @property string $SEX_DES
 * @property Carbon $SEX_FEC_ALT
 * @property string $SEX_EST
 *
 * @package App\Models
 */
class Sexo extends Model
{
	protected $table = 'sexo';
	protected $primaryKey = 'SEX_ID';
	public $timestamps = false;

	protected $dates = [
		'SEX_FEC_ALT'
	];

	protected $fillable = [
		'SEX_DES',
		'SEX_FEC_ALT',
		'SEX_EST'
	];
}
