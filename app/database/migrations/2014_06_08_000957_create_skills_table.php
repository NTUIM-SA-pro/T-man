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
		//
        Schema::create('skills', function($table)
        {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('description');
            $table->foreign('cata_id')->references('id')->on('catagorys')->onDelete('cascade');
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