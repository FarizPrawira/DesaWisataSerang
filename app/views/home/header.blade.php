<!-- HEADER -->
<div class="header">
	<div class="container-fluid navbar">
		<ul id="logo">
			<li><a href="{{URL::to('')}}"><img src="{{URL::to('assets/img/logo.png')}}"/></a></li>
		</ul>
		<ul class="menu-link">
			<li id="menuserang">Desa Serang <span class="caret"></span></li>
			<li id="menuwisata">Wisata <span class="caret"></span></li>
			<a href="{{URL::to('content/kegiatan')}}"><li id="menukegiatan">Kegiatan</li></a>
			<a href="{{URL::to('content/artikel')}}"><li id="menuartikel">Artikel</li></a>
		</ul>
		<ul class="menu-link logout">
			<?php if(Auth::check()){ ?>
			<a href="{{URL::to('user/logout')}}"><li id="logout"><i class="glyphicon glyphicon-off"></i> Log Out</li></a>
			<?php } ?>
		</ul>
	</div>
	<!-- Dropdown -->
	<div class="menu-list" id="listserang">
		<div class="col-md-8">
			<a href="{{URL::to('serang/pertanian/2010')}}" class="menu-item">
				<img src="{{URL::to('assets/img/pertanian.jpg')}}">
				<span>
					<h4>Pertanian</h4>
					<p>Kubis, Kentang, Tomat, Wortel</p>
				</span>
			</a>
			<a href="{{URL::to('serang/peternakan/2010')}}" class="menu-item">
				<img src="{{URL::to('assets/img/peternakan.jpg')}}">
				<span>
					<h4>Peternakan</h4>
					<p>Sapi, Kambing, Ayam, Kuda</p>
				</span>
			</a>
			<a href="{{URL::to('serang/pemerintahan')}}" class="menu-item">
				<img src="{{URL::to('assets/img/2.jpg')}}">
				<span>
					<h4>Pemerintahan</h4>
					<p>Kepala Desa/Dusun, Perangkat Desa</p>
				</span>
			</a>
			<a href="{{URL::to('serang/kkn-ugm2015')}}" class="menu-item">
				<img src="{{URL::to('assets/img/kkn.jpg')}}">
				<span>
					<h4>KKN-PPM</h4>
					<p>UGM & IU</p>
				</span>
			</a>
			<a href="{{URL::to('serang/produk')}}" class="menu-item">
				<img src="{{URL::to('assets/img/produk.jpg')}}">
				<span>
					<h4>Produk</h4>
					<p>Gethuk Strawberry, Keripiki Daun Strawberry, Sirup Strawberry</p>
				</span>
			</a>
		</div>
		<div class="col-md-4">
			<a href="{{URL::to('serang/galery')}}" class="menu-item">
				<img src="{{URL::to('assets/img/galery.jpg')}}">
				<span>
					<h4>Galery</h4>
					<p>Gambar & Video</p>
				</span>
			</a>
			<a href="{{URL::to('serang/map')}}" class="menu-item">
				<img src="{{URL::to('assets/img/2.jpg')}}">
				<span>
					<h4>Peta</h4>
					<p>Peta Wisata Desa Serang</p>
				</span>
			</a>
		</div>
	</div>
	<div class="menu-list" id="listwisata">
		<div class="col-md-8">
			<a href="{{URL::to('wisata/stroberi')}}" class="menu-item">
				<img src="{{URL::to('assets/img/kebunstrawberry.jpg')}}">
				<span>
					<h4>Kebun Strawberry</h4>
					<p>Petik Sendiri!</p>
				</span>
			</a>
			<a href="{{URL::to('wisata/restarea')}}" class="menu-item">
				<img src="{{URL::to('assets/img/restarea.jpg')}}">
				<span>
					<h4>Rest Area</h4>
					<p>Tempat santai beristirahat!</p>
				</span>
			</a>
			<a href="{{URL::to('wisata/outbound')}}" class="menu-item">
				<img src="{{URL::to('assets/img/outbound.jpg')}}">
				<span>
					<h4>Outbond</h4>
					<p>ATV, Giant Swing, Flying Fox</p>
				</span>
			</a>
			<a href="{{URL::to('wisata/pinus')}}" class="menu-item">
				<img src="{{URL::to('assets/img/pinus.jpg')}}">
				<span>
					<h4>Hutan Pinus</h4>
					<p>Tempat foto bersama!</p>
				</span>
			</a>
			<a href="{{URL::to('wisata/kuda')}}" class="menu-item">
				<img src="{{URL::to('assets/img/kuda.jpg')}}">
				<span>
					<h4>Kuda Tunggang</h4>
					<p>Berkeliling dengan kuda!</p>
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
				<img src="{{URL::to('assets/img/homestay.jpg')}}">
				<span>
					<h4>Home Stay</h4>
					<p>Rumah inap pengunjung</p> 
				</span>
			</a>
		</div>
	</div>
</div>
<!-- HEADER END -->