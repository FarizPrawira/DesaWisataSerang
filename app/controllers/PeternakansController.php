<?php

class PeternakansController extends \BaseController {

	/**
	 * Display a listing of peternakans
	 *
	 * @return Response
	 */
	public function index()
	{
		$peternakans = Peternakan::all();

		return View::make('peternakans.index', compact('peternakans'));
	}

	/**
	 * Show the form for creating a new peternakan
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('peternakans.create');
	}

	/**
	 * Store a newly created peternakan in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Peternakan::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Peternakan::create($data);

		return Redirect::route('peternakans.index');
	}

	/**
	 * Display the specified peternakan.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$peternakan = Peternakan::findOrFail($id);

		return View::make('peternakans.show', compact('peternakan'));
	}

	/**
	 * Show the form for editing the specified peternakan.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$peternakan = Peternakan::find($id);

		return View::make('peternakans.edit', compact('peternakan'));
	}

	/**
	 * Update the specified peternakan in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$peternakan = Peternakan::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Peternakan::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$peternakan->update($data);

		return Redirect::route('peternakans.index');
	}

	/**
	 * Remove the specified peternakan from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Peternakan::destroy($id);

		return Redirect::route('peternakans.index');
	}

}
