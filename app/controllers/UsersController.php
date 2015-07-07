<?php

class UsersController extends BaseController {

	public function showDashboard()
	{
		return View::make('home.dashboard');
	}

	public function submitLogin()
	{
		// $remember = (Input::get('remember')) ? true : false;
		$userdata = array(
			'username' => Input::get('username'),
			'password' => Input::get('password')
			);
		if(Auth::attempt($userdata, true))
		{
			if(Auth::user()->level == "admin")
			//redirect
				// return View::make('home.dashboard');
				return Redirect::to('dashboard');
		}
		else
			//redirect
			return Redirect::back()->with('error','Username atau password salah');
	}
	public function sendLogout()
	{
		Auth::logout();
		return Redirect::to('/');
	}

}
