<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorktakenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('worktaken', function($table)
        {
            $table->increments('id');
            $table->integer('status');
            $table->integer('taken_by')->unsigned();
            $table->foreign('taken_by')
                ->references('id')->on('users')->onDelete('cascade');
            $table->integer('work_id')->unsigned();
			$table->foreign('work_id')
				->references('id')->on('works')->onDelete('cascade');
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
        Schema::drop('skills');
	}

}
