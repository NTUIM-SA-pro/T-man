<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatagoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('catagorys', function($table)
        {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('description');
            $table->timestamps();

        });
        DB::table('catagorys')->insert(array(
        	'name' => 'Web Design',
        	'description' => 'Design webpage, including back-end and fornt-end.'
        	));
        DB::table('catagorys')->insert(array(
        	'name' => 'Others',
        	'description' => 'Others.'
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
        Schema::drop('catagorys');
	}

}
