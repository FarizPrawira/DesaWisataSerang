
<!DOCTYPE html>
<html>
<head>
	<title>Serang | Rest Area</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- STYLE -->
	<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,700italic,900,900italic' rel='stylesheet' type='text/css'> -->
	<link rel="stylesheet" href="{{URL::to('vendor/bootstrap/dist/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('vendor/font-awesome/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('assets/css/site.css')}}"/>
</head>
<body>
	@include('home.header')

	<!-- CONTENT -->
	<div class="content-header">
		<img src="{{URL::to('assets/img/restarea1.jpg')}}">
		<span><h2 class="text-center">Rest Area</h2></span>
	</div>
	<div class="container fix-content">
		<div class="row">
			<div class="col-md-offset-1 col-md-4">
				<img src="{{URL::to('assets/img/restarea2.jpg')}}" class="img-responsive">
			</div>
			<div class="col-md-6">
				<p align="justify">
					Banyak tempat wisata yang menarik untuk di kunjungi terutama tempat wisata di daerah pegunungan. 
					Salah satunya ada yang berada di wilayah Kabupaten Purbalingga, dimana ada tempat wisata agrowisata yang bernama Agrowisata Lembah Asri. 
					Nama Argowisata Lembah Asri ini diberikan oleh Bupati Purbalingga pada bulan Januari 2014.  
					Wisata yang di tawarkan oleh agrowisata Lembah Asri pun sangat beragam, seperti Kebun Stroberi, Paket Outbound, Kebun sayur kuda tunggang dan masih banyak lagi. 
					Lembah Asri juga menawrkan pemandangan alam yang luar biasa selain itu daerah atau lokasi lembah asri memiliki udara yang segar yang  menyehatkan. 
					Lokasi Agrowisata Lembah Asri terletak di Desa Serang Kecamatan Karangreja Kabupaten purbalingga, berjarak sekitar 23 km dari pusat Kota Purbalingga, 
					Lokasi Agrowisata ini menjadi penghubung antara tempat wisata lainnya, seperti Goa Lawa, Wista Air Wabong, Sanggaruli Park, dan Purbasari Pancuran Mas.
				</p>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-offset-1 col-md-6">
				<p align="justify">
					Untuk mencapai tempat wisata Rest Area Lembah Asri dapat menggunakan kendaraan pribadi maupun angkutan umum. 
					Dapat melalui jalur utama yang jalannya lebih mudah dilalui ataupun jalur lain yang sedikit lebih sulit 
					namun terdapat pemandangan indah pohon-pohon yang menjulang tinggi serta pemandangan hijau hutan. 
					Biaya dikeluarkan pengunjung tidaklah terlalu mahal jika ingin berwisata di Rest Area Lembah Asri. 
					Untuk bermain permainan yang terdapat di Lembah Asri tidak terlalu menguras dompet anda sekalian. 
					Jika ingin menikmati sensasi menjadi petani strawberry dan menikmati hasil buah strawberry yang anda petik cukup 
					membayar Rp. 15000 saja namun jika dibawa pulang strawberry untuk oleh-oleh cukup membayar Rp 25.000. 
					Jika anda ingin menguji keberanian bisa mencoba wahana flying fox ataupun. Dan masih banyak wahana yang terdapat di Rest area lembah Asri. 
					Bagi anda yang bingung untuk berwisata bersama keluarga, maka tidak ada salahnya untuk datang dan menikmati indahnya suasana alam yang segar dan dapat memberikan ketenangan, 
					jadi ayo kita sekali-kali untuk merefresh diri kita dengan uniknya  berwisata di agrowisata lembah asri Purbalingga.
				</p>
			</div>
			<div class="col-md-4">
				<img src="{{URL::to('assets/img/restarea3.jpg')}}" class="img-responsive">
			</div>
		</div>
	</div>	
	<!-- CONTENT END -->

	@include('home.footer')
</body>
</html>
