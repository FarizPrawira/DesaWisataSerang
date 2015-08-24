<!DOCTYPE html>
<html>
<head>
	<title>Serang | Hutan Pinus</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- STYLE -->
	<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,700italic,900,900italic' rel='stylesheet' type='text/css'> -->
	<link rel="stylesheet" href="{{URL::to('vendor/bootstrap/dist/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('vendor/font-awesome/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('assets/css/site.css')}}"/>
	<link rel="icon" type="image/png" href="{{URL::to('assets/img/favicon.png')}}">
</head>
<body>
	@include('home.header')

	<!-- CONTENT -->
	<div class="content-header">
		<img src="{{URL::to('assets/img/pinus1.jpg')}}">
		<span><h2 class="text-center">Hutan Pinus</h2></span>
	</div>
	<div class="container fix-content">
		<div class="row">
			<div class="col-md-offset-1 col-md-4">
				<img src="{{URL::to('assets/img/pinus2.jpg')}}" class="img-responsive">
			</div>
			<div class="col-md-6">
				<p align="justify">
					Di Desa Serang ini terdapat hutan pinus yang cukup luas dan bertempat dibeberapa lokasi. 
					Hutan pinus merupakan salah satu tempat objek wisata atau tempat yang sering dikunjungi oleh wisatawan 
					yang berasal dari luar maupun dalam purbalingga. Hutan Pinus ini biasanya di jadikan untuk wisata 
					keluarga pada saat liburan Sekolah maupun libur lebaran. Tempat yang sejuk dan pemandangan yang indah 
					membuat hutan pinus cocok untuk wisata keluarga. Di dalam Hutan Pinus para pengunjung tidak hanya ada 
					pemandagann hutan yang indah namun juga terdapat kuda tunggang. Dengan kuda tunggang ini anda bisa 
					berkeliling hutan pinus dan mearasakan sensasi berkuda dalam hutan. Selain untuk wisata Keluarga, 
					Hutan pinus juga sering digunakan untuk aktivitas Outbond. Outbond yang berisi banyak game-game yang 
					menyenangkan. Ada juga permainan Giant Swing, bagi anda yang ingin mersakan sensasi jatuh dari 
					ketinggian 20-25 meter diatas tanah.
				</p>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-offset-1  col-md-6">
				<p align="justify">
					Permainan ini sangat memacu adrenalin anda. Bagi anda yang suka tantangan permainan Giant Swing ini 
					wajib anda coba. Cukup datang Ke hutan Pinus dan membayar beberapa ribu rupiah anda sudah dapat 
					mencoba permainan Giant Swing. Di hutan pinus selain untuk berpiknik bersama keluarga, menaiki kuda 
					tunggang, melakukan out bound atau bermain Giant Swing. Hutan Pinus juga dapat digunakan sebagai Camping 
					Ground. Tempatnya yang luas dan keadaan yang nyaman membuat hutan pinus ini menjadi tempat yang cocok 
					untuk camping. Hutan Pinus di Desa Serang berdekatan dengan wisata petik Strawberry, jika sudah capek 
					bisa mampir ke Kebun Strawberry untuk membeli oleh-oleh Strawberry asli desa Serang atau anda bisa 
					mencoba untuk memetik buah strawberry sendiri.  
				</p>
			</div>
			<div class="col-md-4">
				<img src="{{URL::to('assets/img/pinus3.jpg')}}" class="img-responsive">
			</div>
		</div>
	</div>	
	<!-- CONTENT END -->

	@include('home.footer')
</body>
</html>
