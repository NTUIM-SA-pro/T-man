<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('works', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('description');
			$table->string('reward');
			$table->string('img');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->integer('status');
			// $table->timestamp('dueTime');
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
		Schema::drop('users');
	}

}