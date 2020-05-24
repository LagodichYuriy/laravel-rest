<?php

use App\Review;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ReviewsTableSeeder extends Seeder
{
	public function run()
	{
		Review::query()->truncate();

		$faker = \Faker\Factory::create();

		$users = User::all()->toArray();

		$buffer = [];

		for ($i = 0; $i < 50; $i++)
		{
			$user_a = (object) Arr::random($users);
			$user_b = (object) Arr::random($users);

			if ($user_a->id == $user_b->id)
			{
				continue;
			}

			if (isset($buffer[$user_a->id][$user_b->id]))
			{
				continue;
			}


			Review::create
			([
				'user_id_employee' => $user_a->id,
				'user_id_reviewer' => $user_b->id,
				'rating' => mt_rand(1, 5),
				'comment' => $faker->text
			]);

			$buffer[$user_a->id][$user_b->id] = true;
		}
	}
}
