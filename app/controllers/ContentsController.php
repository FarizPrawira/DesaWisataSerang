<?php

class ContentsController extends \BaseController {

	/**
	 * Display a listing of contents
	 *
	 * @return Response
	 */
	public function index()
	{
		$contents = Content::all();

		return View::make('contents.index', compact('contents'));
	}

	/**
	 * Show the form for creating a new content
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('contents.create');
	}

	/**
	 * Store a newly created content in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = [
		'title' => Input::get('title'),
		'description' => Input::get('description'),	
		'type' => Input::get('type')
		];
		$validator = Validator::make($data, Content::$rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$content = Content::create($data);
		$content_id = $content->id;

		$files = Input::File('images');
		// $files = Input::get('images');
		// echo Input::file('images');
		// var_dump(($files));
		// die;
		foreach($files as $file) {
			if(!is_null($file)){	
				$rules = array(
					'file' => 'mimes:png,gif,jpeg|max:10000'
					);
				$validator = Validator::make(array('file'=> $file), $rules);
				if($validator->passes()){
					$destinationPath = 'uploads/';
					$filename = $file->getClientOriginalName();
					$filename = str_replace(' ', '', $filename);
					$mime_type = $file->getMimeType();
					$extension = $file->getClientOriginalExtension();
					$upload_success = $file->move($destinationPath, $filename);

					$data = [
					'content_id' => $content_id,
					'path' => 'uploads/'.$filename
					];

					Photo::create($data);
				} else {
					return Redirect::back()->with('error', 'Only accept images');
				}
			}
		}

		return Redirect::to('dashboard');
	}

	/**
	 * Display the specified content.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$content = Content::findOrFail($id);

		return View::make('contents.show', compact('content'));
	}

	/**
	 * Show the form for editing the specified content.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$content = Content::find($id);

		return View::make('contents.edit', compact('content'));
	}

	/**
	 * Update the specified content in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$content = Content::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Content::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$content->update($data);

		return Redirect::route('contents.index');
	}

	/**
	 * Remove the specified content from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Content::destroy($id);

		return Redirect::route('contents.index');
	}

	public function showPariwisata()
	{
		$results["content"] = DB::table('contents')
							->where('type', 'pariwisata')
							->orderBy('created_at', 'DESC')
							->paginate(4);
		$results["photo"] = DB::table('photos')->get();
		return View::make('contents.pariwisata')->with('results', $results);
	}

	public function showPertanian()
	{
		$results["content"] = DB::table('contents')
							->where('type', 'pertanian')
							->orderBy('created_at', 'DESC')
							->paginate(4);
		$results["photo"] = DB::table('photos')->get();
		return View::make('contents.pertanian')->with('results', $results);
	}

	public function showProduk()
	{
		$results["content"] = DB::table('contents')
								->where('type', 'produk')
								->orderBy('created_at', 'DESC')
								->paginate(4);
		$results["photo"] = DB::table('photos')->get();
		return View::make('contents.produk')->with('results', $results);
	}

	public function showBudaya()
	{
		$results["content"] = DB::table('contents')
								->where('type', 'budaya')
								->orderBy('created_at', 'DESC')
								->paginate(4);
		$results["photo"] = DB::table('photos')->get();
		return View::make('contents.budaya')->with('results', $results);
	}

	public function showUnik()
	{
		$results["content"] = DB::table('contents')
								->where('type', 'unik')
								->orderBy('created_at', 'DESC')
								->paginate(4);
		$results["photo"] = DB::table('photos')->get();
		return View::make('contents.unik')->with('results', $results);
	}

}
