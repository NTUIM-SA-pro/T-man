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
            $table->integer('cata_id')->unsigned();
            $table->foreign('cata_id')->references('id')->on('catagorys')->onDelete('cascade');
            $table->timestamps();

        });

        DB::table('skills')->insert(array(
        	'name' => 'PHP',
        	'description' => '',
        	'cata_id' => 1
        	));
        DB::table('skills')->insert(array(
        	'name' => 'SQL',
        	'description' => '',
        	'cata_id' => 1
        	));
        DB::table('skills')->insert(array(
        	'name' => 'ASP',
        	'description' => '',
        	'cata_id' => 1
        	));
        DB::table('skills')->insert(array(
        	'name' => 'Clean',
        	'description' => '',
        	'cata_id' => 2
        	));
        DB::table('skills')->insert(array(
        	'name' => 'fix PC',
        	'description' => '',
        	'cata_id' => 2
        	));
        DB::table('skills')->insert(array(
        	'name' => 'Play',
        	'description' => '',
        	'cata_id' => 2
        	));
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
