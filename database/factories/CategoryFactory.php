<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;
use Ybazli\Faker\Facades\Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	protected $model = Category::class;
	public function definition(): array
	{
		return [
			"name" => Faker::word(),
			"slug" => $this->faker->slug(),
			"type" => "article",
			"status" => $this->faker->boolean()
		];
	}
}
