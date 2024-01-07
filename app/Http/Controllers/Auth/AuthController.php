<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\LogoutRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
	public function showLoginForm()
	{
		return view("Admin.auth.login");
	}

	public function login(LoginRequest $request) :RedirectResponse
	{
		if (Auth::attempt($request->except("_token"))) {
			$request->session()->regenerate();
			return redirect()->intended('admin/dashboard');
		}
		return back()->withErrors([
			'name' => 'چنین نام کاربری در پایگاه داده ثبت نشده است.',
		])->onlyInput('name');
	}

	public function logout(LogoutRequest $request) :RedirectResponse
	{
		$request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route("admin.login.form");
	}
}
