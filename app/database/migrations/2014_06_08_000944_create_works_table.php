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
		Schema::create('works', function($table)
		{
			$table->increments('wid');
			$table->string('wname');
			$table->string('works_description');
			$table->string('reward');
			$table->string('works_img')
				->nullable()
				->default('uploads/empty_work.jpg');
			$table->date('duetime');
			//foreign key: user id
            $table->integer('works_uid')->unsigned();
			$table->foreign('works_uid')
				->references('id')
				->on('users')
				->onDelete('cascade');
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
        Schema::drop('works');
	}
}
