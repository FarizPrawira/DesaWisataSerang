<!DOCTYPE html>
<html>
<head>
	<title>Desa Wisata Serang</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- STYLE -->
	<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,700italic,900,900italic' rel='stylesheet' type='text/css'> -->
	<link rel="stylesheet" href="{{URL::to('vendor/bootstrap/dist/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('vendor/font-awesome/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('assets/css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('assets/css/owl.theme.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('assets/css/site.css')}}"/>
    <link rel="icon" type="image/png" href="{{URL::to('assets/img/favicon.png')}}">
</head>
<body>
	@include('home.header')

	<!-- CONTENT -->
	<div class="content">
		<!-- Carousel -->
		<div id="owl-example" class="owl-carousel">
			<div class="content-item">
				<img src="{{URL::to('assets/img/1.jpg')}}">
				<h1>Petik strowberi sendiri</h1>
			</div>
			<div class="content-item">
				<img src="{{URL::to('assets/img/2.jpg')}}">
				<h1>Home stay</h1>
			</div>
			<div class="content-item">
				<img src="{{URL::to('assets/img/3.jpg')}}">
				<h1>Pemandangan alam yang indah</h1>
			</div>
			<div class="content-item">
				<img src="{{URL::to('assets/img/4.jpg')}}">
				<h1>Warga yang ramah-ramah</h1>
			</div>
			<div class="content-item">
				<img src="{{URL::to('assets/img/5.jpg')}}">
				<h1>Tempat foto-foto bersama</h1>
			</div>
		</div>
		<!-- Timeline -->
		<div class="container timeline">
			<div class="row">
				<div class="col-md-5 col-md-offset-1">
					<h2>Kegiatan</h2>
					<?php foreach ($results["kegiatan"] as $kegiatan) {
							// var_dump($content->description);die;
						if ($kegiatan->type == "kegiatan") { ?>
						<a href="{{URL::to('content/'.$kegiatan->id)}}" class="timeline-item shadow-bot text-center">
							<h3>{{$kegiatan->title}}</h3>
							<?php foreach ($results["photo"] as $photo) {
								if ($photo->content_id == $kegiatan->id) {
									echo "<img class='img-rounded' src=".URL::to($photo->path).">";
									break; 
								} 
							} ?>
							<p>{{truncDescription($kegiatan->description)}}</p>
						</a>
						<?php }
					}
					?>
					<div class="loadmore-kegiatan"></div>
				</div>
				<div class="col-md-5">
					<h2>Artikel</h2>
					<?php foreach ($results["artikel"] as $artikel) {
							// var_dump($kegiatan->description);die;
						if ($artikel->type == "artikel") { ?>
						<a href="{{URL::to('content/'.$artikel->id)}}" class="timeline-item shadow-bot text-center">
							<h3>{{$artikel->title}}</h3>
							<?php foreach ($results["photo"] as $photo) {
								if ($photo->content_id == $artikel->id) {
									echo "<img class='img-rounded' src=".URL::to($photo->path).">";
									break; 
								} 
							} ?>
							<p>{{truncDescription($artikel->description)}}</p>
						</a>
						<?php }
					} ?>
					<div class="loadmore-artikel"></div>
				</div>
			</div>
			<div class="row loadmore">
				<button id="loadmore">
					<p class="text-center">Sebelumnya <span class="glyphicon glyphicon-arrow-down"></span></p>
				</button>
			</div>
		</div>
	</div>
	<!-- CONTENT END -->

	@include('home.footer')

	<?php 
	function truncDescription($description) {
		if (strlen($description) > 250) {
			$description = substr($description, 0, 230);
			$description.="...";
		}
		return $description;
	}
	?>

	<script>
	$(document).ready(function(){
		$("#owl-example").owlCarousel();
	});
	$("#owl-example").owlCarousel({
		// Most important owl features
		items : 1,
		itemsCustom : false,
		itemsDesktop : [1199,4],
		itemsDesktopSmall : [980,3],
		itemsTablet: [768,2],
		itemsTabletSmall: false,
		itemsMobile : [479,1],
		singleItem : false,
		itemsScaleUp : false,
		//Basic Speeds
		slideSpeed : 200,
		paginationSpeed : 800,
		rewindSpeed : 1000,
		//Autoplay
		autoPlay : true,
		stopOnHover : true,
		// Navigation
		navigation : false,
		navigationText : ["prev","next"],
		rewindNav : true,
		scrollPerPage : false,
		//Pagination
		pagination : true,
		paginationNumbers: false,
		// Responsive
		responsive: true,
		responsiveRefreshRate : 200,
		responsiveBaseWidth: window,
	});
	</script>
	<script>
	var kegiatan = 4;
	var artikel = 4;
	var description = "";
	var photoKeg = "";
	var photoAr = "";
	var i = 0;
	$('#loadmore').click(function(event){
		$.ajax({
			url: '{{URL::to("loadmore")}}',
			method: 'GET',
			dataType: 'json'
		})
		.done(function(response){
			if (response.kegiatan[kegiatan] === undefined && response.artikel[artikel] === undefined) {
				$('.loadmore').html('');
				$('.loadmore').append("")
			};
			if (response.kegiatan[kegiatan] !== undefined) {
				while (response.kegiatan[kegiatan].id != response.photo[i].content_id) {
					i++;
				}
				photoKeg = response.photo[i].path;
				description = response.kegiatan[kegiatan].description;
				if (description.length > 250) {
					description = description.substr(0, 230);
					description = description.concat("...");
				};
				$('.loadmore-kegiatan').append('\
					<a href="content/'+response.kegiatan[kegiatan].id+'" class="timeline-item load-kegiatan shadow-bot text-center">\
					<h3>'+response.kegiatan[kegiatan++].title+'</h3>\
					<img src='+photoKeg+' class="img-rounded">\
					<p>'+description+'</p>\
					</a>\
					');
			};
			i = 0;
			if (response.artikel[artikel] !== undefined) {
				while (response.artikel[artikel].id != response.photo[i].content_id) {
					i++;
				}
				photoAr = response.photo[i].path;
				description = response.artikel[artikel].description;
				if (description.length > 250) {
					description = description.substr(0, 230);
					description = description.concat("...");
				};
				$('.loadmore-artikel').append('\
					<a href="content/'+response.artikel[artikel].id+'" class="timeline-item load-artikel shadow-bot text-center">\
					<h3>'+response.artikel[artikel++].title+'</h3>\
					<img src='+photoAr+' class="img-rounded">\
					<p>'+description+'</p>\
					</a>\
					');
			};
		})
		.fail(function(){
			alert("error");
		});
	});
	// <?php if(Session::has('script')) echo Session::get('script');?>
	</script>
</body>
</html>