<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\News;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ybazli\Faker\Facades\Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	protected $model = News::class;
	public function definition(): array
	{
		return [
			"user_id" => User::all()->random()->id,
			"category_id" => Category::all()->random()->id,
			"title" => $this->faker->persianText(40),
			"subtitle" => $this->faker->persianText(60),
			"summary" => $this->faker->persianParagraph(),
			"slug" => $this->faker->slug(),
			"image" => $this->faker->image(),
			"resource_url" => $this->faker->url(),
			"body" => $this->faker->persianText(2000),
			"published_at" => $this->faker->date(),
			"views_count" => $this->faker->numberBetween(1, 1000),
			"featured" => $this->faker->boolean(),
			"status" => $this->faker->boolean(),
		];
	}
}
