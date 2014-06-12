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
		Schema::create('work_skills', function($table){
			// foreign key: work id
            $table->integer('work_skills_wid')->unsigned();
			$table->foreign('work_skills_wid')
				->references('wid')
				->on('works')
				->onDelete('cascade');
			// foreign key: skill id
            $table->integer('work_skills_sid')->unsigned();
			$table->foreign('work_skills_sid')
				->references('sid')
				->on('skills')
				->onDelete('cascade');
			// primary key: work id + skill id
			$table->primary(array('work_skills_wid', 'work_skills_sid'));
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
        Schema::drop('work_skills');
	}
}
