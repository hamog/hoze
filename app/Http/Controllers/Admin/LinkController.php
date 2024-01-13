<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LinkStoreRequest;
use App\Http\Requests\LinkUpdateRequest;
use App\Models\Link;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;

class LinkController extends Controller
{
	public function index()
	{
		$status = request("status") !== "all" ? request("status") : null;
		$title = request("title");
		$startedDate = request("started_date");
		$finishedDate = request("finished_date");

		$links = Link::select("id", "status", "title", 'subtitle', "image", "created_at", "link")
			->when($title, function (Builder $query) use ($title) {
				return $query->where("title", "like", "%{$title}%");
			})
			->when($startedDate, function (Builder $query) use ($startedDate) {
				return $query->where("created_at", ">=", $startedDate);
			})
			->when($finishedDate, function (Builder $query) use ($finishedDate) {
				return $query->where("created_at", "<=", $finishedDate);
			})
			->when(isset($status), function (Builder $query) use ($status) {
				return $query->where("status", $status);
			})
			->orderByDesc("id")
			->paginate(15)
			->withQueryString()
		;

		$linksCount = $links->total();
		return view("Admin.link.index", compact("links", "linksCount"));
	}

	public function store(LinkStoreRequest $request)
	{
		$path = $request->file("image")->store("images", "public");
		link::create([
			"image" => $path,
			"link" => $request->link,
			"title" => $request->title,
			"subtitle" => $request->subtitle,
			"status" => $request->status,
      "description" => $request->description,
		]);
		toastr()->success("پیوند جدید با موفقیت ساخته شد.");
		return redirect()->route("admin.link.index");
	}

	public function update(LinkUpdateRequest $request, Link $link)
	{
		$inputs = [
			"link" => $request->link,
			"title" => $request->title,
			"subtitle" => $request->subtitle,
			"status" => $request->status,
			"description" => $request->description,
		];
		if ($request->hasFile("image")) {
			Storage::delete($link->image);
			$inputs["image"] = $request->file("image")->store("images", "public");
		}

		$link->update($inputs);
		toastr()->success("پیوند با موفقیت ویرایش شد.");
		return redirect()->back()->withInput();
	}

	public function destroy(Link $link)
	{
		$link->delete();
		toastr()->success("پیوند با موفقیت حذف شد.");
		return redirect()->back();
	}
}
