<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showHome()
	{
		$results["content"] = DB::table('contents')
							->select('*')
							->orderBy('created_at', 'DESC')
							->get();
		$results["photo"] = DB::table('photos')
							->select('*')
							->orderBy('created_at', 'DESC')
							->get();					
		return View::make('home.home')->with('results', $results);
		// if(!Auth::check())
		// else{
		// 	if (Auth::user()->level == 'admin'){
		// 		// return View::make('home.dashboard');
		// 		return Redirect::to('dashboard');
		// 	}
		// }
	}
}