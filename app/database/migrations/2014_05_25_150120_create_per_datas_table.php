<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerDatasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('per_datas', function($table)
    	{
        	$table->increments('id');
        	$table->string('name');
        	$table->string('img');
        	$table->string('dept');
        	$table->string('background');
        	/*$table->integer('user_id')->unsigned();
        	$table->foreign('user_id')
      		      ->references('id')->on('users')
      		      ->onDelete('cascade')
      		      ->onUpdate('cascade');*/
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
		Schema::drop('per_datas');
	}

}
