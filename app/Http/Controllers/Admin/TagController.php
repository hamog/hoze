<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagStoreRequest;
use App\Http\Requests\TagUpdateRequest;
use App\Models\Tag;

class TagController extends Controller
{
  public function index()
  {
    $tags = Tag::orderByDesc("id")->paginate(15)->withQueryString();
    return view("Admin.tag.index", compact("tags"));
  }

  public function store(TagStoreRequest $request)
  {
    Tag::create($request->all());
    toastr()->success("برچسب جدید با موفقیت ساخنه شد.");
    return redirect()->route("admin.tag.index");
  }

  public function update(TagUpdateRequest $request, Tag $tag)
  {
    $tag->update($request->all());
    toastr()->success("برچسب با موفقیت ویرایش شد.");
    return redirect()->route("admin.tag.index");
  }

  public function destroy(Tag $tag)
  {
    if ($tag->delete()) {
      if ($tag->news()->exists()) {
        $tag->news()->delete();
      }
    }
    toastr()->success("برچسب با موفقیت حذف شد.");
    return redirect()->back();
  }
}
