<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Setting;

class SettingController extends Controller
{
	public function index()
	{
		$settings = Setting::query()
			->select(['group', 'label', 'name', 'type', 'value'])
			->where('value', '!=', null)
			->orderBy('id', "DESC")
			->get()
		;
		return response()->success('', compact('settings'));
	}
}
