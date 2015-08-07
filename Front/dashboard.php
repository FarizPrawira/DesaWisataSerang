<!DOCTYPE html>
<head>
	<title>Desa Serang</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- style -->
	<link rel="stylesheet" href="css/bootstrap.min.css"	type='text/css'>
	<link rel="stylesheet" href="css/owl.carousel.css" type='text/css'>
	<link rel="stylesheet" href="css/owl.theme.css" type='text/css'>
	<link rel="stylesheet" href="css/default.css" type='text/css'>
	<link rel="stylesheet" href="css/dashboard.css" type='text/css'>
	<link rel="stylesheet" href="components/font-awesome-4.3.0/css/font-awesome.min.css" type='text/css'>
	<!-- script -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/default.js"></script>
</head>
<body>

	<!-- HEADER -->
	<div class="header">
		<div class="container-fluid navbar">
			<ul id="logo">
				<li><img src="img/Logo4.png"/></li>
			</ul>
			<ul class="menu-link">
				<li id="menuserang">Desa Serang <span class="caret"></span></li>
				<li id="menuwisata">Agrowisata <span class="caret"></span></li>
				<li id="menukegiatan">Kegiatan</li>
				<li id="menuartikel">Artikel</li>
			</ul>
		</div>
		<!-- MENUDROPDOWN -->
		<div class="menu-list" id="listserang">
			<div class="col-md-8">
				<a class="menu-item" href="">
					<img src="img/2.jpg">
					<span>
						<h4>Pertanian</h4>
					</span>
				</a>
				<a class="menu-item" href="">
					<img src="img/2.jpg">
					<span>
						<h4>Peternakan</h4>
					</span>
				</a>
				<a class="menu-item" href="">
					<img src="img/2.jpg">
					<span>
						<h4>Pemerintahan</h4>
					</span>
				</a>
				<a class="menu-item" href="">
					<img src="img/2.jpg">
					<span>
						<h4>KKN-UGM-IU</h4>
					</span>
				</a>
				<a class="menu-item" href="">
					<img src="img/2.jpg">
					<span>
						<h4>Produk</h4>
					</span>
				</a>
			</div>
			<div class="col-md-4">
				<a class="menu-item" href="">
					<img src="img/2.jpg" id="img1">
					<span>
						<h4>Galery</h4>
					</span>
				</a>
				<a class="menu-item" href="">
					<img src="img/2.jpg">
					<span>
						<h4>Peta</h4>
					</span>
				</a>
			</div>
		</div>
		<div class="menu-list" id="listwisata">
			<div class="col-md-8">
				<a class="menu-item" href="">
					<img src="img/2.jpg">
					<span>
						<h4>Kebun Strowberi</h4>
					</span>
				</a>
				<a class="menu-item" href="">
					<img src="img/2.jpg">
					<span>
						<h4>Rest Area</h4>
					</span>
				</a>
				<a class="menu-item" href="">
					<img src="img/2.jpg">
					<span>
						<h4>Outbond</h4>
					</span>
				</a>
				<a class="menu-item" href="">
					<img src="img/2.jpg">
					<span>
						<h4>Hutan Pinus</h4>
					</span>
				</a>
				<a class="menu-item" href="">
					<img src="img/2.jpg">
					<span>
						<h4>Kuda Tunggang</h4>
					</span>
				</a>
			</div>
			<div class="col-md-4">
				<a class="menu-item" href="">
					<img src="img/2.jpg">
					<span>
						<h4>Paket Wisata</h4>
					</span>
				</a>
				<a class="menu-item" href="">
					<img src="img/2.jpg">
					<span>
						<h4>Home Stay</h4>
					</span>
				</a>
			</div>
		</div>
		<div class="menu-list" id="listkegiatan"></div>
		<div class="menu-list" id="listartikel"></div>
	</div>

	<!-- CONTENT -->
	<div class="container main-container">
		<div class="col-md-2 sidebar-serang">
			<ul class="list-unstyled">
				<li id="Bdaftar" class="active">Daftar konten <span>(0)</span></li>
				<li id="Bartikel">Artikel </li>
				<li id="Bkegiatan">Kegiatan </li>
				<li id="Bpertanian">Pertanian </li>
				<li id="Bpeternakan">Peternakan </li>
				<li id="Bpaketwisata">Paket wisata </li>
			</ul>
		</div>
		<div class="col-md-10">
			<div class="panel panel-default" id="Cartikel">
				<div class="panel-heading">
					Artikel
				</div>
				<div class="panel-body">
					<form class="form-horizontal">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputJudul" placeholder="Tulis judul">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Deskripsi</label>
							<div class="col-sm-10">
								<textarea placeholder="Tulis isi" class="form-control" id="tempat-deskripsi"rows="10"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary">Upload</button>
								<button type="button" class="btn btn-default">Batal</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="panel panel-default" id="Cpertanian">
				<div class="panel-heading">
					Pertanian
				</div>
				<div class="panel-body">
					<form class="form-horizontal">
						<div class="form-group">
							<div class="col-sm-10">
								<table class="table table-bordered">
									<tbody class="text-center">
										<tr>
											<th class="text-center"><h4>Komoditas</h4></th>
											<th class="text-center"><h4>Lahan (Ha)</h4></th>
											<th class="text-center"><h4>Hasil (Ton)</h4></th>
										</tr>
										<tr>
											<td><b>Kobis</b></td>
											<td><input class="form-control" id="inputJumlahSayur1" placeholder="0"></td>
											<td><input class="form-control" id="inputHasilSayur1" placeholder="0"></td>
										</tr>
										<tr>
											<td><b>Chesim</b></td>
											<td><input class="form-control" id="inputJumlahSayur2" placeholder="0"></td>
											<td><input class="form-control" id="inputHasilSayur2" placeholder="0"></td>
										</tr>
										<tr>
											<td><b>Tomat</b></td>
											<td><input class="form-control" id="inputJumlahSayur3" placeholder="0"></td>
											<td><input class="form-control" id="inputHasilSayur3" placeholder="0"></td>
										</tr>
										<tr>
											<td><b>Cabe</b></td>
											<td><input class="form-control" id="inputJumlahSayur4" placeholder="0"></td>
											<td><input class="form-control" id="inputHasilSayur4" placeholder="0"></td>              
										</tr>
										<tr>
											<td><b>Jagung</b></td>
											<td><input class="form-control" id="inputJumlahSayur5" placeholder="0"></td>
											<td><input class="form-control" id="inputHasilSayur5" placeholder="0"></td>
										</tr>
										<tr>
											<td><b>Singkong</b></td>
											<td><input class="form-control" id="inputJumlahSayur6" placeholder="0"></td>
											<td><input class="form-control" id="inputHasilSayur6" placeholder="0"></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-0 col-sm-12">
								<button type="submit" class="btn btn-primary">Upload</button>
								<button type="button" class="btn btn-default">Batal</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="panel panel-default" id="Cpeternakan">
				<div class="panel-heading">
					Peternakan
				</div>
				<div class="panel-body">
					<form class="form-horizontal">
						<div class="form-group">							
							<div class="col-sm-10">
								<table class="table table-bordered">
									<tbody class="text-center">
										<tr>
											<th class="text-center"><h4>Ternak</h4></th>
											<th class="text-center"><h4>Jumlah (Ekor)</h4></th>											
										</tr>										
										<tr>
											<td><b>Sapi</b></td>
											<td><input class="form-control" id="inputJumlahSapi" placeholder="0"></td>											
										</tr>
										<tr>
											<td><b>Kambing</b></td>
											<td><input class="form-control" id="inputJumlahKambing" placeholder="0"></td>											
										</tr>
										<tr>
											<td><b>Ayam</b></td>
											<td><input class="form-control" id="inputJumlahAyam" placeholder="0"></td>
										</tr>
										<tr>
											<td><b>Kuda</b></td>
											<td><input class="form-control" id="inputJumlahKuda" placeholder="0"></td>              
										</tr>
										<tr>
											<td><b>Jagung</b></td>
											<td><input class="form-control" id="inputJumlah" placeholder="0"></td>
										</tr>																			
									</tbody>
								</table>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-0 col-sm-12">
								<button type="submit" class="btn btn-primary">Upload</button>
								<button type="button" class="btn btn-default">Batal</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="panel panel-default" id="Cpaketwisata">
				<div class="panel-heading">
					Paket Wisata
				</div>
				<div class="panel-body">
					<form class="form-horizontal">
						<div class="form-group">
							<div class="col-sm-10">
								<table class="table table-bordered">
									<tbody class="text-center">
										<tr>
											<th class="text-center"><h4>Permainan</h4></th>
											<th class="text-center"><h4>Harga (Rupiah)</h4></th>
											<th class="text-center"><h4>Keterangan</h4></th>
										</tr>
										<tr>
											<td><b>Outbound</b></td>
											<td><input class="form-control" id="inputJumlahSayur1" placeholder="0"></td>
											<td>Kelompok</td>
										</tr>
										<tr>
											<td><b>ATV Bike</b></td>
											<td><input class="form-control" id="inputJumlahSayur2" placeholder="0"></td>
											<td>Perorangan</td>
										</tr>
										<tr>
											<td><b>Giant Swing</b></td>
											<td><input class="form-control" id="inputJumlahSayur3" placeholder="0"></td>
											<td>Perorangan</td>
										</tr>
										<tr>
											<td><b>Camping Ground</b></td>
											<td><input class="form-control" id="inputJumlahSayur4" placeholder="0"></td>
											<td>Kelompok</td>              
										</tr>
										<tr>
											<td><b>Agro Kids</b></td>
											<td><input class="form-control" id="inputJumlahSayur5" placeholder="0"></td>
											<td>Kelompok</td>
										</tr>
										<tr>
											<td><b>Homestay</b></td>
											<td><input class="form-control" id="inputJumlahSayur6" placeholder="0"></td>
											<td>Kelompok</td>
										</tr>
										<tr>
											<td><b>Paint Ball</b></td>
											<td><input class="form-control" id="inputJumlahSayur6" placeholder="0"></td>
											<td>Kelompok</td>
										</tr>
										<tr>
											<td><b>Rappelling</b></td>
											<td><input class="form-control" id="inputJumlahSayur6" placeholder="0"></td>
											<td>Kelompok</td>
										</tr>
										<tr>
											<td><b>Tracking</b></td>
											<td><input class="form-control" id="inputJumlahSayur6" placeholder="0"></td>
											<td>Kelompok</td>
										</tr>
										<tr>
											<td><b>Strwberry Farm</b></td>
											<td><input class="form-control" id="inputJumlahSayur6" placeholder="0"></td>
											<td>Perorangan</td>
										</tr>
										<tr>
											<td><b>Kuda Tunggang</b></td>
											<td><input class="form-control" id="inputJumlahSayur6" placeholder="0"></td>
											<td>Perorangan</td>
										</tr>
										<tr>
											<td><b>High Rope</b></td>
											<td><input class="form-control" id="inputJumlahSayur6" placeholder="0"></td>
											<td>Perorangan</td>
										</tr>										
									</tbody>
								</table>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-0 col-sm-12">
								<button type="submit" class="btn btn-primary">Upload</button>
								<button type="button" class="btn btn-default">Batal</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="panel panel-default" id="Ckegiatan">
				<div class="panel-heading">
					Kegiatan
				</div>
				<div class="panel-body">
					<form class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-2 control-label">Judul</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputJudul" placeholder="Tulis judul">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Deskripsi</label>
							<div class="col-sm-10">
								<textarea placeholder="Tulis isi" class="form-control" id="tempat-deskripsi"rows="10"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Tanggal mulai</label>
							<div class="col-sm-3">
								<input type="date"></input>
							</div>
							<label class="col-sm-2 control-label">Tanggal akhir</label>
							<div class="col-sm-3">
								<input type="date"></input>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary">Upload</button>
								<button type="button" class="btn btn-default">Batal</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="panel panel-default" id="Cdaftar">
				<div class="panel-heading">
					Daftar konten
				</div>
				<div class="panel-body">
					<ul class="list-unstyled">
						<li>
							<div class="row">
								<span class="col-sm-5">Judul artikel panjang panjang panjang panjang panjang panjang</span>
								<span class="col-sm-3">01/01/1991</span>
								<a href="" class="btn btn-link col-sm-1">Edit</a>
								<button class="btn btn-link col-sm-1">Hapus</button>
							</div>
						</li>
						<li>
							<div class="row">
								<span class="col-sm-5">Judul artikel</span>
								<span class="col-sm-3">01/01/1991</span>
								<a href="" class="btn btn-link col-sm-1">Edit</a>
								<button class="btn btn-link col-sm-1">Hapus</button>
							</div>
						</li>
					</ul>
				</div>
			</div>


		</div> 
	</div>
