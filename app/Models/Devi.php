<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Devi
 * 
 * @property int $id_devis
 * @property string|null $civilite
 * @property string|null $raison_sociale
 * @property string|null $nom
 * @property string|null $ville
 * @property string|null $pays
 * @property string|null $service
 * @property string|null $besoin
 * @property string|null $contrainte
 * @property string|null $email
 * @property string|null $telephone
 * @property string|null $type
 *
 * @package App\Models
 */
class Devi extends Model
{
	protected $table = 'devis';
	protected $primaryKey = 'id_devis';
	public $timestamps = false;

	protected $fillable = [
		'civilite',
		'raison_sociale',
		'nom',
		'ville',
		'pays',
		'service',
		'besoin',
		'contrainte',
		'email',
		'telephone',
		'type'
	];
}
