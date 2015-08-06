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

		return View::make('serang.peternakan', compact('peternakans'));
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
		$data = Input::all();

		$validator = Validator::make($data, Peternakan::$rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		// var_dump($data);die;
		Peternakan::create($data);
		return Redirect::to('dashboard');
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
		$results["tahun"] = DB::table('peternakans')->select('tahun')->orderBy('tahun', 'ASC')->get();
		return View::make('serang.peternakan', compact('peternakan'))->with('results', $results);;
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
