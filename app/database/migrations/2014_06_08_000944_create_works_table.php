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
			$table->string('work_description');
			$table->string('reward');
			$table->string('work_img')
				->nullable()
				->default('uploads/girl.jpg');
			//foreign key
            $table->integer('work_uid')->unsigned();
			$table->foreign('work_uid')
				->references('id')
				->on('users')
				->onDelete('cascade');
			$table->integer('status');
			$table->date('duetime');
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
