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
		Schema::create('userSkills', function($table){
            $table->integer('userSkill_uid')->unsigned();
			$table->foreign('userSkill_uid')
				->references('id')
				->on('users')
				->onDelete('cascade');
            $table->integer('userSkill_sid')->unsigned();
			$table->foreign('userSkill_sid')
				->references('sid')
				->on('skills')
				->onDelete('cascade');
			$table->primary(array('userSkill_uid', 'userSkill_sid'));
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
