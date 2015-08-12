<!DOCTYPE html>
<html>
<head>
	<title>Serang |	Galery</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- STYLE -->
	<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,700italic,900,900italic' rel='stylesheet' type='text/css'> -->
	<link rel="stylesheet" href="{{URL::to('vendor/lightbox/dist/css/lightbox.css')}}">
	<link rel="stylesheet" href="{{URL::to('vendor/font-awesome/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('vendor/bootstrap/dist/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('assets/css/site.css')}}"/>
</head>
<body>
	@include('home.header')
	<!-- CONTENT -->
	<div class="container-fluid main-container">
		<div class="row">
			<div class="col-sm-12 galery">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#"><i class="glyphicon glyphicon-picture"></i> Gambar</a></li>
					<li role="presentation"><a href="{{URL::to('serang/galery-video')}}"><i class="glyphicon glyphicon-facetime-video"></i> Video</a></li>
				</ul>
			</div>
			<div class="col-sm-12 galery">
				<ul class="list-inline">
					<?php foreach ($results['image'] as $image): ?>
					<li>
						<a class="thumbnail" data-lightbox="image-list" href="{{URL::to($image->path)}}"><img src="{{URL::to($image->path)}}"></a>
					</li>	
					<?php 
					endforeach ?>
				</ul>
			</div>
		</div>
	</div>
	<!-- CONTENT END -->
	@include('home.footer')
</body>
</html>