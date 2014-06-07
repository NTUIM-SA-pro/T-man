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
            $table->integer('work_id')->unsigned();
			$table->foreign('work_id')
				->references('id')->on('works')->onDelete('cascade');
            $table->integer('skill_id')->unsigned();
			$table->foreign('skill_id')
				->references('id')->on('skills')->onDelete('cascade');
			$table->primary(array('work_id', 'skill_id'));
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
        Schema::drop('workSkills');
	}

}
