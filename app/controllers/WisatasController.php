<?php

class WisatasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /wisata
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /wisata/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /wisata
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /wisata/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /wisata/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /wisata/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /wisata/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function showStroberi()
	{
		return View::make('wisata.stroberi');
	}

	public function showRestarea()
	{
		return View::make('wisata.restarea');
	}

	public function showOutbound()
	{
		return View::make('wisata.outbound');
	}

	public function showPinus()
	{
		return View::make('wisata.pinus');
	}

	public function showKuda()
	{
		return View::make('wisata.kuda');
	}

	public function showHomestay()
	{
		return View::make('wisata.homestay');
	}

}