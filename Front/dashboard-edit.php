<!DOCTYPE html>
<head>
	<title>Dashboard Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- style -->
	<link rel="stylesheet" href="css/bootstrap.min.css"	type='text/css'>
	<link rel="stylesheet" href="css/owl.carousel.css" type='text/css'>
	<link rel="stylesheet" href="css/owl.theme.css" type='text/css'>
	<link rel="stylesheet" href="css/default.css" type='text/css'>
	<link rel="stylesheet" href="css/dashboard.css" type='text/css'>
	<link rel="stylesheet" href="css/listgambar.css" type='text/css'>
	<link rel="stylesheet" href="components/font-awesome-4.3.0/css/font-awesome.min.css" type='text/css'>
	<!-- script -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/default.js"></script>
</head>
<body>
	<!-- CONTENT -->
	<div class="container main-container">
		<div class="col-md-2">
		</div>
		<div class="col-md-10">
			<div class="panel panel-default" id="Cgaleri">
				<div class="panel-heading">
					Galeri
				</div>
				<div class="panel-body">
					<!-- LIST GAMBAR -->
					<div class="row">
						<h3>Gambar</h3>
						<ul class="list-unstyled list-inline">
							<li class="screenshot">
								<img src="img/2.jpg">
								<span class="close">x</span>
							</li>
							<li class="screenshot">
								<img src="img/2.jpg">
								<span class="close">x</span>
							</li>
							<li class="screenshot">
								<img src="img/2.jpg">
								<span class="close">x</span>
							</li>
							<li class="screenshot">
								<img src="img/2.jpg">
								<span class="close">x</span>
							</li>
							<li class="screenshot">
								<img src="img/2.jpg">
								<span class="close">x</span>
							</li>
							<li class="screenshot">
								<img src="img/2.jpg">
								<span class="close">x</span>
							</li>
							<li class="screenshot">
								<img src="img/2.jpg">
								<span class="close">x</span>
							</li>
							<li class="screenshot">
								<img src="img/2.jpg">
								<span class="close">x</span>
							</li>
							<li class="screenshot">
								<img src="img/2.jpg">
								<span class="close">x</span>
							</li>
							<li class="screenshot">
								<img src="img/2.jpg">
								<span class="close">x</span>
							</li>
							<li class="screenshot">
								<img src="img/2.jpg">
								<span class="close">x</span>
							</li>
						</ul>
						<button id="loadmore">
							<p class="text-center">Loadmore <span class="glyphicon glyphicon-refresh"></span></p>
						</button>
					</div>
					<!-- END OF LIST -->

					<!-- LIST GAMBAR -->
					<div class="row">
						<h3>Video</h3>
						<ul class="list-unstyled list-inline">
							<li class="screenshot">
								<a href="https://www.youtube.com/watch?v=g4XN-7IN3OY"><img src="http://img.youtube.com/vi/UCNBzOIIZks/0.jpg"></a>
								<span class="close">x</span>
							</li>
							<li class="screenshot">
								<a href="https://www.youtube.com/watch?v=g4XN-7IN3OY"><img src="http://img.youtube.com/vi/UCNBzOIIZks/0.jpg"></a>
								<span class="close">x</span>
							</li>
							<li class="screenshot">
								<a href="https://www.youtube.com/watch?v=g4XN-7IN3OY"><img src="http://img.youtube.com/vi/UCNBzOIIZks/0.jpg"></a>
								<span class="close">x</span>
							</li>
							<li class="screenshot">
								<a href="https://www.youtube.com/watch?v=g4XN-7IN3OY"><img src="http://img.youtube.com/vi/UCNBzOIIZks/0.jpg"></a>
								<span class="close">x</span>
							</li>
							<li class="screenshot">
								<a href="https://www.youtube.com/watch?v=g4XN-7IN3OY"><img src="http://img.youtube.com/vi/UCNBzOIIZks/0.jpg"></a>
								<span class="close">x</span>
							</li>
							<li class="screenshot">
								<a href="https://www.youtube.com/watch?v=g4XN-7IN3OY"><img src="http://img.youtube.com/vi/UCNBzOIIZks/0.jpg"></a>
								<span class="close">x</span>
							</li>
						</ul>
						<button id="loadmore">
							<p class="text-center">Loadmore <span class="glyphicon glyphicon-refresh"></span></p>
						</button>
					</div>
					<!-- END OF LIST -->


					</div>
				</div>
			</div> 
		</div>
	</div>
	<script type="">
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