<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Partenaire
 * 
 * @property int $id_partenaire
 * @property string|null $nom
 * @property string|null $fonction
 * @property string|null $raison_sociale
 * @property string|null $telephone
 * @property string|null $email
 * @property string|null $adresse
 * @property string|null $ville
 * @property string|null $pays
 * @property string|null $site_web
 * @property string|null $categorie
 * @property string|null $service_offert
 * @property string|null $commission
 * @property string|null $avantage
 * @property string|null $autre_info
 * @property int|null $etat
 * @property string|null $logo
 *
 * @package App\Models
 */
class Partenaire extends Model
{
	protected $table = 'partenaire';
	protected $primaryKey = 'id_partenaire';
	public $timestamps = false;

	protected $casts = [
		'etat' => 'int'
	];

	protected $fillable = [
		'nom',
		'fonction',
		'raison_sociale',
		'telephone',
		'email',
		'adresse',
		'ville',
		'pays',
		'site_web',
		'categorie',
		'service_offert',
		'commission',
		'avantage',
		'autre_info',
		'etat',
		'logo'
	];
}
