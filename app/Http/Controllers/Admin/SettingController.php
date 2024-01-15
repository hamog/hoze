<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingUpdateRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class SettingController extends Controller
{
	public function index()
	{
		return view("Admin.setting.index");
	}

  public function store(Request $request)
  {
    $request->validate([
      'group' => ['required', Rule::in(['general', 'social'])],
      'label' => ['required', 'string', 'max:191'],
      'name' => ['required', 'string', 'max:191', 'alpha_dash:ascii'],
      'type' => ['required', 'string', Rule::in(['text', 'textarea', 'image'])],
    ]);

    Setting::create([
      'group' => $request->group,
      'label' => $request->label,
      'name' => $request->name,
      'type' => $request->type,
      'value' => null,
    ]);

    toastr()->success('تنظیمات با موفقیت بروزرسانی شد.');
    return redirect()->back();
  }

	public function edit(String $group)
	{
		$settingTypes = Setting::query()->where("group", $group)->get()->groupBy("type");
    $groupName = $group;
    $group = Setting::GROUP[$group];

		return view("Admin.setting.edit", compact(["settingTypes", "group", 'groupName']));
	}

	public function update(SettingUpdateRequest $request)
	{
		$inputs = $request->except(['_token', '_method']);
		foreach ($inputs as $name => $value) {
			if ($setting = Setting::where('name', $name)->first()) {
				if ($setting->type == 'image' && $request->file($name)->isValid()) {
					if ($setting->value) {
						Storage::delete($setting->value);
					}
					$value = $request->file($name)->store("images", "public");
				}
				$setting->update(['value' => $value]);
			}
		}
		toastr()->success('تنظیمات با موفقیت بروزرسانی شد.');
		return redirect()->back();
	}

	public function destroyFile(Setting $setting)
	{
		if($setting->type !== 'image') {
			toastr()->warning('تایپ فایل انتخاب شده برابر با عکس نیست.');
		}else{
			Storage::disk('public')->delete($setting->value);
      $setting->value = null;
      $setting->save();

			toastr()->success('فایل با موفقیت حذف شد.');
		}
		return redirect()->back();
	}
}
