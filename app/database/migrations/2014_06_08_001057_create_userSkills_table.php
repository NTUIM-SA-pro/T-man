<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSkillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_skills', function($table){
			// foreign key: user id
            $table->integer('user_skills_uid')->unsigned();
			$table->foreign('user_skills_uid')
				->references('id')
				->on('users')
				->onDelete('cascade');
			// foreign key: skill id
            $table->integer('user_skills_sid')->unsigned();
			$table->foreign('user_skills_sid')
				->references('sid')
				->on('skills')
				->onDelete('cascade');
			// primary key: user id + skill id
			$table->primary(array('user_skills_uid', 'user_skills_sid'));
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
        Schema::drop('user_skills');
	}

}
