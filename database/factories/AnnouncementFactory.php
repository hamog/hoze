<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Announcement>
 */
class AnnouncementFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			"user_id" => User::all()->random()->id,
			"title" => $this->faker->persianText(40),
			"summary" => $this->faker->persianParagraph(),
			"slug" => $this->faker->slug(),
			"image" => $this->faker->image(),
			"body" => $this->faker->persianText(2000),
			"published_at" => $this->faker->date(),
			"views_count" => $this->faker->numberBetween(1, 1000),
			"status" => $this->faker->boolean(),
		];
	}
}
