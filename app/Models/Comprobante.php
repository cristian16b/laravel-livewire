<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Comprobante
 * 
 * @property int $Id
 * @property int $PrestacionId
 * @property string $Nro
 * @property Carbon $Fecha
 * @property string $Detalle
 * @property float $Importe
 * @property bool $CoberturaPrevia
 * @property int $ConceptoId
 * @property Carbon|null $FechaBaja
 *
 * @package App\Models
 */
class Comprobante extends Model
{
	protected $table = 'comprobante';
	protected $primaryKey = 'Id';
	public $timestamps = false;

	protected $casts = [
		'PrestacionId' => 'int',
		'Importe' => 'float',
		'CoberturaPrevia' => 'bool',
		'ConceptoId' => 'int'
	];

	protected $dates = [
		'Fecha',
		'FechaBaja'
	];

	protected $fillable = [
		'PrestacionId',
		'Nro',
		'Fecha',
		'Detalle',
		'Importe',
		'CoberturaPrevia',
		'ConceptoId',
		'FechaBaja'
	];
}
