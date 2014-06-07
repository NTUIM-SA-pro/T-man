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
		//
		Schema::create('userSkills', function($table){
			$table->foreign('user_id')
				->references('id')->on('users');
			$table->foreign('skill_id')
				->references('id')->on('skills');
			$table->primary(array('user_id', 'skill_id'));
		})
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
