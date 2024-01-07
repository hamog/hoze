<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingUpdateRequest;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
	public function index()
	{
		return view("Admin.setting.index");
	}

	public function edit(String $group)
	{
		$settingTypes = Setting::query()->where("group", $group)->get()->groupBy("type");
		$group = Setting::GROUP[$group];
		return view("Admin.setting.edit", compact(["settingTypes", "group"]));
	}

	public function update(SettingUpdateRequest $request)
	{
		$inputs = $request->except(['_token', '_method']);
		foreach ($inputs as $name => $value) {
			if ($setting = Setting::where('name', $name)->first()) {
				if ($setting->type == 'image' || $request->file($name)->isValid()) {
					if ($setting->value) {
						Storage::delete($setting->value);
					}
					$value = $request->file($name)->store("images", "public");
				}
				$setting->update(['value' => $value]);
			}
		}
		toastr()->success('تنظیات با موفقیت بروزرسانی شد.');
		return redirect()->back();
	}

	public function destroyFile(Setting $setting) 
	{
		if($setting->type !== 'image') {
			toastr()->warning('تایپ فایل انتخاب شده برابر با عکس نیست.');
		}else{
			Storage::delete($setting->value);
			toastr()->success('فایل با موفقیت حذف شد.');
		}
		return redirect()->back();
	}
}
