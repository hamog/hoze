<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Announcement;
use App\Models\Article;
use App\Models\Category;
use App\Models\Link;
use App\Models\MenuGroup;
use App\Models\News;
use App\Models\Setting;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		// \App\Models\User::factory(10)->create();

		//  User::factory()->create([
		//  	'name' => 'ali',
		//  	'email' => 'alialaedin1234@gmail.com',
		//  	"password" => bcrypt("12345678"),
		//  	"phone_number" => "09113711486",
		//  ]);
		// Category::factory()->count(10)->create();
		// News::factory()->count(20)->create();
		// Announcement::factory()->count(20)->create();
		// Article::factory()->count(20)->create();
		// Tag::factory()->count(10)->create();
		// MenuGroup::factory()->count(10)->create();
		// Link::factory()->count(30)->create();
		Setting::create([
			'group' => 'general',
			'label' => 'لوگو',
			'name' => 'logo',
			'type' => 'image',
		]);
		Setting::create([
			'group' => 'general',
			'label' => 'ایمیل',
			'name' => 'email',
			'type' => 'email',
			'value' => 'alialaedin1383@gmail.com',
		]);
		Setting::create([
			'group' => 'general',
			'label' => 'آدرس',
			'name' => 'address',
			'type' => 'text',
			'value' => 'گرگان - ویلاشهر',
		]);
		Setting::create([
			'group' => 'general',
			'label' => 'شماره موبایل',
			'name' => 'phone_bunmber',
			'type' => 'text',
			'value' => '09368917169',
		]);
	}
}
