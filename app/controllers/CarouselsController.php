<?php

class CarouselsController extends \BaseController {

	/**
	 * Display a listing of carousels
	 *
	 * @return Response
	 */
	public function index()
	{
		$carousels = Carousel::all();

		return View::make('carousels.index', compact('carousels'));
	}

	/**
	 * Show the form for creating a new carousel
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('carousels.create');
	}

	/**
	 * Store a newly created carousel in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Carousel::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Carousel::create($data);

		return Redirect::route('carousels.index');
	}

	/**
	 * Display the specified carousel.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$carousel = Carousel::findOrFail($id);

		return View::make('carousels.show', compact('carousel'));
	}

	/**
	 * Show the form for editing the specified carousel.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$carousel = Carousel::find($id);

		return View::make('carousels.edit', compact('carousel'));
	}

	/**
	 * Update the specified carousel in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$carousel = Carousel::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Carousel::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$carousel->update($data);

		return Redirect::route('carousels.index');
	}

	/**
	 * Remove the specified carousel from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Carousel::destroy($id);

		return Redirect::route('carousels.index');
	}

}
