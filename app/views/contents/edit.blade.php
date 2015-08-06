<html>
<head>
	<title>Edit {{$content->title;}}</title>
	<link rel="stylesheet" href="{{URL::to('vendor/bootstrap/dist/css/bootstrap.min.css')}}"/>
</head>
<body>
	<legend>Edit Konten Artikel dan Kegiatan</legend> 	
	<form action="{{URL::to('content/update/'.$content->id)}}" method="post" enctype="multipart/form-data" file="true">
		<input type="hidden" name="type" value="{{$content->type}}">
		<table>
			<tr>
				<td>Judul</td>
				<td><input type="text" name="title" value="{{$content->title}}"></td>
			</tr>
			<tr>
				<td>Isi</td>
				<td><textarea name="description">{{$content->description}}</textarea></td>
			</tr>
		</table>
		{{ Form::file('images[]', ['multiple' => true, 'class' => 'dropzone', 'id' => 'my-awesome-dropzone']) }}
		<br>	
		<button type="submit">Save</button>
	</form>

	<?php foreach ($results["photo"] as $photo): ?>
		{{ Form::open(array('route' => array('deletePhoto', $photo->id), 'role'=>'form')) }}
		<button type="submit" class="delete" name="delete"style="position:absolute; z-index:101;">Delete</button>
		{{ Form::close() }}
		<div class="col-md-2">
			<img src="{{URL::to($photo->path)}}" alt="" class="img-responsive" style="max-height:150px;">
		</div>
	<?php endforeach ?>
	<div class="clearfix"></div>


		{{ Form::open(array('route' => array('deleteContent', $content->id), 'role'=>'form')) }}
		<button type="submit" class="delete" name="delete">Delete Content</button>
		{{ Form::close() }}
</body>
</html>