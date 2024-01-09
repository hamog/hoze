<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Database\Eloquent\Builder;

class CategoryController extends Controller
{
	public function index()
	{
		$name = request("name") !== "all" ?  request("name") : null;
		$type = request("type") !== "all" ?  request("type") : null;
		$status = request("status") !== "all" ? request("status") : null;

		$categories = Category::select("id", "name", "slug", "type", "status", "created_at")
			->when($name, function (Builder $query) use ($name) {
				return $query->where("name", $name);
			})
			->when($type, function (Builder $query) use ($type) {
				return $query->where("type", $type);
			})
			->when(isset($status), function (Builder $query) use ($status) {
				return $query->where("status", $status);
			})
			->orderByDesc("id")
			->paginate(15)
			->withQueryString()
		;

		$categoriesCount = $categories->total();
		return view("Admin.category.index", compact("categories", "categoriesCount"));
	}

	public function store(CategoryStoreRequest $request)
	{
		Category::create($request->all());
		toastr()->success("دسته بندی جدید با موفقیت ساخته شد.");
		return redirect()->back();
	}

	public function update(CategoryUpdateRequest $request, Category $category)
	{
		$category->update($request->all());
		toastr()->success("دسته بندی با موفقیت ویرایش شد.");
		return redirect()->back();
	}

	public function destroy(Category $category)
	{
		if ($category->news()->exists()) {
			toastr()->error("از این دسته بندی خبری ثبت شده است و نمی توان آن را حذف کرد.");
			return redirect()->back();
		}

		$category->delete();
		toastr()->success("دسته بندی با موفقیت حذف شد.");

		return redirect()->back();
	}
}
