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
        	$table->string('name')->default();
        	$table->string('img')->default();
        	$table->string('dept')->default();
        	$table->string('mail')->default();
        	$table->string('background')->default();
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
		Schema::drop('per_datas');
	}

}
