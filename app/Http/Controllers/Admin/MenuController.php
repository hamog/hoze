<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuStoreRequest;
use App\Http\Requests\MenuUpdateRequest;
use App\Models\MenuGroup;
use App\Models\MenuItem;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class MenuController extends Controller
{
  public function groups(): Renderable
  {
    $menuGroups = MenuGroup::all();
    return view('Admin.menu.groups', compact('menuGroups'));
  }

  public function sortMenus(Request $request)
  {
    MenuItem::setNewOrder($request->menus);
		toastr()->success('الویت منو ها با موفقیت بروزرسانی شد.');
    return redirect()->back();
  }

  public function index()
  {
    $menuGroup = MenuGroup::query()->findOrFail(request('menuGroupId'));
    $menuItems = $menuGroup->items()->ordered()->get();
    $models = MenuItem::MODELS;
    $categories = MenuItem::getAllCategories();
    return view('admin.menu.index', compact(['menuItems', 'menuGroup', 'models', 'categories']));
  }

  public function store(MenuStoreRequest $request)
  {
    $linkableType = $request->input('linkable_type');
    $linkableId = $request->input('linkable_id');
    $link = $request->input('link');
    if ($linkableType == 'self_link') {
      if ($linkableId !== null && $linkableId !== 'none') {
        toastr()->error('فیلد های لینک و آیتم دسته بندی نمی توانند هردو مقدار بگیرند.');
        return redirect()->back();
      }
    }else if ($linkableType !== 'self_link' && $linkableType !== 'none') {
      if ($link !== null) {
        toastr()->error('فیلد های لینک و آیتم دسته بندی نمی توانند هردو مقدار بگیرند.');
        return redirect()->back();
      }
    }
    $maxOrder = MenuItem::query()->where('menu_group_id', request('menu_group_id'))->max('order');
    $inputs = [
      'title' => $request->input('title'),
      'menu_group_id' => request('menu_group_id'),
      'new_tab' => $request->input('new_tab'),
      'status' => $request->input('status'),
      'order' => $maxOrder + 1
    ];
    if ($request->input('linkable_type') == 'self_link') {
      $inputs['link'] = $request->input('link');
    }else {
      $inputs['linkable_type'] = $request->input('linkable_type');
      $inputs['linkable_id'] = $request->input('linkable_id');
    }
    MenuItem::create($inputs);
		toastr()->success('منو جدید با موفقیت ساخته شد.');
    return redirect()->back();
  }

  public function update(MenuUpdateRequest $request, MenuItem $menuItem)
  {
    $linkableType = $request->input('linkable_type');
    $linkableId = $request->input('linkable_id');
    $link = $request->input('link');
    if ($linkableType == 'self_link') {
      if ($linkableId !== null && $linkableId !== 'none') {
        toastr()->error('فیلد های لینک و آیتم دسته بندی نمی توانند هردو مقدار بگیرند.');
        return redirect()->back();
      }
    }else {
      if ($link !== null) {
        toastr()->error('فیلد های لینک و آیتم دسته بندی نمی توانند هردو مقدار بگیرند.');
        return redirect()->back();
      }
    }
    $inputs = [
      'title' => $request->input('title'),
      'new_tab' => $request->input('new_tab'),
      'status' => $request->input('status'),
    ];
    if ($request->input('linkable_type') == 'self_link') {
      $inputs['link'] = $request->input('link');
    }else {
      $inputs['linkable_type'] = $request->input('linkable_type');
      $inputs['linkable_id'] = $request->input('linkable_id');
    }
    $menuItem->update($inputs);
    toastr()->success('منو مورد نظر با موفقیت ویرایش شد.');
    return redirect()->back();
  }

  public function destroy(MenuItem $menuItem) 
  {
    $menuItem->delete();
    toastr()->success('منو مورد نظر با موفقیت حذف شد.');
    return redirect()->back();
  }
}