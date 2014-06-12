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
		Schema::create('profiles', function($table){
			$table->string('pname')->nullable()->default();;
			// foreign key
            $table->integer('profiles_uid')->unsigned();
			$table->foreign('profiles_uid')
				->references('id')
				->on('users')
				->onDelete('cascade');
			// primary key: user name + user id
			$table->primary(array('pname','profiles_uid'));
			$table->string('profiles_img')
				->nullable()
				->default('uploads/empty_profile.jpg');
			$table->string('introduction')
				->nullable()
				->default();;
			$table->boolean('sex')
				->nullable()
				->default('2');
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
        Schema::drop('profiles');
	}

}
