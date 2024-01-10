<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

class NewsController extends Controller
{
	public function index()
	{
		$search = request('search');
		$categoryId = request('category_id');
		$tagId = request('tag_id');

		$news = News::query()
			->select([
				'id',
				'user_id',
				'category_id',
				'title',
				'subtitle',
				'image',
				'published_at',
				'views_count',
				'featured'
			])
			->where('status', 1)
			->whereDate('published_at', '<=', Carbon::now())
			->when($search, function (Builder $query) use ($search) {
				return $query->where('title', 'like', "%$search%");
			})
			->when($categoryId, function (Builder $query) use ($categoryId) {
				return $query->where('category_id', $categoryId);
			})
			->when($tagId, function (Builder $query) use ($tagId) {
				return $query->with(['tags' => function (Builder $query) use ($tagId) {
					return $query->where('tags.id', $tagId);
				}]);
			})
			->with([
				'user:id,name',
				'category:id,name'
			])
			->orderBy('published_at', 'DESC')
			->paginate();

		return response()->success('', compact('news'));
	}

	public function show(string $newsId)
	{
		$news = News::query()
			->with([
				'user:id,name',
				'category:id,name',
				'tags:id,name'
			])
			->select([
				'id',
				'user_id',
				'category_id',
				'title',
				'subtitle',
				'summary',
				'image',
				'body',
				'slug',
				'resource_url',
				'published_at',
				'views_count',
				'featured',
				])
				->where('status', 1)
				->whereDate('published_at', '<=', Carbon::now())
				->findOrFail($newsId);

    $news->increment('views_count');

		return response()->success('', compact('news'));
	}


  public function getMostVisited()
  {
    $news = News::query()
      ->select([
        'id',
        'user_id',
        'category_id',
        'title',
        'subtitle',
        'image',
        'published_at',
        'views_count',
        'featured'
      ])
      ->where('status', 1)
      ->whereDate('published_at', '<=', Carbon::now())
      ->latest('views_count')
      ->take(5)
      ->get();

    return response()->success('', compact('news'));
  }

  public function getFeatured()
  {
    $news = News::query()
      ->select([
        'id',
        'user_id',
        'category_id',
        'title',
        'subtitle',
        'image',
        'published_at',
        'views_count',
        'featured'
      ])
      ->where('status', 1)
      ->where('featured', 1)
      ->whereDate('published_at', '<=', Carbon::now())
      ->latest('published_at')
      ->take(10)
      ->get();

    return response()->success('', compact('news'));
  }

  public function getRecent()
  {
    $news = News::query()
      ->select([
        'id',
        'user_id',
        'category_id',
        'title',
        'subtitle',
        'image',
        'published_at',
        'views_count',
        'featured'
      ])
      ->where('status', 1)
      ->whereDate('published_at', '<=', Carbon::now())
      ->latest('published_at')
      ->take(10)
      ->get();

    return response()->success('', compact('news'));
  }
}
