<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('profiles', function($table){
			$table->string('name');
			$table->foreign('user_id')
				->references('id')->on('users')
				->onDelete('cascade');
			$table->primary(array('name','user_id'));
			$table->string('img');
			$table->string('introduction');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('profiles');
	}

}
