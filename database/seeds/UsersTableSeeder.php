<?php

use App\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::query()->truncate();

		$hash = Hash::make('1234');

		$faker = \Faker\Factory::create();

		for ($i = 0; $i < 50; $i++)
		{
			User::create
			([
				'name' => $faker->name,
				'email' => $faker->email,
				'password' => $hash
			]);
		}
	}
}
