<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('skills', function($table)
    	{
        	$table->increments('id');
        	$table->string('name');
        	$table->string('group');
        	$table->string('description');
        	$table->integer('user_id')->unsigned();
        	// foreign key, 指到users 的id
        	$table->foreign('user_id')
      		      ->references('id')->on('users')
      		      ->onDelete('cascade')
      		      ->onUpdate('cascade');
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
		Schema::drop('skills');
	}

}
