<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Menu
 * 
 * @property int $MENID
 * @property int $OBJID
 * @property string|null $MENDES
 * @property string|null $MENURL
 * @property int|null $MENORDEN
 * @property string|null $MENACTIVO
 * 
 * @property Objeto $objeto
 *
 * @package App\Models
 */
class Menu extends Model
{
	protected $table = 'menu';
	protected $primaryKey = 'MENID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'MENID' => 'int',
		'OBJID' => 'int',
		'MENORDEN' => 'int'
	];

	protected $fillable = [
		'OBJID',
		'MENDES',
		'MENURL',
		'MENORDEN',
		'MENACTIVO'
	];

	public function objeto()
	{
		return $this->belongsTo(Objeto::class, 'OBJID');
	}
}
