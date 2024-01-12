<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Article;
use App\Models\Category;
use App\Models\Link;
use App\Models\News;
use App\Models\Tag;

class DashboardController extends Controller
{
	public function dashboard()
	{
		$newsCount = News::all()->count();
		$limitedNews = News::query()
			->with(['user:id,name', 'category:id,name'])
			->select(['id', 'user_id', 'category_id', 'title', 'published_at', 'featured', 'status'])
			->latest() 
			->take(5)
			->get()
		; 
		$announcementsCount = Announcement::all()->count();
		$articlesCount = Article::all()->count();
		$linksCount = Link::all()->count();
		$categories = Category::query()->select(['id', 'name', 'type', 'status'])->latest()->take(5)->get(); 
		$tags = Tag::query()->select(['id', 'name'])->latest()->take(5)->get(); 

		return view("Admin.home", compact([
			'newsCount',
			'limitedNews',
			'announcementsCount',
			'articlesCount',
			'linksCount',
			'categories',
			'tags'
		]));
	}
}
