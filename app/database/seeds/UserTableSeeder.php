<?php
class UserTableSeeder extends DatabaseSeeder
{
	public function run ()
	{
		DB::table('users')->delete(); //first empty the table
		User::create(array('full_name'=>'xyz', 'email'=>'foo@bar.com', 'password'=>Hash::make('foobar'))); //Create new users, with correct parameters

	}
}