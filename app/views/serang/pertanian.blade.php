<!DOCTYPE html>
<html>
<head>
	<title>Serang | Pertanian</title>
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
	<div class="container fix-content">
		<h1 class="text-center">Hasil Pertanian Desa Serang</h1>
		<p>
			Desa Serang merupakan desa yang berada di dataran tinggi. Desa Serang sangat cocok untuk bercocok tanam. Desa Serang sebagai tempat yang cocok untuk bercocok tanam dimanfaatkan oleh warganya sebagai lahan pertanian. Pertanian yang berkembang di Desa Serang sangatlah beragam, antara lain Kobis, Chesim, Wortel, Sawi, Ubi Kayu, Ubi Jalar, Tomat, Strawberry dan lain-lain.
			Mayoritas masyarakat Desa Serang mengelola pertanian masih menggunakan adat/kultur telah ada sejak dulu.
		</p>
		<br/>
		<div class="row">
			<ol class="breadcrumb">
				<?php foreach ($results["tahun"] as $tahun) {
					if ($tahun->tahun == $pertanian->tahun) { $active = "active";	}
					else{ $active = "";	}
					echo"<li class='".$active."'><a href=".URL::to('serang/pertanian/'.$tahun->tahun).">".$tahun->tahun."</a></li>";	
				} ?>
			</ol>
		</div>
		<div class="row">
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/pertanian/jagung.jpg')}}">
					<div class="caption">
						<h4 class="text-center">Jagung</h4>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<th>Lahan (Ha)</th>
									<th>Hasil (Ton/Ha)</th>
								</tr>
								<tr>
									<td id="jagungLuas">{{round($pertanian->jagung_luas,2)}}</td>
									<td id="jagungHasil">{{round($pertanian->jagung_hasil,2)}}</td>
								</tr>
							</tbody>	
						</table>
						<button class="btn btn-default desc">Penjelasan</button>
						<p>Jagung atau Zea mays adalah tanaman yang banyak ditanam di Desa Serang. Tanah Yang Subur serta iklim yang mendukung untuk pertumbuhan jagung. Para Petani Banyak yang menanam jagung . Jenis Jagung yang ditanam lebih banyak jagung lokal dibandingkan jagung manis ataupun jenis jagung lainnya. Petani jagung didesa Serang lebih banyak menjual hasil Jagungnya untuk pakan ternak maupun dijual untuk keperluan lain.</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/pertanian/ubikayu.jpg')}}">
					<div class="caption">
						<h4 class="text-center">Ubi Kayu</h4>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<th>Lahan (Ha)</th>
									<th>Hasil (Ton/Ha)</th>
								</tr>
								<tr>
									<td id="ubiKayuLuas">{{round($pertanian->ubi_kayu_luas,2)}}</td>
									<td id="ubiKayuHasil">{{round($pertanian->ubi_kayu_hasil,2)}}</td>
								</tr>
							</tbody>	
						</table>
						<button class="btn btn-default desc">Penjelasan</button>
						<p>Ubi Kayu, Ketela Pohon ataupun Singkong adalah  perdu tahunan tropika dan subtropika dari suku Euphorbiaceae. Umbinya dikenal luas sebagai makanan pokok penghasil karbohidrat dan daunnya sebagai sayuran.
							Ubi Kayu Banyak ditanam Didesa Serang, Pembudidayaannya yang mudah serta perawatannya yang tidak terlalu rumit. Membuat Tanaman ini banyak dijumpai dilahan pertanian milik petani Serang. 
							Ubi Kayu ini selain dikonsumsi sendiri lebih banyak dijual ke pengepul ataupun ke Pabrik-Pabrik yang akan mengolahnya. Sistem Penjualan ubi Kayu di Desa Serang menggunakan model tebas.
						</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/pertanian/ubijalar.jpg')}}">
					<div class="caption">
						<h4 class="text-center">Ubi Jalar</h4>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<th>Lahan (Ha)</th>
									<th>Hasil (Ton/Ha)</th>
								</tr>
								<tr>
									<td id="ubiJalarLuas">{{round($pertanian->ubi_jalar_luas,2)}}</td>
									<td id="ubiJalarHasil">{{round($pertanian->ubi_jalar_hasil,2)}}</td>
								</tr>
							</tbody>	
						</table>
						<button class="btn btn-default desc">Penjelasan</button>
						<p>Ubi Jalar</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/pertanian/cabai.jpg')}}">
					<div class="caption">
						<h4 class="text-center">Cabai</h4>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<th>Lahan (Ha)</th>
									<th>Hasil (Ton/Ha)</th>
								</tr>
								<tr>
									<td id="cabaiLuas">{{round($pertanian->cabai_luas,2)}}</td>
									<td id="cabaiHasil">{{round($pertanian->cabai_hasil,2)}}</td>
								</tr>
							</tbody>	
						</table>
						<button class="btn btn-default desc">Penjelasan</button>
						<p>Cabai  adalah  tumbuhan anggota genus Capsicum. Buahnya dapat dikategorikan sebagai sayuran ataupun bumbu, tergantung bagaimana digunakan. Sebagai bumbu, buah cabai yang pedas sangat populer di Asia Tenggara sebagai penguat rasa makanan.
							Dengan Iklim yang serang yang baik serta tanahnya yang subur tanaman cabai tumbuh baik di Desa Serang. Selain itu harganya yang cukup tinggi membuat para petani banyak menanam cabai sebagai tumbuhan yang memiliki nilai ekonomi yang tinggi.
						</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/pertanian/tomat.jpg')}}">
					<div class="caption">
						<h4 class="text-center">Tomat</h4>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<th>Lahan (Ha)</th>
									<th>Hasil (Ton/Ha)</th>
								</tr>
								<tr>
									<td id="tomatLuas">{{round($pertanian->tomat_luas,2)}}</td>
									<td id="tomatHasil">{{round($pertanian->tomat_hasil,2)}}</td>
								</tr>
							</tbody>	
						</table>
						<button class="btn btn-default desc">Penjelasan</button>
						<p>Tomat (Solanum lycopersicum syn. Lycopersicum esculentum) adalah tumbuhan dari keluarga Solanaceae, tumbuhan asli Amerika Tengah dan Selatan, dari Meksiko sampai Peru. 
							Tomat merupakan tumbuhan siklus hidup singkat, dapat tumbuh setinggi 1 sampai 3 meter. Tomat merupakan keluarga dekat dari kentang.	Seperti Halnya Kentang  tomat Juga membutuhkan Iklim yang sejuk untuk tumbuh. 
							Karena iklim serta letak dari desa Serang sesuai dengan yang dibutuhkan oleh tomat untuk tumbuh Banyak Petani menanam tomat didesa Serang.  Selain itu factor lain yang mendukung tanaman tomat menjadi salah satu komoditas sayuran adalah karena tanah di desa Serang yang subur sehingga mendukung kegiatan pertanianan
						</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/pertanian/sawi.jpg')}}">
					<div class="caption">
						<h4 class="text-center">Sawi</h4>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<th>Lahan (Ha)</th>
									<th>Hasil (Ton/Ha)</th>
								</tr>
								<tr>
									<td id="sawiLuas">{{round($pertanian->sawi_luas,2)}}</td>
									<td id="sawiHasil">{{round($pertanian->sawi_hasil,2)}}</td>
								</tr>
							</tbody>	
						</table>
						<button class="btn btn-default desc">Penjelasan</button>
						<p>Sawi</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/pertanian/kentang.jpg')}}">
					<div class="caption">
						<h4 class="text-center">Kentang</h4>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<th>Lahan (Ha)</th>
									<th>Hasil (Ton/Ha)</th>
								</tr>
								<tr>
									<td id="kentangLuas">{{round($pertanian->kentang_luas,2)}}</td>
									<td id="kentangHasil">{{round($pertanian->kentang_hasil,2)}}</td>
								</tr>
							</tbody>	
						</table>
						<button class="btn btn-default desc">Penjelasan</button>
						<p>Kentang atau Solanum tuberosum L adalah  tanaman dari suku Solanaceae yang memiliki umbi batang yang dapat dimakan dan disebut "kentang".
							Kentang adalah salah satu sayuran yang  banyak di tanam oleh Petani di Desa Serang. Iklim Sejuk Desa Serang  serta letak desa Serang yan berada pada Dataran tinggi  merupakan salah satu factor tanaman sayur ini  ditanam oleh para petani di Desa Serang.
						</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/pertanian/kubis.jpg')}}">
					<div class="caption">
						<h4 class="text-center">Kubis</h4>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<th>Lahan (Ha)</th>
									<th>Hasil (Ton/Ha)</th>
								</tr>
								<tr>
									<td id="kubisLuas">{{round($pertanian->kubis_luas,2)}}</td>
									<td id="kubisHasil">{{round($pertanian->kubis_hasil,2)}}</td>
								</tr>
							</tbody>	
						</table>
						<button class="btn btn-default desc">Penjelasan</button>
						<p>Kobis/ Kubis atau yang nama ilmiahnya  Brassica oleracea L  Sayuran yang dimanfaatkan daunnya untuk dimakan. Merupakan sayuran yang sudah banyak dikenal oleh masyrakat indonesia
							Didaerah serang yang memiliki iklim yang baik serta tanah yang subur sayuran Kobis ini tumbuh baik di Desa Serang. Dan juga para petani sayur desa Serang telah banyak yang menanamnya.
						</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/pertanian/buncis.jpg')}}">
					<div class="caption">
						<h4 class="text-center">Buncis</h4>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<th>Lahan (Ha)</th>
									<th>Hasil (Ton/Ha)</th>
								</tr>
								<tr>
									<td id="buncisLuas">{{round($pertanian->buncis_luas,2)}}</td>
									<td id="buncisHasil">{{round($pertanian->buncis_hasil,2)}}</td>
								</tr>
							</tbody>	
						</table>
						<button class="btn btn-default desc">Penjelasan</button>
						<p>Buncis adalah sejenis polong-polongan yang dapat dimakan dari berbagai kultivar Phaseolus vulgaris. Buah, biji, dan daunnya dimanfaatkan orang sebagai sayuran.
							Tanaman buncis merupakan salah satu sayuran yang ditanam oleh para petani didesa Serang . Iklim yang sejuk serta tanah yang subur membuat tanaman ini cocol untuk ditanam didaerah Serang . Karena factor- factor tersebut beberapa petani menanam tanaman buncis ini.
						</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/pertanian/terong.jpg')}}">
					<div class="caption">
						<h4 class="text-center">Terong</h4>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<th>Lahan (Ha)</th>
									<th>Hasil (Ton/Ha)</th>
								</tr>
								<tr>
									<td id="terongLuas">{{round($pertanian->terong_luas,2)}}</td>
									<td id="terongHasil">{{round($pertanian->terong_hasil,2)}}</td>
								</tr>
							</tbody>	
						</table>
						<button class="btn btn-default desc">Penjelasan</button>
						<p>Terong adalah jenis sayuran yang berkerabat dekat dengan dengan kentang dan Leunca. Terong tumbuh bagus di Desa Serang Purbalingga. 
							Terong hasil tanam di Desa Serang memiliki Ukuran yang cukup besar dan memiliki warna ungu yang indah. Hal ini dikarenakan tanahnya yang subur serta iklim yang bagus dan juga tanaman terong mudah beradaptasi dengan pengaruh cuaca. Banyak petani didesa Serang menanam terong untuk dijual sebagai barang dagang.
						</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/pertanian/wortel.jpg')}}">
					<div class="caption">
						<h4 class="text-center">Wortel</h4>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<th>Lahan (Ha)</th>
									<th>Hasil (Ton/Ha)</th>
								</tr>
								<tr>
									<td id="wortelLuas">{{round($pertanian->wortel_luas,2)}}</td>
									<td id="wortelHasil">{{round($pertanian->wortel_hasil,2)}}</td>
								</tr>
							</tbody>	
						</table>
						<button class="btn btn-default desc">Penjelasan</button>
						<p>Wortel adalah salah satu jenis sayuran yang banyak ditanam oleh petani di Desa Serang.  Iklim yang bagus serta tanah yang subur membuat para petani banyak menanam wortel. Selain itu biaya untuk menanam wortel tidak terlalu mahal dibandingkan jenis sayur lainya. Maka dari itu banyak petani di Desa serang ini menanam wortel.</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/pertanian/padigogo.jpg')}}">
					<div class="caption">
						<h4 class="text-center">Padi Gogo</h4>
						<table class="table table-bordered">
							<tbody>
								<tr>
									<th>Lahan (Ha)</th>
									<th>Hasil (Ton/Ha)</th>
								</tr>
								<tr>
									<td id="padiLuas">{{round($pertanian->padi_luas,2)}}</td>
									<td id="padiHasil">{{round($pertanian->padi_hasil,2)}}</td>
								</tr>
							</tbody>	
						</table>
						<button class="btn btn-default desc">Penjelasan</button>
						<p>Padi Gogo</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
		</div><!-- End row -->	
		<!-- GRAFIK/CHART -->
		<div class="col-md-5 col-md-offset-1" id="canvas-holder">
			<h3 class="text-center">Lahan  (Ha)</h3>
			<canvas id="lahan" width="300" height="300"/>
		</div>
		<div class="col-md-5" id="canvas-holder">
			<h3 class="text-center">Hasil  (Ton/Ha)</h3>
			<canvas id="hasil" width="300" height="300"/>
		</div>
	</div>
	<!-- CONTENT END -->
	@include('home.footer')
	<script>
	var jagungLuas = parseFloat( $('#jagungLuas').text() );
	var ubiKayuLuas = parseFloat( $('#ubiKayuLuas').text() );
	var ubiJalarLuas = parseFloat( $('#ubiJalarLuas').text() );
	var cabaiLuas = parseFloat( $('#cabaiLuas').text() );
	var tomatLuas = parseFloat( $('#tomatLuas').text() );
	var sawiLuas = parseFloat( $('#sawiLuas').text() );
	var kentangLuas = parseFloat( $('#kentangLuas').text() );
	var kubisLuas = parseFloat( $('#kubisLuas').text() );
	var buncisLuas = parseFloat( $('#buncisLuas').text() );
	var terongLuas = parseFloat( $('#terongLuas').text() );
	var wortelLuas = parseFloat( $('#wortelLuas').text() );
	var padiLuas = parseFloat( $('#padiLuas').text() );
	var lahanData = [
	{
		value: jagungLuas,
		color:"#FFF380",
		highlight: "#FFFF94",
		label: "Jagung"
	},
	{
		value: ubiKayuLuas,
		color: "#FFE18D",
		highlight: "#FFE18D",
		label: "Ubi Kayu"
	},
	{
		value: ubiJalarLuas,
		color: "#C25311",
		highlight: "#D66725",
		label: "Ubi Jalar"
	},
	{
		value: cabaiLuas,
		color: "#C11B17",
		highlight: "#DF3935",
		label: "Cabai"
	},
	{
		value: tomatLuas,
		color: "#F20505",
		highlight: "#FF3737",
		label: "Tomat"
	},
	{
		value: sawiLuas,
		color: "#A8FF06",
		highlight: "#C6FF24",
		label: "Sawi"
	},
	{
		value: kentangLuas,
		color: "#733702",
		highlight: "#874B16",
		label: "Kentang"
	},
	{
		value: kubisLuas,
		color: "#6E9137",
		highlight: "#8CAF55",
		label: "Kubis"
	},
	{
		value: buncisLuas,
		color: "#266A2E",
		highlight: "#3A7E42",
		label: "Buncis"
	},
	{
		value: terongLuas,
		color: "#614051",
		highlight: "#755465",
		label: "Terong"
	},
	{
		value: wortelLuas,
		color: "#FF9933",
		highlight: "#FFAD47",
		label: "Wortel"
	},
	{
		value: padiLuas,
		color: "#EEFFDE",
		highlight: "#FFFFF2",
		label: "Padi Gogo"
	}
	];

	var jagungHasil = parseFloat( $('#jagungHasil').text() );
	var ubiKayuHasil = parseFloat( $('#ubiKayuHasil').text() );
	var ubiJalarHasil = parseFloat( $('#ubiJalarHasil').text() );
	var cabaiHasil = parseFloat( $('#cabaiHasil').text() );
	var tomatHasil = parseFloat( $('#tomatHasil').text() );
	var sawiHasil = parseFloat( $('#sawiHasil').text() );
	var kentangHasil = parseFloat( $('#kentangHasil').text() );
	var kubisHasil = parseFloat( $('#kubisHasil').text() );
	var buncisHasil = parseFloat( $('#buncisHasil').text() );
	var terongHasil = parseFloat( $('#terongHasil').text() );
	var wortelHasil = parseFloat( $('#wortelHasil').text() );
	var padiHasil = parseFloat( $('#padiHasil').text() );
	var hasilData = [
	{
		value: jagungHasil,
		color:"#FFF380",
		highlight: "#FFFF94",
		label: "Jagung"
	},
	{
		value: ubiKayuHasil,
		color: "#FFE18D",
		highlight: "#FFE18D",
		label: "Ubi Kayu"
	},
	{
		value: ubiJalarHasil,
		color: "#C25311",
		highlight: "#D66725",
		label: "Ubi Jalar"
	},
	{
		value: cabaiHasil,
		color: "#C11B17",
		highlight: "#DF3935",
		label: "Cabai"
	},
	{
		value: tomatHasil,
		color: "#F20505",
		highlight: "#FF3737",
		label: "Tomat"
	},
	{
		value: sawiHasil,
		color: "#A8FF06",
		highlight: "#C6FF24",
		label: "Sawi"
	},
	{
		value: kentangHasil,
		color: "#733702",
		highlight: "#874B16",
		label: "Kentang"
	},
	{
		value: kubisHasil,
		color: "#6E9137",
		highlight: "#8CAF55",
		label: "Kubis"
	},
	{
		value: buncisHasil,
		color: "#266A2E",
		highlight: "#3A7E42",
		label: "Buncis"
	},
	{
		value: terongHasil,
		color: "#614051",
		highlight: "#755465",
		label: "Terong"
	},
	{
		value: wortelHasil,
		color: "#FF9933",
		highlight: "#FFAD47",
		label: "Wortel"
	},
	{
		value: padiHasil,
		color: "#EEFFDE",
		highlight: "#FFFFF2",
		label: "Padi Gogo"
	}
	];

	window.onload = function(){
		var ctx = document.getElementById("lahan").getContext("2d");
		window.myPie = new Chart(ctx).Pie(lahanData);
		var ctx = document.getElementById("hasil").getContext("2d");
		window.myPie = new Chart(ctx).Pie(hasilData);
	};
	</script>	
</body>
</html>