</div>

<!-- FOOTER -->
<div class="footer">
	<div class="row">
		<div class="col-md-3">
			<h4>Tentang Situs ini</h4><hr/>
			<div class="garis"></div>
			<ul class="list-unstyled">
				<li><a href="">Peta situs</a></li>
				<li><a href="">Peta Desa Serang</a></li>
				<li><a href="">Peta Wisata</a></li>
				<li class="divider"></li>
				<li><a href="">Hubungi kami</a></li>
			</ul>
		</div>

		<div class="col-md-3" id>
			<h4>Temukan Kami di</h4><hr/>
			<div class="garis"></div>
			<ul class="list-unstyled list-inline">
				<li>
					<a href="https://www.facebook.com/">
						<span>
							<i class="fa fa-facebook fa-2x"></i>
							Facebook
						</span>
					</a>
				</li>
				<li>
					<a href="https://twitter.com/">
						<span>
							<i class="fa fa-twitter fa-2x"></i>
							Twitter
						</span>
					</a>
				</li>
				<li>
					<a href="https://twitter.com/">
						<span>
							<i class="fa fa-instagram fa-2x"></i>
							Instagram
						</span>
					</a>
				</li>
				<li>
					<a href="https://twitter.com/">
						<span>
							<i class="fa fa-google-plus fa-2x"></i>
							Google+
						</span>
					</a>
				</li>
				<li>
					<a href="">
						<span>
							<i class="fa fa-youtube fa-2x"></i>
							Youtube
						</span>
					</a>
				</li>
			</ul>
		</div>
		<div class="col-md-3">
			<h4>Galery</h4><hr/>
			<div class="garis"></div>
			<ul class="list-unstyled">
				<li>
					<a href="">
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="text-center">© KKN UGM 2015</div>
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
