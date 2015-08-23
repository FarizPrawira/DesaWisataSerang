<!DOCTYPE html>
<html>
<head>
	<title>Edit {{$content->title;}}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- STYLE -->
	<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,700italic,900,900italic' rel='stylesheet' type='text/css'> -->
	<link rel="stylesheet" href="{{URL::to('vendor/bootstrap/dist/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('vendor/font-awesome/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('vendor/jquery-ui/jquery-ui.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('vendor/jquery-ui/jquery-ui.structure.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('vendor/jquery-ui/jquery-ui.theme.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('assets/css/dropzone.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('assets/css/site.css')}}"/>
    <link rel="icon" type="image/png" href="{{URL::to('assets/img/favicon.png')}}">
</head>
<body>
	@include('home.header')

	<!-- ERROR INPUT -->
	<?php if(isset($errors)) {foreach ($errors->all() as $key): ?>
	<div class="notification" id="notification">
		<div class="col-xs-offset-3 col-xs-6 alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			{{$key}}
		</div>
		<div class="clearfix"></div>
	</div>
	<?php 
	endforeach; }?>
	<!-- ERROR INPUT END-->

	<!-- SUCCESS INPUT -->
	<?php if(Session::has('sukses')) { ?>
	<div class="notification" id="notification">
		<div class="col-xs-offset-3 col-xs-6 alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			{{Session::get('sukses')}}
		</div>
		<div class="clearfix"></div>
	</div>
	<?php } ?>
	<!-- SUCCESS INPUT END-->

	<div class="container main-container">
		<?php if ($content->type == "artikel"){ ?>
		<div class="panel panel-green">
			<div class="panel-heading">
				Artikel {{$content->title}}
			</div>
			<div class="panel-body">
				<form class="form-horizontal" action="{{URL::to('content/update/'.$content->id)}}" method="post" enctype="multipart/form-data" file="true">
					<input type="hidden" name="type" value="artikel">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
						<div class="col-sm-10">
							<input type="text" name="title" class="form-control" id="inputJudul" placeholder="Tulis judul" value="{{$content->title}}">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Deskripsi</label>
						<div class="col-sm-10">
							<textarea placeholder="Deskripsi artikel" name="description" class="form-control" id="tempat-deskripsi"rows="10">{{$content->description}}</textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="inputPhoto" class="col-sm-2 control-label">Foto</label>
						<div class="col-sm-10">
							{{ Form::file('images[]', ['multiple' => true, 'class' => 'dropzone', 'id' => 'my-awesome-dropzone']) }}
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10"></div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-primary">Simpan</button>
							<button type="reset" class="btn btn-default">Bersihkan</button>
						</div>
					</div>
				</form>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<?php foreach ($results["photo"] as $photo): ?>
						<div class="col-md-2"style="height:140px;">
							{{ Form::open(array('route' => array('deletePhoto', $photo->id), 'role'=>'form')) }}
							<button type="submit" class="btn btn-danger" name="delete" style="position:relative; z-index:101;">Delete</button>
							{{ Form::close() }}
							<img src="{{URL::to($photo->path)}}" alt="" class="img-responsive" style="max-height:150px;">
						</div>
						<?php 
						endforeach ?>
					</div>
				</div>
			</div>
		</div>
		<?php }
		else{ ?>
		<div class="panel panel-green">
			<div class="panel-heading">
				Kegiatan {{$content->title}}
			</div>
			<div class="panel-body">
				<form class="form-horizontal" action="{{URL::to('content/update/'.$content->id)}}" method="post" enctype="multipart/form-data" file="true">
					<input type="hidden" name="type" value="kegiatan">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
						<div class="col-sm-10">
							<input type="text" name="title" class="form-control" id="inputJudul" placeholder="Tulis judul" value="{{$content->title}}">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Deskripsi</label>
						<div class="col-sm-10">
							<textarea placeholder="Deskripsi kegitan" name="description" class="form-control" id="tempat-deskripsi"rows="10">{{$content->description}}</textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Contact Person</label>
						<div class="col-sm-10">
							<input type="text" name="cp" class="form-control" id="inputJudul" placeholder="Tulis CP" value="{{$content->cp}}">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Lokasi</label>
						<div class="col-sm-10">
							<input type="text" name="lokasi" class="form-control" id="inputJudul" placeholder="Tulis lokasi kegiatan" value="{{$content->lokasi}}">
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Tag</label>
						<div class="col-sm-10">
							<select class="form-control" name="tag">
								<option <?php if ($content->tag == "lomba"){ echo "selected = select"; } ?> value="lomba">Lomba</option>
								<option <?php if ($content->tag == "acara"){ echo "selected = select"; } ?>value="acara">Acara</option>
								<option <?php if ($content->tag == "sosial"){ echo "selected = select"; } ?>value="sosial">Sosialisasi</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Tanggal mulai</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="KegDateStart" name="dateStart" placeholder="Pilih tanggal" value="{{$content->dateStart}}">
						</div>
						<label class="col-sm-2 control-label">Tanggal selesai</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="KegDateEnd" name="dateEnd" placeholder="Pilih tanggal" value="{{$content->dateEnd}}">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPhoto" class="col-sm-2 control-label">Foto</label>
						<div class="col-sm-10">
							{{ Form::file('images[]', ['multiple' => true, 'class' => 'dropzone', 'id' => 'my-awesome-dropzone']) }}
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-primary">Simpan</button>
							<button type="reset" class="btn btn-default">Bersihkan</button>
						</div>
					</div>
				</form>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<?php foreach ($results["photo"] as $photo): ?>
						<div class="col-md-2"style="height:140px;">
							{{ Form::open(array('route' => array('deletePhoto', $photo->id), 'role'=>'form')) }}
							<button type="submit" class="btn btn-danger" name="delete" style="position:relative; z-index:101;">Delete</button>
							{{ Form::close() }}
							<img src="{{URL::to($photo->path)}}" alt="" class="img-responsive">
						</div>
						<?php 
						endforeach ?>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
	@include('home.footer')
	<script>
	$(function() {
		$("#KegDateStart").datepicker({
			dateFormat: 'dd/M/yy',
			monthNamesShort: [ "Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agus", "Sep", "Okt", "Nov", "Des" ] 
		});
		$("#KegDateEnd").datepicker({
			dateFormat: 'dd/M/yy',
			monthNamesShort: [ "Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agus", "Sep", "Okt", "Nov", "Des" ] 
		});
	});
	</script>
</body>
</html>