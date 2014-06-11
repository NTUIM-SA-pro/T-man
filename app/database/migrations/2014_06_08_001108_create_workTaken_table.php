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
            $table->increments('wtid');
            $table->integer('worktaken_status');
            $table->integer('worktaken_uid')->unsigned();
            $table->foreign('worktaken_uid')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->integer('worktaken_wid')->unsigned();
			$table->foreign('worktaken_wid')
				->references('wid')
				->on('works')
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
		//
        Schema::drop('skills');
	}

}
