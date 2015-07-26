<?php

class TicsController extends \BaseController {

	/**
	 * Display a listing of tics
	 *
	 * @return Response
	 */
	public function index()
	{
		$tics = Tic::all();

		return View::make('tics.index', compact('tics'));
	}

	/**
	 * Show the form for creating a new tic
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tics.create');
	}

	/**
	 * Store a newly created tic in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Tic::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Tic::create($data);

		return Redirect::route('tics.index');
	}

	/**
	 * Display the specified tic.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tic = Tic::findOrFail($id);

		return View::make('tics.show', compact('tic'));
	}

	/**
	 * Show the form for editing the specified tic.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tic = Tic::find($id);

		return View::make('tics.edit', compact('tic'));
	}

	/**
	 * Update the specified tic in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$tic = Tic::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Tic::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$tic->update($data);

		return Redirect::route('tics.index');
	}

	/**
	 * Remove the specified tic from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Tic::destroy($id);

		return Redirect::route('tics.index');
	}

}
