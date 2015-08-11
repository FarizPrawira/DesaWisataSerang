<?php

class SerangsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /serang
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /serang/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /serang
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /serang/{id}
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
	 * GET /serang/{id}/edit
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
	 * PUT /serang/{id}
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
	 * DELETE /serang/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function showMap()
	{
		return View::make('serang.map');
	}

	public function showKknUgm2014()
	{
		return View::make('serang.kknugm2014');
	}

	public function showKknUgm2015()
	{
		return View::make('serang.kknugm2015');
	}

	public function showKknIu2014()
	{
		return View::make('serang.kkniu2014');
	}

	public function showKknIu2015()
	{
		return View::make('serang.kkniu2015');
	}

	public function showPemerintahan()
	{
		return View::make('serang.pemerintahan');
	}

	public function showGalery()
	{
		return View::make('serang.galery');
	}

	public function showSosok()
	{
		return View::make('serang.sosok');
	}

	public function showProduk()
	{
		return View::make('serang.produk');
	}

}