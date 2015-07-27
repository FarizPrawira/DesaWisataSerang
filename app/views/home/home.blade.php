<!DOCTYPE html>
<head>
	<title>Home Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- style -->
	<link rel="stylesheet" href="{{URL::to('vendor/bootstrap/dist/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('vendor/font-awesome/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('assets/css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('assets/css/owl.theme.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('assets/css/site.css')}}"/>

</head>
<body>
	<nav class="header navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li id="menuserang" class="">Desa Serang <span class="glyphicon glyphicon-triangle-bottom"></span></li>
					<li id="menuwisata" class="">Agrowisata <span class="glyphicon glyphicon-triangle-bottom"></span></li>
					<li id="menukegiatan" class=""><a href="{{URL::to('content/kegiatan')}}">Kegiatan</a></li>
					<li id="menuartikel" class=""><a href="{{URL::to('content/artikel')}}">Artikel</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="menulist" id="listserang">
		<div class="col-md-8">
			<a href="{{URL::to('serang/pertanian')}}" class="menu-item">
				<img src="{{URL::to('assets/img/2.jpg')}}">
				<span>
					<h4>Pertanian</h4>
					<p>Strawberry, tomat...</p>
				</span>
			</a>
			<a href="{{URL::to('serang/peternakan')}}" class="menu-item">
				<img src="{{URL::to('assets/img/2.jpg')}}">
				<span>
					<h4>Peternakan</h4>
					<p>Sapi, kambing...</p>
				</span>
			</a>
			<a href="{{URL::to('serang/pemerintahan')}}" class="menu-item">
				<img src="{{URL::to('assets/img/2.jpg')}}">
				<span>
					<h4>Pemerintahan</h4>
					<p>Struktur, monografi...</p>
				</span>
			</a>
			<a href="{{URL::to('serang/kkn')}}" class="menu-item">
				<img src="{{URL::to('assets/img/2.jpg')}}">
				<span>
					<h4>KKN-UGM-IU</h4>
					<p>Kuliah Kerja Nyata Universitas Gadjah Mada & Ibaraky University</p>
				</span>
			</a>
			<a href="{{URL::to('serang/produk')}}" class="menu-item">
				<img src="{{URL::to('assets/img/2.jpg')}}">
				<span>
					<h4>Produk</h4>
				</span>
			</a>
		</div>
		<div class="col-md-4">
			<a href="{{URL::to('serang/galery')}}" class="menu-item galery">
				<img src="{{URL::to('assets/img/2.jpg')}}" id="img1">
				<img src="{{URL::to('assets/img/3.jpg')}}" id="img2">
				<img src="{{URL::to('assets/img/4.jpg')}}" id="img3">
				<span>
					<h4>Galery</h4>
				</span>
			</a>
			<a href="{{URL::to('serang/map')}}" class="menu-item">
				<img src="{{URL::to('assets/img/2.jpg')}}">
				<span>
					<h4>Peta</h4>
				</span>
			</a>
		</div>
	</div>
	<div class="menulist" id="listwisata">
		<div class="col-md-8">
			<a href="{{URL::to('wisata/stroberi')}}" class="menu-item">
				<img src="{{URL::to('assets/img/2.jpg')}}">
				<span>
					<h4>Kebun Strowberi</h4>
				</span>
			</a>
			<a href="{{URL::to('wisata/restarea')}}" class="menu-item">
				<img src="{{URL::to('assets/img/2.jpg')}}">
				<span>
					<h4>Rest Area</h4>
				</span>
			</a>
			<a href="{{URL::to('wisata/outbound')}}" class="menu-item">
				<img src="{{URL::to('assets/img/2.jpg')}}">
				<span>
					<h4>Outbond</h4>
				</span>
			</a>
			<a href="{{URL::to('wisata/pinus')}}" class="menu-item">
				<img src="{{URL::to('assets/img/2.jpg')}}">
				<span>
					<h4>Hutan Pinus</h4>
				</span>
			</a>
			<a href="{{URL::to('wisata/kuda')}}" class="menu-item">
				<img src="{{URL::to('assets/img/2.jpg')}}">
				<span>
					<h4>Kuda Tunggang</h4>
				</span>
			</a>
		</div>
		<div class="col-md-4">
			<a href="{{URL::to('wisata/tic')}}" class="menu-item">
				<img src="{{URL::to('assets/img/2.jpg')}}">
				<span>
					<h4>TIC</h4>
					<p>Tourist Information Center</p>
				</span>
			</a>
			<a href="{{URL::to('wisata/homestay')}}" class="menu-item">
				<img src="{{URL::to('assets/img/2.jpg')}}">
				<span>
					<h4>Home Stay</h4>
				</span>
			</a>
		</div>
	</div>
