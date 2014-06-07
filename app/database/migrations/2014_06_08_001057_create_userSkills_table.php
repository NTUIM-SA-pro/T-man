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
            $table->integer('user_id')->unsigned();
			$table->foreign('user_id')
				->references('id')->on('users')->onDelete('cascade');
            $table->integer('skill_id')->unsigned();
			$table->foreign('skill_id')
				->references('id')->on('skills')->onDelete('cascade');
			$table->primary(array('user_id', 'skill_id'));
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
        Schema::drop('userSkills');
	}

}
