<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('projects', function($table)
    	{
        	$table->increments('id');
        	$table->dateTime('time');
        	$table->string('description');
        	$table->timestamps();
        	$table->integer('post_by')->unsigned();
        	$table->foreign('post_by')
      		      ->references('id')->on('users')
      		      ->onDelete('cascade')
      		      ->onUpdate('cascade');    
      		$table->integer('taken_by')->unsigned();
      		$table->foreign('taken_by')
      		      ->references('id')->on('users')
      		      ->onDelete('cascade')
      		      ->onUpdate('cascade');   

      	});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}
