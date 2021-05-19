<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Parentesco
 * 
 * @property int $PAR_ID
 * @property string|null $PAR_DES
 * 
 * @property Collection|Afiliado[] $afiliados
 *
 * @package App\Models
 */
class Parentesco extends Model
{
	protected $table = 'parentesco';
	protected $primaryKey = 'PAR_ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'PAR_ID' => 'int'
	];

	protected $fillable = [
		'PAR_DES'
	];

	public function afiliados()
	{
		return $this->hasMany(Afiliado::class, 'PAR_ID');
	}
}
