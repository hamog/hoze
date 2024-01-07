<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordUpdateRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
	public function edit(String $userId)
	{
		$user = User::findOrFail($userId);
		if ($user->id !== auth()->user()->id) return abort(403);
		return view("Admin.profile.edit", compact("user"));
	}

	public function update(ProfileUpdateRequest $request, User $user)
	{
		$user->update([
			"name" => $request->input("name"),
			"phone_number" => $request->input("phone_number"),
			"email" => $request->input("email"),
		]);
		toastr()->success("پروفایل شما با موفقیت ویرایش شد.");
		return redirect()->back();
	}

	public function changePassword(PasswordUpdateRequest $request, $userId)
	{
		$user = User::findOrFail($userId);
		if (Hash::check($request->input("old_password"), $user->password)) {
			$user->password = Hash::make($request->input("new_password"));
			$user->save();
			toastr()->success('کلمه عبور با موفقیت ویرایش شد.');
		} else {
			toastr()->error('کلمه عبور قبلی شما به درستی وارد نشده است.');
		}
		return redirect()->back();
	}
}
