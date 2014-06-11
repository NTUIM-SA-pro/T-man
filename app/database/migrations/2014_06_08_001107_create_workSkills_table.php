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
			$table->increments('id');
            $table->integer('workSkill_wid')->unsigned();
			$table->foreign('workSkill_wid')
				->references('wid')
				->on('works')
				->onDelete('cascade');
			$table->string('skillname');
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