<!-- 
	<a href="{{URL::to('content/kegiatan')}}" class="menulist" id="listkegiatan"></a>
	<a href="{{URL::to('content/artikel')}}" class="menulist" id="listartikel"></a> -->

	<!-- CONTENT -->
	<!-- Carousel -->
	<div class="content">
		<div id="owl-example" class="owl-carousel">
			<div class="content-item">
				<img src="{{URL::to('assets/img/1.jpg')}}">
				<h1>Petik strowberi sendiri</h1>
			</div>
			<div class="content-item">
				<img src="{{URL::to('assets/img/2.jpg')}}">
				<h1>Home stay</v>
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
					<div class="col-md-6">
						<h2>Kegiatan</h2>
						<?php foreach ($results["content"] as $content) {
							// var_dump($content->description);die;
							if ($content->type == "kegiatan") { ?>
							<a href="{{URL::to('content/'.$content->id)}}" class="timeline-item">
								<h4>{{$content->title}}</h4>
								<?php foreach ($results["photo"] as $photo) {
									if ($photo->content_id == $content->id) {
										echo "<img src=".URL::to($photo->path).">";
										break; 
									} 
								} ?>
								<p>{{truncDescription($content->description)}}</p>
							</a>
							<?php }
						}
						?>
					</div>
					<div class="col-md-6">
						<h2>Artikel</h2>
						<?php foreach ($results["content"] as $content) {
							// var_dump($content->description);die;
							if ($content->type == "artikel") { ?>
							<a href="{{URL::to('content/'.$content->id)}}" class="timeline-item">
								<h4>{{$content->title}}</h4>
								<?php foreach ($results["photo"] as $photo) {
									if ($photo->content_id == $content->id) {
										echo "<img src=".URL::to($photo->path).">";
										break; 
									} 
								} ?>
								<p>{{truncDescription($content->description)}}</p>
							</a>
							<?php }
						} ?>
					</div>
				</div>
				<div class="row">
					<div id="loadmore">
						<p class="text-center">Loadmore <span class="glyphicon glyphicon-refresh"></span></p>
					</div>
				</div>
			</div>
		</div>

		<!-- FOOTER -->
		<div class="footer">
			<div class="row">
				<div class="col-md-3">
					<h4>Tentang Situs ini</h4>
					<div class="garis"></div>
					<ul class="list-unstyled">
						<li><a href="">Peta situs</a></li>
						<li><a href="">Peta Desa Serang</a></li>
						<li><a href="">Peta Wisata</a></li>
						<li class="divider"></li>
						<li><a href="">Hubungi kami</a></li>
					</ul>
				</div>

				<div class="col-md-3">
					<h4>Situs Lain</h4>
					<div class="garis"></div>
					<ul class="list-unstyled">
						<li>
							<a href="">
								Desa Wisata
							</a>
						</li>
					</ul>
				</div>

				<div class="col-md-3">
					<h4>Temukan Kami di</h4>
					<div class="garis"></div>
					<ul class="list-unstyled list-inline">
						<li>
							<a href="https://www.facebook.com/">
								<span>
									<i class="fa fa-facebook fa-3x"></i>
									Facebook
								</span>
							</a>
						</li>
						<li>
							<a href="https://twitter.com/">
								<span>
									<i class="fa fa-twitter fa-3x"></i>
									Twitter
								</span>
							</a>
						</li>
						<li>
							<a href="https://instagram.com/">
								<span>
									<i class="fa fa-instagram fa-3x"></i>
									Instagram
								</span>
							</a>
						</li>
						<li>
							<a href="https://googleplus.com/">
								<span>
									<i class="fa fa-google-plus fa-3x"></i>
									Google+
								</span>
							</a>
						</li>
						<li>
							<a href="https://youtube.com/">
								<span>
									<i class="fa fa-youtube fa-3x"></i>
									Youtube
								</span>
							</a>
						</li>
					</ul>
				</div>

				<div class="col-md-3">
					<h4>Galery</h4>
					<div class="garis"></div>
					<?php
					// function fetchData($url){
					// 	$ch = curl_init();
					// 	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
					// 	curl_setopt($ch, CURLOPT_URL, $url);
					// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					// 	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
					// 	$result = curl_exec($ch);
					// 	curl_close($ch);
					// 	return $result;
					// }
					// $result = fetchData("https://api.instagram.com/v1/users/1779862945/media/recent/?access_token=1779862945.ab103e5.efc62c04fcda46d6a4fe23395ff09dce&count=9");
					// $result = json_decode($result,true);
					// echo "<div class='instapic-box'>";
					// foreach ($result["data"] as $post) {
					// 	echo "<div class='col-md-4 col-xs-4 '>";
					// 	echo "<a href=".$post['link']."><img src=".$post['images']['thumbnail']['url']." alt='' class='img-responsive  instapic'></a>";
					// 	echo "</div>";
					// }
					// echo "</div>";
					?>
				</div>
			</div>
			<div class="text-center">© KKN UGM 2015</div>
		</div>
	</div>

	<?php 
	function truncDescription($description) {
		if (strlen($description) > 110) {
			$description = substr($description, 0, 80);
			$description.="...";
		}
		return $description;
	}
	?>

	<!-- script -->
	<script src="{{URL::to('vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<script src="{{URL::to('vendor/jquery/dist/jquery.min.js')}}"></script>
	<script src="{{URL::to('assets/js/owl.carousel.js')}}"></script>
	<script src="{{URL::to('assets/js/site.js')}}"></script>
	<script>
	$(document).ready(function() {
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
	})
	</script>
</body>
</html>