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
            $table->increments('id')->unique();
            // $table->foreign('host')->reference('id')->on('users'); 等到跟users那邊join完再改回來
            $table->integer('host');
            $table->string('img');
            $table->string('name', 50);
            $table->text('description');
            $table->string('reward');
            $table->integer('status');
            $table->dateTime('emergency');
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
        Schema::drop('works');
	}

}