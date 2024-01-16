<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Database\Eloquent\Builder;

class ArticleController extends Controller
{
	public function index()
	{
		$categoryId = request('category_id');
		$articles = Article::query()
			->select(['id', 'user_id', 'category_id', 'title', 'image', 'views_count', 'summary'])
			->where('status', 1)
			->when($categoryId, function (Builder $query) use ($categoryId) {
				return $query->where('category_id', $categoryId);
			})
			->with([
				'user:id,name',
				'category:id,name'
			])
			->orderBy('id', 'DESC')
			->paginate()
		;
		return response()->success('', compact('articles'));
	}

	public function show(string $articleId)
	{
		$article = Article::query()
			->with([
				'user:id,name',
				'category:id,name'
			])
			->select([
				'id',
				'user_id',
				'category_id',
				'title',
				'summary',
				'image',
				'body',
				'slug',
				'resource',
				'views_count',
			])
			->where('status', 1)
			->findOrFail($articleId);

    $article->increment('views_count');

		return response()->success('', compact('article'));
	}

  public function getRecent()
  {
    $articles = Article::query()
      ->select(['id', 'user_id', 'category_id', 'title', 'image', 'views_count', 'summary'])
      ->where('status', 1)
      ->with([
        'user:id,name',
        'category:id,name'
      ])
      ->orderBy('id', 'DESC')
      ->latest('id')
      ->take(3)
      ->get()
    ;
    return response()->success('', compact('articles'));
  }
}
