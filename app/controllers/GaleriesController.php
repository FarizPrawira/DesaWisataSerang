<?php

class GaleriesController extends \BaseController {

	/**
	 * Display a listing of galeries
	 *
	 * @return Response
	 */
	public function index()
	{
		$galeries = Galery::all();

		return View::make('galeries.index', compact('galeries'));
	}

	/**
	 * Show the form for creating a new galery
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('galeries.create');
	}

	/**
	 * Store a newly created galery in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (Input::get('type') == "video") {
			$data = [
			'path' => str_replace("watch?v=","embed/",Input::get('path')),
			'type' => Input::get('type')
			];

			$validator = Validator::make($data, Galery::$rules);
			if ($validator->fails())
			{
				return Redirect::back()->withErrors($validator)->withInput();
			}
			Galery::create($data);
		}
		else{
			$files = Input::File('images');
			foreach($files as $file) {
				if(!is_null($file)){	
					$rules = array(
						'file' => 'mimes:png,gif,jpeg'
						);
					$validator = Validator::make(array('file'=> $file), $rules);
					if($validator->passes()){
						$destinationPath = 'galeries/';
						$filename = $file->getClientOriginalName();
						$filename = str_replace(' ', '', $filename);
						$mime_type = $file->getMimeType();
						$extension = $file->getClientOriginalExtension();
						$upload_success = $file->move($destinationPath, $filename);

						$data = [
						'type' => Input::get('type'),
						'path' => 'galeries/'.$filename
						];
						Galery::create($data);
					}
				}
			}
		}

		return Redirect::to('dashboard');
	}

	/**
	 * Display the specified galery.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$galery = Galery::findOrFail($id);

		return View::make('galeries.show', compact('galery'));
	}

	/**
	 * Show the form for editing the specified galery.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$galery = Galery::find($id);

		return View::make('galeries.edit', compact('galery'));
	}

	/**
	 * Update the specified galery in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$galery = Galery::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Galery::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$galery->update($data);

		return Redirect::route('galeries.index');
	}

	/**
	 * Remove the specified galery from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Galery::destroy($id);

		return Redirect::route('galeries.index');
	}

}
