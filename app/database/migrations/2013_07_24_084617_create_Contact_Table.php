<?php

use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('contacts', function($contact){
			$contact->increments('id');
			$contact->integer('client_id');
			$contact->string('account_link');	
			$contact->timestamps();
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
		Schema::drop('contacts');
	}

}