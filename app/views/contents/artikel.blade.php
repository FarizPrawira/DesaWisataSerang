<!DOCTYPE html>
<html>
<head>
	<title>Serang | Artikel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- STYLE -->
	<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,700italic,900,900italic' rel='stylesheet' type='text/css'> -->
	<link rel="stylesheet" href="{{URL::to('vendor/font-awesome/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('vendor/bootstrap/dist/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('assets/css/site.css')}}"/>
    <link rel="icon" type="image/png" href="{{URL::to('assets/img/favicon.png')}}">
</head>
<body>
	@include('home.header')
	<!-- CONTENT -->
	<div class="container main-container timeline">
		<div class="row">
			<?php 
			foreach ($results['content'] as $post): ?>
			<div class="col-md-2">
				<a href="{{URL::to('content/'.$post->id)}}" class="timeline-item shadow-bot text-center">
					<!-- <div class="timeline-item"> -->
					<h5>{{$post->title}}</h5>
					<?php foreach ($results['photo'] as $photo):
					if ($photo->content_id == $post->id){ ?>
					<img src="{{URL::to($photo->path)}}" class="related-image img-rounded">
					<?php break; }
					endforeach ?>
					<p class="smaller">{{truncDescription($post->description)}}</p>
					<!-- </div> -->
				</a>
			</div>
			<?php 
			endforeach ?>
			<div class="clearfix"></div>
		</div>
	</div>
    <div class="row loadmore">
        <button id="loadmore">
            <p class="text-center">Sebelumnya ↓</p>
        </button>
    </div>
	<!-- CONTENT END-->
    
	@include('home.footer')

	<?php 
	function truncDescription($description) {
		if (strlen($description) > 120) {
			$description = substr($description, 0, 100);
			$description.="...";
		}
		return $description;
	}
	?>
</body>
</html>