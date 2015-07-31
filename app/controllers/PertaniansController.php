<?php

class PertaniansController extends \BaseController {

	/**
	 * Display a listing of pertanians
	 *
	 * @return Response
	 */
	public function index()
	{
		$pertanians = Pertanian::all();

		return View::make('serang.pertanian', compact('pertanians'));
	}

	/**
	 * Show the form for creating a new pertanian
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pertanians.create');
	}

	/**
	 * Store a newly created pertanian in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();
		$validator = Validator::make($data, Pertanian::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		// var_dump($data);die;
		Pertanian::create($data);

		return Redirect::to('dashboard');
	}

	/**
	 * Display the specified pertanian.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$pertanian = Pertanian::findOrFail($id);

		return View::make('pertanians.show', compact('pertanian'));
	}

	/**
	 * Show the form for editing the specified pertanian.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pertanian = Pertanian::find($id);

		return View::make('pertanians.edit', compact('pertanian'));
	}

	/**
	 * Update the specified pertanian in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$pertanian = Pertanian::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Pertanian::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$pertanian->update($data);

		return Redirect::route('pertanians.index');
	}

	/**
	 * Remove the specified pertanian from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Pertanian::destroy($id);

		return Redirect::route('pertanians.index');
	}

}
