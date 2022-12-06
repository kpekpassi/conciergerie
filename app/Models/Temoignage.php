<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Temoignage
 * 
 * @property int $id_temoignage
 * @property string|null $fonction
 * @property string|null $description
 * @property string|null $nom
 * @property string|null $logo
 *
 * @package App\Models
 */
class Temoignage extends Model
{
	protected $table = 'temoignage';
	protected $primaryKey = 'id_temoignage';
	public $timestamps = false;

	protected $fillable = [
		'fonction',
		'description',
		'nom',
		'logo'
	];
}
