<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWorksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_works', function($table)
        {
            // foreign key: user id
            $table->integer('user_works_uid')->unsigned();
            $table->foreign('user_works_uid')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            // foreign key: work id
            $table->integer('user_works_wid')->unsigned();
			$table->foreign('user_works_wid')
				->references('wid')
				->on('works')
				->onDelete('cascade');
			// primary key: user id + work id
			$table->primary(array('user_works_uid', 'user_works_wid'));
			/* user 和 work 之間的關係:
			 * 0. 發案人, 未接
			 * 1. 發案人, 未確認
			 * 2. 發案人, 已確認
			 * 3. 接案人, 未確認
			 * 4. 接案人, 已確認
			 */
			$table->integer('status')
				->nullable()
				->default(0);
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
		Schema::drop('user_works');
	}

}
