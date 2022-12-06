<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id_user
 * @property string|null $nom
 * @property string|null $prenom
 * @property string|null $email
 * @property string|null $password
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'user';
	protected $primaryKey = 'id_user';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'nom',
		'prenom',
		'email',
		'password'
	];
}
