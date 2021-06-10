<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Localidad
 * 
 * @property int $id
 * @property int $provincia_id
 * @property string $nombre
 * @property int $codigopostal
 * 
 * @property Provincium $provincium
 *
 * @package App\Models
 */
class Localidad extends Model
{
	protected $table = 'localidad';
	public $timestamps = false;

	protected $casts = [
		'provincia_id' => 'int',
		'codigopostal' => 'int'
	];

	protected $fillable = [
		'provincia_id',
		'nombre',
		'codigopostal'
	];

	public function provincium()
	{
		return $this->belongsTo(Provincium::class, 'provincia_id');
	}
}
