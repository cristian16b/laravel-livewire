<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Objeto
 * 
 * @property string|null $OBJTIPO
 * @property int $OBJID
 * 
 * @property Collection|Menu[] $menus
 *
 * @package App\Models
 */
class Objeto extends Model
{
	protected $table = 'objeto';
	protected $primaryKey = 'OBJID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'OBJID' => 'int'
	];

	protected $fillable = [
		'OBJTIPO'
	];

	public function menus()
	{
		return $this->hasMany(Menu::class, 'OBJID');
	}
}
