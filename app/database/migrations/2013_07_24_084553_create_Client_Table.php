<?php

use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('clients', function($c){
			$c->increments('id');
			$c->string('full_name');
			$c->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	Schema::drop('clients');
	}

}