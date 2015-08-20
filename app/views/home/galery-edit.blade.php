<!DOCTYPE html>
<html>
<head>
	<title>Edit Galery</title>
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
		<div class="col-md-12">
			<div class="panel panel-default" id="Cgaleri">
				<div class="panel-heading">
					Galeri
				</div>
				<div class="panel-body">
					<!-- LIST GAMBAR -->
					<div class="row">
						<h3 class="text-center">Gambar</h3>
						<ul class="list-unstyled list-inline">
							<?php foreach ($galeries as $galery) { 
								if ($galery->type == "image") { ?>
								<li class="screenshot">
									<img src="{{URL::to($galery->path)}}">
									{{ Form::open(array('route' => array('deleteGalery', $galery->id), 'role'=>'form')) }}
									<button class="close" type="submit" class="delete" name="delete">X</button>
									{{ Form::close() }}
									<!-- <span class="close">x</span> -->
								</li>
								<?php	} 
							}?>
						</ul>
<!-- 						<button id="loadmore">
							<p class="text-center">Loadmore <span class="glyphicon glyphicon-refresh"></span></p>
						</button> -->
					</div>
					<!-- END OF LIST -->
					<!-- LIST VIDEO -->
					<div class="row galery">
						<h3 class="text-center">Video</h3>
						<ul class="list-unstyled list-inline">
							<?php foreach ($galeries as $galery) { 
								if ($galery->type == "video") { ?>
								<li class="screenshot">
									<div class="video" data-slide-number="16">
										<div class="embed-responsive embed-responsive-16by9" >
											<iframe src="{{URL::to($galery->path)}}" allowfullscreen main ></iframe>
										</div>
									</div>
									{{ Form::open(array('route' => array('deleteGalery', $galery->id), 'role'=>'form')) }}
									<button class="close" type="submit" class="delete" name="delete">X</button>
									{{ Form::close() }}
									<!-- <span class="close">x</span> -->
								</li>
								<?php	} 
							} ?>
						</ul>
<!-- 						<button id="loadmore">
							<p class="text-center">Loadmore <span class="glyphicon glyphicon-refresh"></span></p>
						</button> -->
					</div>
					<!-- END OF LIST -->
				</div>
			</div>
		</div> 
	</div>
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