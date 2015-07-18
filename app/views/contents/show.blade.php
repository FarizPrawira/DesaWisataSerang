<!DOCTYPE html>
<head>
	<title>Content</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- style -->
	<link rel="stylesheet" href="{{URL::to('vendor/lightbox/dist/css/lightbox.css')}}">
	<link rel="stylesheet" href="{{URL::to('vendor/font-awesome/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('vendor/bootstrap/dist/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('assets/css/site.css')}}"/>
</head>
<body>
	<!-- Header -->
	<nav class="header navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li id="menuserang" class="">Desa Serang</li>
					<li id="menuwisata" class="">Agrowisata</li>
					<li id="menukegiatan" class="">Kegiatan</li>
					<li id="menuartikel" class="">Artikel</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="menulist" id="listserang">
		<div class="menu-item">
			<img src="img/2.jpg">
			<span>
				<h4>Lorem ipsum dolor isit</h4>
				<p>Description about dolor isit ipsum lorem 1993 year beast of the past...</p>
			</span> 
		</div>
	</div>
	<div class="menulist" id="listwisata">
		<div class="menu-item">
			<img src="img/2.jpg">
			<span>
				<h4>Lorem ipsum dolor isit</h4>
				<p>Description about dolor isit ipsum lorem 1993 year beast of the past...</p>
			</span> 
		</div>
	</div>
	<div class="menulist" id="listkegiatan">
		<div class="menu-item">
			<img src="img/2.jpg">
			<span>
				<h4>Lorem ipsum dolor isit</h4>
				<p>Description about dolor isit ipsum lorem 1993 year beast of the past...</p>
			</span> 
		</div>
	</div>
	<div class="menulist" id="listartikel">
		<div class="menu-item">
			<img src="img/2.jpg">
			<span>
				<h4>Lorem ipsum dolor isit</h4>
				<p>Description about dolor isit ipsum lorem 1993 year beast of the past...</p>
			</span> 
		</div>
	</div>

	<div class="content-header">
		<?php
		foreach ($content->photos as $photo) { ?>
		<img src="{{URL::to($photo->path)}}">
		<?php break; } ?>
		<div class="content-title">
			<h3>{{$content->title}}</h3> 
		</div>
	</div>
	<div class="image-list">
		<?php
		foreach ($content->photos as $photo) { ?>
		<a class="list" data-lightbox="image-list" href="{{URL::to($photo->path)}}">
			<img src="{{URL::to($photo->path)}}" class="img-responsive">
		</a>
		<?php } ?>
	</div>

	<div class="col-md-3" id="share-buttons">
		<!-- Facebook -->
		<legend><h3>Berbagi</h3></legend>
		<a href="http://www.facebook.com/sharer.php?u=URL" target="_blank">
			<i class="fa fa-facebook fa-3x"></i>
		</a>
		<!-- Twitter -->
		<a href="https://twitter.com/share?url=URL&amp;name=Desa Serang&amp;hashtags=desaserang" target="_blank">
			<i class="fa fa-twitter fa-3x"></i>
		</a>
		<!-- Google+ -->
		<a href="https://plus.google.com/share?url=URL" target="_blank">
			<i class="fa fa-google-plus fa-3x"></i>
		</a>
		<!-- Email -->
		<a href="mailto:?Subject=Desa Serang [Title]&amp;Body=Message URL">
			<i class="fa fa-envelope-o fa-3x"></i>
		</a>
	</div>
	<div class="col-md-6 content-description">
		<?php
		$tanggal = strtotime($content->created_at);
		$tanggal = date('d F Y G:i', $tanggal);
		echo $tanggal."<br>";
		?>
		{{nl2br($content->description)}}
	</div>
	<div class="clearfix"></div>
	<div class="col-md-12">
		<legend><h3>Artikel Terkait</h3></legend>
		<div class="related-post">
			<img src="img/2.jpg" class="img-responsive related-image">
			<span class="text-content">
				<h3>Title</h3>
				<h4>Lorem ipsu2m dolor sit amet, consectetur adipiscing elit.</h4>
			</span> 
		</div>
		<div class="related-post">
			<img src="img/2.jpg" class="img-responsive related-image">
			<span class="text-content">
				<h3>Title</h3>
				<h4>Lorem ipsu2m dolor sit amet, consectetur adipiscing elit.</h4>
			</span> 
		</div>
		<div class="related-post">
			<img src="img/2.jpg" class="img-responsive related-image">
			<span class="text-content">
				<h3>Title</h3>
				<h4>Lorem ipsu2m dolor sit amet, consectetur adipiscing elit.</h4>
			</span> 
		</div>
	</div>
	<div class="clearfix"></div>

	<!-- Footer -->
	<div class="footer">
		<div class="row">
			<div class="col-md-4 about-serang">
				<h3> Tentang Situs ini</h3>
				<div class="garis"></div>
				<ul class="list-unstyled">
					<li>
						<a href="">Peta</a>
					</li>
					<li>
						<a href="">Peta</a>
					</li>
					<li>
						<a href="">Peta</a>
					</li>
					<li>
						<a href="">Peta</a>
					</li>
				</ul>
			</div>

			<div class="col-md-4 situslain-serang">
				<h3>Situs Lain</h3>
				<div class="garis"></div>
				<ul class="list-unstyled">
					<li>
						<a href="">
							Desa Wisata
						</a>
					</li>
				</ul>
			</div>

			<div class="col-md-4 sosmed-serang">
				<h3>Temukan Kami di</h3>
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
		</div>
	</div>

	<!-- script -->
	<script src="{{URL::to('vendor/lightbox/dist/js/lightbox-plus-jquery.min.js')}}"></script>
	<script src="{{URL::to('vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<script src="{{URL::to('vendor/jquery/dist/jquery.min.js')}}"></script>
	<script src="{{URL::to('assets/js/site.js')}}"></script>
</body>
</html>