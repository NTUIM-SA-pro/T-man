<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkSkillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('workSkills', function($table){
			$table->foreign('work_id')
				->references('id')->on('works');
			$table->foreign('skill_id')
				->references('id')->on('skills');
			$table->primary(array('work_id', 'skill_id'));
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
