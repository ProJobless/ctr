<?php

use Illuminate\Database\Migrations\Migration;

class SoftDeleteClientContactChannel extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('contacts', function($c)
			{
			$c->softDeletes();	
			});
		Schema::table('clients', function($c)
			{
			$c->softDeletes();	
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