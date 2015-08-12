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

		$this->call('UsersTableSeeder');
		$this->command->info('User table seeded!');
		$this->call('PertaniansTableSeeder');
		$this->command->info('Pertanian table seeded!');
		$this->call('PeternakansTableSeeder');
		$this->command->info('Peternakan table seeded!');

	}

}
