<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Banco
 * 
 * @property int $BAN_ID
 * @property string $BAN_NRO_SUC
 * @property string $BAN_NOM
 * @property string $BAN_NOM_SUC
 * @property Carbon $BAN_FECHA
 * @property string $BAN_ESTADO
 *
 * @package App\Models
 */
class Banco extends Model
{
	protected $table = 'banco';
	protected $primaryKey = 'BAN_ID';
	public $timestamps = false;

	protected $dates = [
		'BAN_FECHA'
	];

	protected $fillable = [
		'BAN_NRO_SUC',
		'BAN_NOM',
		'BAN_NOM_SUC',
		'BAN_FECHA',
		'BAN_ESTADO'
	];
}
