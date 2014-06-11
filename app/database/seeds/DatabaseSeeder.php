<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// in CategorySeeder.php
		$this->call('CategorySeeder');

		// in SkillSeeder.php
		$this->call('SkillSeeder');
	}
}
