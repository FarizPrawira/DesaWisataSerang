<!DOCTYPE html>
<html>
<head>
	<title>Serang |	Outbound</title>
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
		<img src="{{URL::to('assets/img/outbound1.jpg')}}">
		<span><h2 class="text-center">Outbound</h2></span>
	</div>
	<div class="container fix-content">
		<div class="row">
			<div class="col-md-offset-1 col-md-4">
				<img src="{{URL::to('assets/img/outbound2.jpg')}}" class="img-responsive">
			</div>
			<div class="col-md-6">
				<p>
				Outbound merupakan sebuah wahana permainan sekaligus tantangan untuk melatih adrenalin anda. 
				Salah satu tempat di Purbalingga yang menyediakan wahana outbond ini terletak di Serang, Kecamatan Karangreja. 
				Desa serang tepatnya di rest area menyediakan berbagai wahana outbound yang menarik untuk dikunjungi, 
				selain itu pengunjung juga bisa menikmati sejuknya udara desa serang karena letaknya di lereng gunung Slamet. 
				Wahana Outbound ini juga dikelola oleh para pemuda yang tergabung dalam SAD (Serang Adventure). 
				Beberapa wahana Outbound yang disuguhkan di Rest Area antara lain flying fox, high rope, Atv, wisata berkuda dan lain-lain.</p>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-offset-1 col-md-6">
				<p>Ada beberapa outbound yang disuguhkan memiliki keunikan tersendiri. Misalnya saja flying fox, wahana ini memiliki panjang 137 meter. 
				Menurut beberapa orang, flying fox di Rest Area Desa Serang merupakan flying fox terpanjang di Purbalingga. 
				Jika anda tertarik untuk mencoba wahana ini silahkan untuk datang ke Rest Area Desa Serang dan coba semua wahana outbound yang ada disini. 
				Dijamin tidak akan menyesal dan pasti akan ketagihan untuk mencoba terus wahana outbound di Desa Serang.</p>
			</div>
			<div class="col-md-4">
				<img src="{{URL::to('assets/img/outbound3.jpg')}}" class="img-responsive">
			</div>
		</div>
	</div>	
	<!-- CONTENT END -->
	@include('home.footer')
</body>
</html>