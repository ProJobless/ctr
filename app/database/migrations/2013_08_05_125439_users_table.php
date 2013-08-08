<?php

use Illuminate\Database\Migrations\Migration;

class UsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($u){
			$u->increments('id');
			$u->string('full_name', 255);
			$u->string('email', 255);
			$u->string('password',64);
			//$u->softDeletes();
			$u->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}