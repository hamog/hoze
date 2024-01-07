<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;

class CategoryController extends Controller
{
    public function index()
	{
		$type = request('type');
		$categories = Category::query()
			->select(['id','name','type','slug'])
			->where('status', 1)
			->when($type, function(Builder $query) use ($type) {
				return $query->where('type', $type);
			})
			->get()
		;
		return response()->success('', compact('categories'));
	}
}
