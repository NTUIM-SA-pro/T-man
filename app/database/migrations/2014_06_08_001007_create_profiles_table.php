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
			$table->string('pname')->nullable()->default();;
			// foreign key
            $table->integer('profile_uid')->unsigned();
			$table->foreign('profile_uid')
				->references('id')
				->on('users')
				->onDelete('cascade');
			$table->primary(array('pname','profile_uid'));
			$table->string('profile_img')
				->nullable()
				->default('uploads/empty_profile.jpg');
			$table->string('introduction')
				->nullable()
				->default();;
			$table->boolean('sex')
				->nullable()
				->default('1');
            $table->timestamps();
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
