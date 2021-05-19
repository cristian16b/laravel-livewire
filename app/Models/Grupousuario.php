<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Grupousuario
 * 
 * @property string $GRUID
 * @property string $OBJTIPO
 * @property int $OBJID
 *
 * @package App\Models
 */
class Grupousuario extends Model
{
	protected $table = 'grupousuario';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'OBJID' => 'int'
	];
}
