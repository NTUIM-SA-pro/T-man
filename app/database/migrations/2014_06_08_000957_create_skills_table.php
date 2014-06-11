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
            $table->string('name');
            $table->string('description');
            $table->integer('cata_id')->unsigned();
            $table->foreign('cata_id')->references('id')->on('catagorys')->onDelete('cascade');
            $table->timestamps();

        });

        /*DB::table('skills')->insert(array(
        	'name' => '電腦',
        	'description' => '',
        	'cata_id' => 1
        	));
        DB::table('skills')->insert(array(
        	'name' => '語文',
        	'description' => '',
        	'cata_id' => 1
        	));
        DB::table('skills')->insert(array(
        	'name' => '運動',
        	'description' => '',
        	'cata_id' => 1
        	));
        DB::table('skills')->insert(array(
        	'name' => '美術',
        	'description' => '',
        	'cata_id' => 2
        	));
        DB::table('skills')->insert(array(
        	'name' => '行政',
        	'description' => '',
        	'cata_id' => 2
        	));
        DB::table('skills')->insert(array(
        	'name' => '其他',
        	'description' => '',
        	'cata_id' => 2
        	));*/
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
