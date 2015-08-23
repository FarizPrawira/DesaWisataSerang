<!DOCTYPE html>
<html>
<head>
	<title>Serang | Kebun Petik Stroberi</title>
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
		<img src="{{URL::to('assets/img/stroberi1.jpg')}}">
		<span><h2 class="text-center">Kebun Petik Stroberi</h2></span>
	</div>
	<div class="container fix-content">
		<div class="row">
			<div class="col-md-offset-1 col-md-4">
				<img src="{{URL::to('assets/img/stroberi3.jpg')}}" class="img-responsive">
			</div>
			<div class="col-md-6">
				<p align="justify">
					Purbalingga merupakan salah satu kota kecil bagian dari Jawa Tengah yang berdekatan dengan Purwokerto. 
					Meskipun kecil, namun Purbalingga memiliki potensi wisata yang dapat dikatakan tidak sedikit dan layak 
					untuk menjadi daftar tujuan wisata berikutnya. Salah satunya adalah agrowisata di Desa Serang. 
					Desa Serang terletak di sebelah Kutabawa, Kecamatan Karangreja Kabupaten Purbalingga, Jawa Tengah dan 
					wilayahnya merupakan dataran tinggi atau di lereng gunung Slamet. Hal ini tentunya udara Desa Serang 
					masih sejuk, bersih dan segar serta di kanan kiri jalan disuguhi pemandangan asri. Dari banyaknya obyek 
					wisata Purbalingga, salah satu yang tidak boleh terlewatkan ialah Agrowisata kebun Strawberry Desa Serang.
				</p>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-offset-1  col-md-6">
				<p align="justify">
					Agrowisata kebun Strawberry merupakan kawasan obyek wisata potensial berbasis masyarakat. 
					Masyarakat desa Serang yang mengelola langsung wisata kebun Strawberry ini. Pengunjung diperbolehkan 
					masuk ke dalam kebun-kebun dan dipersilahkan melihat tanaman Strawberry baik yang sudah berbuah maupun 
					yang sedang dibudidayakan. Selain rasa buah Strawberrynya yang terkenal manis dan besar, 
					fasilitas petik sendiri menjadi daya tarik terbesar dalam wisata ini. Pengunjung dapat merasakan 
					pengalaman memetik Strawberry sendiri. Hal ini juga menarik untuk menjadi media pembelajaran anak-anak 
					mengenalkan pertanian sejak dini. Hamparan kebun Strawberry menanti untuk dipetik oleh wisatawan. 
					Harga tiket masuknya pun tidak menguras kantong, cukup dengan Rp 15.000,00 para pengunjung dapat 
					menikmati fasilitas kebun petik Strawberry. Pengunjung diberi keranjang plastik sebagai tempat buah 
					yang telah dipetik. Ketika di dalam kebun, pengunjung hanya boleh mencicipi beberapa buah akan tetapi 
					tidak disarankan karena buah harus dicuci dulu sebelum dimakan supaya bersih. Selanjutnya, hasil petik 
					akan ditimbang dan dicuci bersih lalu ditawarkan apakah pengunjung tersebut akan membeli buah yang telah 
					dipetik atau produk olahan Strawberry. Wisata kebun petik Strawberry sudah lama ada di Desa Serang, 
					peminatnya pun cukup banyak apalagi pada hari-hari libur.
				</p>
			</div>
			<div class="col-md-4">
				<img src="{{URL::to('assets/img/stroberi2.jpg')}}" class="img-responsive">
			</div>
		</div>
	</div>	
	<!-- CONTENT END -->
	
	@include('home.footer')
</body>
</html>
