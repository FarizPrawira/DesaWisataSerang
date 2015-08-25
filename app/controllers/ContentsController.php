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
		'cp' => Input::get('cp'),
		'lokasi' => Input::get('lokasi'),	
		'tag' => Input::get('tag'),
		'dateEnd' => Input::get('dateEnd'),	
		'dateStart' => Input::get('dateStart'),
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
		foreach($files as $file) {
			if(!is_null($file)){	
				$rules = array(
					'file' => 'mimes:png,gif,jpeg'
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
				}
			}
		}

		return Redirect::to('dashboard')->with('sukses', "Berhasil Menyimpan Konten");
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
		$results["related-post"] = DB::table('contents')
		->where('type',$content['type'])
		->whereNotIn('id', [$id])
		->orderBy('created_at', 'DESC')
		->limit(4)
		->get();
		$results["related-photo"] = DB::table('photos')->get();
		return View::make('contents.show', compact('content'))->with('results', $results);
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
		$results["photo"] = DB::table('photos')->where('content_id',$id)->get();
		return View::make('contents.edit', compact('content'))->with('results', $results);
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
		$data = Input::all();
		$validator = Validator::make($data, Content::$rules);
		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		$content->update($data);

		$files = Input::File('images');
		foreach($files as $file) {
			if(!is_null($file)){	
				$rules = array(
					'file' => 'mimes:png,gif,jpeg,jpg'
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
					'content_id' => $id,
					'path' => 'uploads/'.$filename
					];

					Photo::create($data);
				}
			}
		}

		return Redirect::back()->with('sukses', "Berhasil Mengedit Konten");
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
		$photos = DB::table('photos')->get();
		foreach ($photos as $photo) {
			if ($photo->content_id == $id) {
				Photo::destroy($photo->id);
			}
		}
		return Redirect::to('dashboard');
	}

	public function destroyPhoto($id)
	{
		Photo::destroy($id);
		return Redirect::back();
	}

	public function showArtikel()
	{
		$results["content"] = DB::table('contents')
		->where('type', 'artikel')
		->orderBy('created_at', 'DESC')
		->limit(8)
		->get();
		$results["photo"] = DB::table('photos')->get();
		return View::make('contents.artikel')->with('results', $results);
	}

	public function showKegiatan()
	{
		$results["content"] = DB::table('contents')
		->where('type', 'kegiatan')
		->orderBy('created_at', 'DESC')
		->get();
		$results["tag"] = DB::table('contents')
		->select('tag')
		->where('type', 'kegiatan')
		->distinct('tag')
		->get();
		$results["photo"] = DB::table('photos')->get();
		return View::make('contents.kegiatan')->with('results', $results);
	}
}