<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;

/**
 * Class Usuariosistema
 * 
 * @property string $USUID
 * @property string|null $USUDESCRIPCION
 * @property string|null $USUCLAVE
 * @property string|null $USUPREGUNTA
 * @property string|null $USUCORREO
 * @property string|null $USUESTADO
 * @property string $GRUID
 *
 * @package App\Models
 */
class Usuariosistema extends Authenticatable implements JWTSubject
{
	protected $table = 'usuariosistema';
	protected $primaryKey = 'USUID';
	public $incrementing = false;
	public $timestamps = false;

	use HasFactory;
    use Notifiable;

	protected $fillable = [
		'USUID',
		'USUDESCRIPCION',
		// 'USUCLAVE',
		'USUPREGUNTA',
		'USUCORREO',
		'USUESTADO',
		'GRUID'
	];

	protected $hidden = [
        'USUCLAVE',
    ];

	public function getJWTIdentifier(){
		return $this->getKey();
	}
	
	public function getJWTCustomClaims(){
		return [];
	}
}