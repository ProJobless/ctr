<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	//protected $fillable=array('full_name, email, password');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	/*Validation*/

	public static function validate($input)
	{
		$rules=array(
			'full_name'=>'Required|Max:80|AlphaNum|Min:6',
			'email'=>'Required|AlphaNum|Email',
			'password'=>'Required|AlphaNum|Between: 3:64|Confirmed',
			'password_confirmation'=>'Required|AlphaNum|Between: 3:64|',
			);
	}

}