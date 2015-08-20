<!DOCTYPE html>
<html>
<head>
	<title>Serang | Peternakan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- STYLE -->
	<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,700italic,900,900italic' rel='stylesheet' type='text/css'> -->
	<link rel="stylesheet" href="{{URL::to('vendor/font-awesome/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('vendor/bootstrap/dist/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('assets/css/site.css')}}"/>
</head>
<body>
	@include('home.header')
	<!-- CONTENT -->
	<div class="container fix-content">
		<h1 class="text-center">Hasil Peternakan Desa Serang</h1>
		<p>
		<!-- 	Desa Serang merupakan desa yang berada di dataran tinggi. Desa Serang sangat cocok untuk bercocok tanam. Desa Serang sebagai tempat yang cocok untuk bercocok tanam dimanfaatkan oleh warganya sebagai lahan pertanian. Pertanian yang berkembang di Desa Serang sangatlah beragam, antara lain Kobis, Chesim, Wortel, Sawi, Ubi Kayu, Ubi Jalar, Tomat, Strawberry dan lain-lain.
			Mayoritas masyarakat Desa Serang mengelola pertanian masih menggunakan adat/kultur telah ada sejak dulu. -->
		</p>
		<br/>
		<div class="row">
			<ol class="breadcrumb">
				<?php foreach ($results["tahun"] as $tahun) {
					if ($tahun->tahun == $peternakan->tahun) { $active = "active";	}
					else{ $active = "";	}
					echo"<li class='".$active."'><a href=".URL::to('serang/peternakan/'.$tahun->tahun).">".$tahun->tahun."</a></li>";	
				} ?>
			</ol>
		</div>
		<div class="row">
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/peternakan/sapi.jpg')}}">
					<div class="caption">
						<h4 class="text-center">Sapi</h4>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<th>Jumlah (ekor)</th>
								</tr>
								<tr>
									<td id="sapi">{{round($peternakan->sapi)}}</td>
								</tr>
							</tbody>	
						</table>
						<button class="btn btn-default desc">Penjelasan</button>
						<p>
							Sapi atau lembu adalah hewan ternak biasa dimanfaatkan susu dan dagingnya sebagai bahan makanan manusia. Selain itu disejumlah tempat didunia digunakan sebagi alat penggerak alat transportasi, pengolahan lahan tanam dan alat industry. Di desa Serang Sapi telah banyak diternakan terutama di dusun Gunung Malang. Sama halnya dengan Kambing, Sapi juga menjadi barang dagang yang bernilai ekonomi tinggi selain dari bertani. Di Desa  Serang ini untuk pakan ternak berupa daun-daunan maupun rerumputan tidak terlalu sulit untuk mencarinya sehingga untuk pakan ternak sapi sangatlah terjamin.	Seperti kambing, sapi di Desa Serang banyak dijual menjelang hari raya Qurban / Haji untuk Qurban.
						</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/peternakan/kambing.jpg')}}">
					<div class="caption">
						<h4 class="text-center">Kambing</h4>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<th>Jumlah (ekor)</th>
								</tr>
								<tr>
									<td id="kambing">{{round($peternakan->kambing)}}</td>
								</tr>
							</tbody>	
						</table>
						<button class="btn btn-default desc">Penjelasan</button>
						<p>
							Kambing merupakan binatang memamah biak , di Indonesia kambing telah dikembangbiakan atau diternakan untuk dijual. Pakan ternak Kambing biasanya daun-daunan atau rerumputan. Di Desa Serang Kambing telah banyak diternakan oleh para peternak. Peternakan kambing biasanya menjadi sampingan selain menjadi petani.  Di Desa Serang ini untuk pakan ternak kambing tidak terlalu sulit karena masih banyak rerumputan, atau daun-daunan hijau yang dapat digunakan sebagai pakan ternak. Biasanya Kambing di Desa Serang banyak dijual pada saat Hari Raya Qurban/Haji. Jadi bukan dijual dagingnya melainkan penjualannya adalah perekor.
						</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/peternakan/ayam.jpg')}}">
					<div class="caption">
						<h4 class="text-center">Ayam</h4>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<th>Jumlah (ekor)</th>
								</tr>
								<tr>
									<td id="ayam">{{round($peternakan->ayam)}}</td>
								</tr>
							</tbody>	
						</table>
						<button class="btn btn-default desc">Penjelasan</button>
						<p>
							Ayam adalah unggas yang biasa dipelihara orang untuk dimanfaatkan untuk keperluan hidup maupun dijual. Ayam dapat dimanfaatkan dagingnya atau telurnya . Keduanya memiliki nilai ekonomi yang cukup tinggi. Peternak Ayam didesa Serang cukup banyak , Peternakaan ayam di Desa Serang lebih cenderung ke peternakan ayam skala kecil. Jadi bukan Peternakan ayam yang benar-benar khusus untuk memelihara ayam dengan jumlah ayam yang besar. Beternak Ayam juga merupakan pekerjaan sampingan untuk meningkatkan perekonomian selain dari bertani.
						</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/peternakan/kuda.jpg')}}">
					<div class="caption">
						<h4 class="text-center">Kuda</h4>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<th>Jumlah (ekor)</th>
								</tr>
								<tr>
									<td id="kuda">{{round($peternakan->kuda)}}</td>
								</tr>
							</tbody>	
						</table>
						<button class="btn btn-default desc">Penjelasan</button>
						<p>
							Kuda adalah salah satu dari sepuluh spesies modern mamalia dari genus Equus. Hewan ini telah lama merupakan salah satu hewan peliharaan yang penting secara ekonomis dan historis, dan telah memegang peranan penting dalam pengangkutan orang dan barang selama ribuan tahun. Kuda dapat ditunggangi oleh manusia dengan menggunakan sadel dan dapat pula digunakan untuk menarik sesuatu, seperti kendaraan beroda, atau bajak. Di desa Serang Populasi atau jumlah kuda bisa dibilang lebih  sedikit dibandingkan dengan Kambing dan Sapi. Karena jumlahnya sedikit Kuda di Desa Serang digunakan sebagai kuda tunggang atau sebagai salah satu wahana wisata. Selain wahana wisata salah satu pemelihara kuda juga ada yang memanfaatkannya sebagai perpustakaan keliling di Desa Serang.
						</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/peternakan/daging.jpg')}}">
					<div class="caption">
						<h4 class="text-center">Daging</h4>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<th class="text-center">Jumlah Produk Ternak</th>
								</tr>
								<tr>
									<td id="daging">{{$peternakan->daging}}</td>
								</tr>
							</tbody>	
						</table>
						<button class="btn btn-default desc">Penjelasan</button>
						<p>
							Daging
						</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/peternakan/susu.jpg')}}">
					<div class="caption">
						<h4 class="text-center">Susu</h4>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<th class="text-center">Jumlah Produk Ternak</th>
								</tr>
								<tr>
									<td id="susu">{{$peternakan->susu}} ltr/th</td>
								</tr>
							</tbody>	
						</table>
						<button class="btn btn-default desc">Penjelasan</button>
						<p>
							Susu
						</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- GRAFIK/CHART -->
			<div class="col-md-5 col-md-offset-1" id="canvas-holder">
				<h3 class="text-center">Jumlah Ternak (ekor)</h3>
				<canvas id="ternak" width="300" height="300"/>
			</div>
			<div class="col-md-5" id="canvas-holder">
				<h3 class="text-center">Produk Ternak</h3>
				<canvas id="hasil" width="300" height="300"/>
			</div>
		</div>
	</div>
	<!-- CONTENT END -->
	@include('home.footer')
	<script>
	var sapi = parseInt( $('#sapi').text() );
	var kambing = parseInt( $('#kambing').text() );
	var ayam = parseInt( $('#ayam').text() );
	var kuda = parseInt( $('#kuda').text() );
	var ternakData = [
	{
		value: sapi,
		color:"#F7464A",
		highlight: "#FF5A5E",
		label: "Sapi"
	},
	{
		value: ayam,
		color: "#46BFBD",
		highlight: "#5AD3D1",
		label: "Ayam"
	},
	{
		value: kambing,
		color: "#FDB45C",
		highlight: "#FFC870",
		label: "Kambing"
	},
	{
		value: kuda,
		color: "#949FB1",
		highlight: "#A8B3C5",
		label: "Kuda"
	}
	];

	var susu = parseInt( $('#susu').text() );
	var daging = parseInt( $('#daging').text() );
	var hasilData = [
	{
		value: susu,
		color:"#F7464A",
		highlight: "#FF5A5E",
		label: "Susu"
	},
	{
		value: daging,
		color: "#46BFBD",
		highlight: "#5AD3D1",
		label: "Daging"
	}
	];
	window.onload = function(){
		var ctx = document.getElementById("ternak").getContext("2d");
		window.myPie = new Chart(ctx).Pie(ternakData);
		var ctx = document.getElementById("hasil").getContext("2d");
		window.myPie = new Chart(ctx).Pie(hasilData);
	};
	</script>	
</body>
</html>
