<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsStoreRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\Models\Category;
use App\Models\News;
use App\Models\Tag;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;

class NewsContoller extends Controller
{
	public function index()
	{
		$userId = request("user_id") !== "all" ? request("user_id") : null;
		$categoryId = request("category_id") !== "all" ? request("category_id") : null;
		$status = request("status") !== "all" ? request("status") : null;
		$featured = request("featured") !== "all" ? request("featured") : null;
		$title = request("title");
		$startedDate = request("started_date");
		$finishedDate = request("finished_date");

		$allNews = News::select("id", "status", "title", "resource_url", "image", "published_at", "featured", "user_id", "category_id")
			->when($userId, function (Builder $query) use ($userId) {
				return $query->where("user_id", $userId);
			})
			->when($title, function (Builder $query) use ($title) {
				return $query->where("title", "like", "%{$title}%");
			})
			->when($startedDate, function (Builder $query) use ($startedDate) {
				return $query->where("published_at", ">=", $startedDate);
			})
			->when($finishedDate, function (Builder $query) use ($finishedDate) {
				return $query->where("published_at", "<=", $finishedDate);
			})
			->when($categoryId, function (Builder $query) use ($categoryId) {
				return $query->where("category_id", $categoryId);
			})
			->when(isset($status), function (Builder $query) use ($status) {
				return $query->where("status", $status);
			})
			->when(isset($featured), function (Builder $query) use ($featured) {
				return $query->where("featured", $featured);
			})
			->orderByDesc("id")
			->paginate(15)
			->withQueryString()
		;

		$newsCount = $allNews->total();
		$categories = Category::select("id", "name")->where("type", "news")->get();
		$users = User::select("id", "name", "phone_number")->get();

		return view("Admin.news.index", compact("allNews", "categories", "users", "newsCount"));
	}

	public function show(News $news)
	{
		return view("Admin.news.show", compact("news"));
	}

	public function create()
	{
		$categories = Category::where("type", "news")->select("id", "name")->get();
		$tags = Tag::select("name")->get();
		return view("Admin.news.create", compact("categories", "tags"));
	}

	public function store(NewsStoreRequest $request)
	{
		$path = $request->file("image")->store("images", "public");
		$publishedAt = $request->published_date ?: Carbon::now()->format("YYYY-MM-DD HH:MM:SS");
		$news = News::create([
			"user_id" => auth()->user()->id,
			"category_id" => $request->category_id,
			"title" => $request->title,
			"subtitle" => $request->subtitle,
			"summary" => $request->summary,
			"body" => $request->body,
			"resource_url" => $request->resource_url,
			"slug" => $request->slug,
			"published_at" => $publishedAt,
			"views_count" => 0,
			"featured" => $request->featured,
			"status" => $request->status,
			"image" => $path
		]);
		$news->attachTags($request->tag);
		toastr()->success("خبر جدید با موفقیت ساخته شد.");
		return redirect()->route("admin.news.index");
	}

	public function edit(News $news)
	{
		$categories = Category::select("id", "name")->where("type", "news")->get();
		$tags = Tag::select("id", "name")->get();
		return view("Admin.news.edit", compact("categories", "tags", "news"));
	}

	public function update(NewsUpdateRequest $request, News $news)
	{
		$inputs = [
			"category_id" => $request->category_id,
			"title" => $request->title,
			"subtitle" => $request->subtitle,
			"resource_url" => $request->resource_url,
			"slug" => $request->slug,
			"summary" => $request->summary,
			"body" => $request->body,
			"published_at" => $request->published_date,
			"featured" => $request->featured,
			"status" => $request->status,
		];
		if ($request->hasFile("image")) {
			Storage::delete($news->image);
			$inputs["image"] = $request->file("image")->store("images", "public");
		}
		$news->update($inputs);
		$news->attachTags($request->tag, true);
		toastr()->success("خبر با موفقیت ویرایش شد.");
		return redirect()->back()->withInput();
	}

	public function destroy(News $news)
	{
		$news->tags()->detach();
		$news->delete();
		toastr()->success("خبر با موفقیت حذف شد.");
		return redirect()->back();
	}
}
