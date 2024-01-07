<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AnnouncementStoreRequest;
use App\Http\Requests\AnnouncementUpdateRequest;
use App\Models\Announcement;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

class AnnouncementController extends Controller
{
	public function index() 
	{
		$userId = request("user_id") !== "all" ? request("user_id") : null;
		$status = request("status") !== "all" ? request("status") : null;
		$title = request("title");
		$startedDate = request("started_date");
		$finishedDate = request("finished_date");

		$announcements = Announcement::select("id", "user_id", "title", "image", "slug", "published_at", "status")
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
			->when(isset($status), function (Builder $query) use ($status) {
				return $query->where("status", $status);
			})
			->orderByDesc("id")
			->paginate(15)
			->withQueryString()
		;
		
		$announcementsCount = $announcements->total();
		$users = User::select("id", "name", "phone_number")->get();

		return view("Admin.announcement.index", compact("announcements", "announcementsCount", "users"));
	}

	public function show(Announcement $announcement)
	{
		return view("admin.announcement.show", compact("announcement"));
	}

	public function create()
	{
		return view("Admin.announcement.create");
	}

	public function store(AnnouncementStoreRequest $request)
	{
		$path = $request->file("image")->store("images", "public");
		$publishedAt = $request->published_date ?: Carbon::now()->format("YYYY-MM-DD HH:MM:SS");
		Announcement::create([
			"user_id" => auth()->user()->id,
			"title" => $request->title,
			"summary" => $request->summary,
			"body" => $request->body,
			"slug" => $request->slug,
			"published_at" => $publishedAt,
			"views_count" => 0,
			"status" => $request->status,
			"image" => $path
		]);
		toastr()->success("اطلاعیه جدید با موفقیت ساخته شد.");
    return redirect()->route("admin.announcement.index");
	}

	public function edit(Announcement $announcement)
	{
		return view("Admin.announcement.edit", compact("announcement"));
	}

	public function update(AnnouncementUpdateRequest $request, Announcement $announcement) 
	{
		$inputs = [
			"title" => $request->title,
			"summary" => $request->summary,
			"body" => $request->body,
			"slug" => $request->slug,
			"published_at" => $request->published_date,
			"status" => $request->status,
		];
		if ($request->hasFile("image")) {
			$announcement->deleteImage();
			$inputs["image"] = $request->file("image")->store("images", "public");
		}
		$announcement->update($inputs);
		toastr()->success("اطلاعیه با موفقیت ویرایش شد.");
		return redirect()->back()->withInput();
	}

	public function destroy(Announcement $announcement)
	{
		$announcement->delete();
		toastr()->success("اطلاعیه با موفقیت حذف شد.");
		return redirect()->back();
	}
}