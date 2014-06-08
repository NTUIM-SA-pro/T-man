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
			$table->string('name')->nullable()->default();;
            $table->integer('user_id')->unsigned();
			$table->foreign('user_id')
				->references('id')->on('users')
				->onDelete('cascade');
			$table->primary(array('name','user_id'));
			$table->string('img')->nullable()->default('uploads/empty_profile.jpg');
			$table->string('introduction')->nullable()->default();;
            $table->timestamps();
            $table->boolean('sex')->nullable()->default('1');
            
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
        Schema::drop('profiles');
	}

}
