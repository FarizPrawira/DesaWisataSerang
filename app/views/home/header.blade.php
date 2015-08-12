<!-- HEADER -->
<div class="header">
	<div class="container-fluid navbar">
		<ul id="logo">
			<li><a href="{{URL::to('')}}"><img src="{{URL::to('assets/img/logo.png')}}"/></a></li>
		</ul>
		<ul class="menu-link">
			<li id="menuserang">Desa Serang <span class="caret"></span></li>
			<li id="menuwisata">Agrowisata <span class="caret"></span></li>
			<a href="{{URL::to('content/kegiatan')}}"><li id="menukegiatan">Kegiatan</li></a>
			<a href="{{URL::to('content/artikel')}}"><li id="menuartikel">Artikel</li></a>
		</ul>
		<ul class="menu-link logout">
			<?php if(Auth::check()){ ?>
			<a href="{{URL::to('user/logout')}}"><li id="logout">Log Out</li></a>
			<?php } ?>
		</ul>
	</div>
	<!-- Dropdown -->
	<div class="menu-list" id="listserang">
		<div class="col-md-8">
			<a href="{{URL::to('serang/pertanian/2010')}}" class="menu-item">
				<img src="{{URL::to('assets/img/2.jpg')}}">
				<span>
					<h4>Pertanian</h4>
				</span>
			</a>
			<a href="{{URL::to('serang/peternakan/2010')}}" class="menu-item">
				<img src="{{URL::to('assets/img/2.jpg')}}">
				<span>
					<h4>Peternakan</h4>
				</span>
			</a>
			<a href="{{URL::to('serang/pemerintahan')}}" class="menu-item">
				<img src="{{URL::to('assets/img/2.jpg')}}">
				<span>
					<h4>Pemerintahan</h4>
				</span>
			</a>
			<a href="{{URL::to('serang/kkn-ugm2015')}}" class="menu-item">
				<img src="{{URL::to('assets/img/2.jpg')}}">
				<span>
					<h4>KKN-UGM-IU</h4>
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
	<div class="menu-list" id="listwisata">
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
					<h4>Tourist Information Center</h4>
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
</div>
<!-- HEADER END -->