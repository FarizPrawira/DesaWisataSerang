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
	<link rel="icon" type="image/png" href="{{URL::to('assets/img/favicon.png')}}"/>
</head>
<body>
	@include('home.header')
    <!-- Carousel -->
	<div id="owl-example" class="owl-carousel">
		<div class="content-item">
			<img src="{{URL::to('assets/img/1.jpg')}}">
			<h1>Strawberry setiap hari!</h1>
		</div>
		<div class="content-item">
			<img src="{{URL::to('assets/img/2.jpg')}}">
			<h1>Petik Strawberry langsung di ladangnya</h1>
		</div>
		<div class="content-item">
			<img src="{{URL::to('assets/img/3.jpg')}}">
			<h1>Pemandangan alam yang indah</h1>
		</div>
		<div class="content-item">
			<img src="{{URL::to('assets/img/4.jpg')}}">
			<h1>Masyarakat yang baik, ramah, dan menyenangkan!</h1>
		</div>
		<div class="content-item">
			<img src="{{URL::to('assets/img/5.jpg')}}">
			<h1>Outbond! Tantang diri Anda!</h1>
		</div>
	</div>
	<!-- CONTENT -->
	<div class="content">		
		<!-- Timeline -->
		<div class="container timeline">
			<div class="row">
				<div class="col-md-5 col-md-offset-1 text-center">
					<h2 class="text-center p-10">Kegiatan <i class="glyphicon glyphicon-pushpin c-red"></i></h2><br/>
					<?php foreach ($results["kegiatan"] as $kegiatan) {
						if ($kegiatan->type == "kegiatan") { ?>
						<a href="{{URL::to('content/'.$kegiatan->id)}}" class="timeline-item shadow-bot text-center">
							<h3>{{$kegiatan->title}}</h3>
							<p class="c-gray">{{$kegiatan->updated_at}}</p>
							<p class="c-red">{{$kegiatan->dateStart}} — {{$kegiatan->dateEnd}}</p>
							<p>{{truncDescription($kegiatan->description)}}</p>
						</a>
						<?php }
					}
					?>
					<div class="loadmore-kegiatan"></div>
					<button id="loadKegiatan">
						<p>Kegiatan Sebelumnya ↓</p>
					</button>
				</div>
				<div class="col-md-5 text-center">
					<h2 class="text-center p-10">Artikel <i class="glyphicon glyphicon-pushpin c-red"></i></h2><br/>
					<?php foreach ($results["artikel"] as $artikel) {
						if ($artikel->type == "artikel") { ?>
						<a href="{{URL::to('content/'.$artikel->id)}}" class="timeline-item shadow-bot text-center">
							<h3>{{$artikel->title}}</h3>
							<p class="c-gray">{{$artikel->updated_at}}</p>
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
					<button id="loadArtikel">
						<p>Artikel Sebelumnya ↓</p>
					</button>
				</div>
			</div>
		</div>
	</div>
	<!-- CONTENT END -->

	@include('home.footer')

	<?php 
	function truncDescription($description) {
		if (strlen($description) > 190) {
			$description = substr($description, 0, 180);
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
	var kegiatan = 5;
	var artikel = 3;
	var description = "";
	var photoAr = "";
	// AJAX load kegiatan
	$('#loadKegiatan').click(function(event){
		$.ajax({
			url: '{{URL::to("loadKegiatan")}}',
			method: 'GET',
			dataType: 'json'
		})
		.done(function(response){
			for(var loop = 0; loop < 5; loop++) {
				var i = 0;
				if (response.kegiatan.length <= kegiatan) {
					$('#loadKegiatan').html('');
				};
				if (response.kegiatan[kegiatan] !== undefined) {
					while (response.kegiatan[kegiatan].id != response.photo[i].content_id) {
						i++;
					}
					photoKeg = response.photo[i].path;
					description = response.kegiatan[kegiatan].description;
					if (description.length > 190) {
						description = description.substr(0, 280);
						description = description.concat("...");
					};
					$('.loadmore-kegiatan').append('\
						<a href="content/'+response.kegiatan[kegiatan].id+'" class="timeline-item shadow-bot text-center">\
						<h3>'+response.kegiatan[kegiatan].title+'</h3>\
						<p class="c-gray">'+response.kegiatan[kegiatan].updated_at+'</p>\
						<p>'+response.kegiatan[kegiatan].dateStart+' — '+response.kegiatan[kegiatan].dateEnd+'</p>\
						<p>'+description+'</p>\
						</a>\
						');
				};
				kegiatan++;
			}
		}) .fail(function(){
			alert("error");
		});
	});
	// AJAX load artikel
	$('#loadArtikel').click(function(event){
		$.ajax({
			url: '{{URL::to("loadArtikel")}}',
			method: 'GET',
			dataType: 'json'
		})
		.done(function(response){
			for(var loop = 0; loop < 3; loop++) {
				var i = 0;
				if (response.artikel.length <= artikel) {
					$('#loadArtikel').html('');
				};
				if (response.artikel[artikel] !== undefined) {
					while (response.artikel[artikel].id != response.photo[i].content_id) {
						i++;
					}
					photoAr = response.photo[i].path;
					description = response.artikel[artikel].description;
					if (description.length > 190) {
						description = description.substr(0, 280);
						description = description.concat("...");
					};
					$('.loadmore-artikel').append('\
						<a href="content/'+response.artikel[artikel].id+'" class="timeline-item shadow-bot text-center">\
						<h3>'+response.artikel[artikel].title+'</h3>\
						<p class="c-gray">'+response.artikel[artikel].updated_at+'</p>\
						<img src='+photoAr+' class="img-rounded">\
						<p>'+description+'</p>\
						</a>\
						');
				};
				artikel++;
			}
		}) .fail(function(){
			alert("error");
		});
	});
	// <?php if(Session::has('script')) echo Session::get('script');?>
	</script>
</body>
</html>