<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DevisExpress
 * 
 * @property int $id_devis_express
 * @property string|null $ville_depart
 * @property string|null $ville_arrive
 * @property string|null $date_depart
 * @property string|null $date_arrive
 * @property int|null $nombre_pers
 * @property string|null $lieu_depart
 * @property string|null $lieu_arrive
 * @property string|null $type_reservation
 * @property string|null $lieu
 * @property string|null $type_evenement
 * @property string|null $date_envoi
 * @property string|null $poids
 * @property string|null $type_service
 * @property string|null $nom
 * @property string|null $telephone
 * @property string|null $email
 * @property string|null $adresse
 *
 * @package App\Models
 */
class DevisExpress extends Model
{
	protected $table = 'devis_express';
	protected $primaryKey = 'id_devis_express';
	public $timestamps = false;

	protected $casts = [
		'nombre_pers' => 'int'
	];

	protected $fillable = [
		'ville_depart',
		'ville_arrive',
		'date_depart',
		'date_arrive',
		'nombre_pers',
		'lieu_depart',
		'lieu_arrive',
		'type_reservation',
		'lieu',
		'type_evenement',
		'date_envoi',
		'poids',
		'type_service',
		'nom',
		'telephone',
		'email',
		'adresse'
	];
}
