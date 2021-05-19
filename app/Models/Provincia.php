<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Provincium
 * 
 * @property int $id
 * @property string $nombre
 * @property string $codigo31662
 * 
 * @property Collection|Localidad[] $localidads
 *
 * @package App\Models
 */
class Provincia extends Model
{
	protected $table = 'provincia';
	public $timestamps = false;

	protected $fillable = [
		'nombre',
		'codigo31662'
	];

	public function localidads()
	{
		return $this->hasMany(Localidad::class, 'provincia_id');
	}
}
