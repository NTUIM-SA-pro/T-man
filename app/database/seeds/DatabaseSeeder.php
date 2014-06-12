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

		// in SkillSeeder.php
		$this->call('SkillSeeder');

		// in UserSeeder.php
		//$this->call('UserSeeder');
	}
}
