<!DOCTYPE html>
<html>
<head>
	<title>Serang |	Home Stay</title>
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
	<div class="content-header">
		<img src="{{URL::to('assets/img/homestay1.jpg')}}">
		<span><h2 class="text-center">Home Stay</h2></span>
	</div>
	<div class="container fix-content">
		<div class="row">
			<div class="col-md-offset-1 col-md-4">
				<img src="{{URL::to('assets/img/homestay2.jpg')}}" class="img-responsive">
			</div>
			<div class="col-md-6">
				Homestay mungkin banyak orang yang telah tahu istilah ini namun tidak sedikit pula yang tidak tahu istilah ini. 
				Homestay adalah Suatu penginapan yang menyewakan suatu tempat atau bangunan secara keseluruhan yang biasanya berbentuk sebuah rumah dan disewakan secara harian maupun bulanan. 
				Pada umumnya penginapan ini menyediakan lebih dari satu kamar, menyediakan sarapan, terdapat fasilitas dapur, ruang makan, ruang keluarga, 
				kamar mandi, dan fasilitas-fasiltas lainnya yang dapat dinikmati secara privat seperti anda tinggal dirumah sendiri. 
				Tipe penginapan ini sangat cocok bagi Anda yang berlibur ke luar kota bersama keluarga maupun beramai-ramai. 
				Di Desa Serang ini juga terdapat home stay. Home Stay yang ada di Desa Serang beragam ada yang besar maupun yang kecil 
				selain ukurannya harganya pun beragam ada yang mahal dan juga ada yang murah. 
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-offset-1 col-md-6">
				Homestay di desa serang biasanya pada hari libur sering digunakan Sekolah-sekolah untuk mengisi kegiatan liburan untuk memberikan pengetahuan 
				kepada anak muridnya bagaimana menjadi seorang petani mulai dari memetik hasil panen dan terkadang ada juga yang ikut juga menjual strawberry. 
				Selain digunakan oleh para murid sekolah, Homestay ini biasanya digunakan untuk liburan keluarga. 
				Wisata di Desa serang memang cocok untuk wisata keluarga. Banyak Wisata yang dapat dikunjungi seperti 
				Kebun Strawberry, Kuda Tunggang, Rest area dan masih banyak lagi wisata atau wahana yang dapat dicoba bersama keluarga. 
				Karena banyak wisata maupun wahana yang ada di Desa Serang, bagi anda yang ingin menjelajahi desa Serang dapat menyewa homestay yang ada di desa Serang ini. 
				Sehingga dapat merasakan setiap jengkal tempat wisata yang ada di Desa Serang. 
				Maka dari itu ajak sekeluarga anda berlibur ke desa Serang untuk merasakan hawa segar daerah pegunungan.
			</div>
			<div class="col-md-4">
				<img src="{{URL::to('assets/img/homestay3.jpg')}}" class="img-responsive">
			</div>
		</div>
	</div>	
	<!-- CONTENT END -->

	@include('home.footer')
</body>
</html>