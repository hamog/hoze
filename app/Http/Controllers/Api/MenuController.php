<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MenuGroup;
use App\Models\MenuItem;

class MenuController extends Controller
{
	public function menuGroups()
	{
		$menuGroups = MenuGroup::query()->select(['id', 'name'])->get();
		return response()->success('', compact('menuGroups'));
	}

	public function menuItems(String $group)
	{
		$menuGroup = MenuGroup::query()->select(['id', 'name'])->where('name', $group)->first();
		if (!$menuGroup) return response()->error("منو گروپ مورد نظر یافت نشد.");
		$menuItems = MenuItem::query()
			->select('id', 'title', 'linkable_type', 'linkable_id', 'link', 'order', 'new_tab')
			->where('menu_group_id', $menuGroup->id)
			->where('status', 1)
			->ordered()
			->get()
		;
		return response()->success('', compact('menuGroup', 'menuItems'));
	}
}
