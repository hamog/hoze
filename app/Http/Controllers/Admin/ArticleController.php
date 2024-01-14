<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleStoreRequest;
use App\Http\Requests\ArticleUpdateRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
  public function index()
	{
		$userId = request("user_id") !== "all" ? request("user_id") : null;
		$categoryId = request("category_id") !== "all" ? request("category_id") : null;
		$status = request("status") !== "all" ? request("status") : null;
		$title = request("title");
		$startedDate = request("started_date");
		$finishedDate = request("finished_date");

		$articles = Article::select("id", "status", "title", "image", "created_at", "user_id", "category_id")
			->when($userId, function (Builder $query) use ($userId) {
				return $query->where("user_id", $userId);
			})
			->when($title, function (Builder $query) use ($title) {
				return $query->where("title", "like", "%{$title}%");
			})
			->when($startedDate, function (Builder $query) use ($startedDate) {
				return $query->where("created_at", ">=", $startedDate);
			})
			->when($finishedDate, function (Builder $query) use ($finishedDate) {
				return $query->where("created_at", "<=", $finishedDate);
			})
			->when($categoryId, function (Builder $query) use ($categoryId) {
				return $query->where("category_id", $categoryId);
			})
			->when(isset($status), function (Builder $query) use ($status) {
				return $query->where("status", $status);
			})
			->orderByDesc("id")
			->paginate(15)
			->withQueryString()
		;

		$articlesCount = $articles->total();
		$categories = Category::select("id", "name")->where("type", "article")->get();
		$users = User::select("id", "name", "phone_number")->get();

		return view("Admin.article.index", compact("articles", "categories", "users", "articlesCount"));
	}

	public function show(Article $article)
	{
		return view("Admin.article.show", compact("article"));
	}

	public function create()
	{
		$categories = Category::where("type", "article")->select("id", "name")->get();
		return view("Admin.article.create", compact("categories"));
	}

	public function store(ArticleStoreRequest $request)
	{
		$path = $request->file("image")->store("images", "public");
		Article::create([
			"user_id" => auth()->user()->id,
			"category_id" => $request->category_id,
			"title" => $request->title,
			"summary" => $request->summary,
			"body" => $request->body,
			"slug" => $request->slug,
			"resource" => $request->resource,
			"views_count" => 0,
			"status" => $request->status,
			"image" => $path
		]);
		toastr()->success("مقاله جدید با موفقیت ساخته شد.");
		return redirect()->route("admin.article.index");
	}

	public function edit(Article $article)
	{
		$categories = Category::select("id", "name")->where("type", "article")->get();
		return view("Admin.article.edit", compact("categories", "article"));
	}

	public function update(ArticleUpdateRequest $request, Article $article)
	{
		$inputs = [
			"category_id" => $request->category_id,
			"title" => $request->title,
			"slug" => $request->slug,
			"resource" => $request->resource,
			"summary" => $request->summary,
			"body" => $request->body,
			"status" => $request->status,
		];
		if ($request->hasFile("image")) {
			Storage::delete($article->image);
			$inputs["image"] = $request->file("image")->store("images", "public");
		}
		$article->update($inputs);
		toastr()->success("مقاله با موفقیت ویرایش شد.");
		return redirect()->back()->withInput();
	}

	public function destroy(Article $article)
	{
		$article->delete();
		toastr()->success("مقاله با موفقیت حذف شد.");
		return redirect()->back();
	}
}
