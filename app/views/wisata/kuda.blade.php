<!DOCTYPE html>
<html>
<head>
	<title>Serang | Kuda Tunggang</title>
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
		<img src="{{URL::to('assets/img/kuda1.jpg')}}">
		<span><h2 class="text-center">Kuda Tunggang</h2></span>
	</div>
	<div class="container fix-content">
		<div class="row">
			<div class="col-md-offset-1 col-md-4">
				<img src="{{URL::to('assets/img/kuda2.jpg')}}" class="img-responsive">
			</div>
			<div class="col-md-6">
				<p align="justify">
					Banyak sekali wahana yang ataupun objek bermain yang terdapat di desa serang, purbalingga. 
					Salah satu wahana yang terdapat di rest area lembah asri desa serang adalah kuda tunggang. 
					Kuda tunggang merupakan kuda yang khusus untuk ditunggangi. Kuda tunggang ini telah lama menjadi wahana di rest area, 
					selain di rest area kuda tunggang ini juga terdapat di hutan pinus dimana terdapat wahana lainnya yaitu giant swing. 
					Dengan kuda tunggang ini kita bisa merasakan sensasi berkuda bagi yang belum pernah menunggang kuda. 
					Bagi yang takut kuda maupun takut terjatuh dari kuda jangan khawatir sebab sang pawang siap menjaga keselamatan anda. 
					Selain merasakan sensasi berkuda juga anda bisa melihat pemandangan kebun strawberry yang membentang luas. 
					Dan juga pemandangan pohon pinus di sekitar rest area.
				</p>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-offset-1 col-md-6">
				<p align="justify">
					Kuda tunggang ini biasanya beroperasi pada hari libur terutama libur sekolah  dan libur hari raya idul fitri ataupun libur panjang lainnya.  
					Wahana ini merupakan wahana yang banyak diminati oleh anak-anak. Cukup dengan membayar Rp 15.000 rupiah anda sudah bisa berkeliling menggunakan kuda tunggang ini. 
					Informasi tentang Kuda tunggang ini dapat diperoleh di Tourist Information Center yang berada di jalan Raya Serang bertempat di desa Serang Purbalingga 
					atau dapat mengunjungi website desa Serang serangpurbalingga.desa.id.
				</p>
			</div>
			<div class="col-md-4">
				<img src="{{URL::to('assets/img/kuda3.jpg')}}" class="img-responsive">
			</div>
		</div>
	</div>	
	<!-- CONTENT END -->
	
	@include('home.footer')
</body>
</html>
