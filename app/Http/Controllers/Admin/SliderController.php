<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderStoreRequest;
use App\Http\Requests\SliderUpdateRequest;
use App\Models\Slider;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
	public function index()
	{
		$status = request("status") !== "all" ? request("status") : null;
		$title = request("title");
		$startedDate = request("started_date");
		$finishedDate = request("finished_date");

		$sliders = Slider::select("id", "status", "title", "image", "created_at", "link")
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

		$slidersCount = $sliders->total();
		return view("Admin.slider.index", compact("sliders", "slidersCount"));
	}

	public function show(Slider $slider)
	{
		return view("admin.slider.show", compact("slider"));
	}

	public function create()
	{
		return view("Admin.slider.create");
	}

	public function store(SliderStoreRequest $request)
	{
		$path = $request->file("image")->store("images", "public");
		Slider::create([
			"image" => $path,
			"link" => $request->link,
			"title" => $request->title,
			"summary" => $request->summary,
			"status" => $request->status,
		]);
		toastr()->success("اسلایدر جدید با موفقیت ساخته شد.");
		return redirect()->route("admin.slider.index");
	}

	public function edit(Slider $slider)
	{
		return view("Admin.slider.edit", compact("slider"));
	}

	public function update(SliderUpdateRequest $request, Slider $slider)
	{
		$inputs = [
			"link" => $request->link,
			"title" => $request->title,
			"summary" => $request->summary,
			"status" => $request->status,
		];
		if ($request->hasFile("image")) {
			Storage::delete($slider->image);
			$inputs["image"] = $request->file("image")->store("images", "public");
		}
		$slider->update($inputs);
		toastr()->success("اسلایدر با موفقیت ویرایش شد.");
		return redirect()->back()->withInput();
	}

	public function destroy(Slider $slider)
	{
		$slider->delete();
		toastr()->success("اسلایدر با موفقیت حذف شد.");
		return redirect()-back();
	}
}