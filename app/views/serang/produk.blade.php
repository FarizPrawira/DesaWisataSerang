<!DOCTYPE html>
<html>
<head>
	<title>Serang |	Produk Desa</title>
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
		<img src="{{URL::to('assets/img/produk/produk.jpg')}}">
		<span><h2 class="text-center">Produk Desa</h2></span>
	</div>
	<div class="container fix-content">
		<div class="col-md-offset-1 col-md-10">	
			<p>Buah Strawberry merupakan salah satu buah yang digemari oleh banyak orang. Rasanya enak, baunya harum, dan bentuknya sangat menarik dipandang, Buah stawberry tidak hanya bisa dimakan begitu saja, melainkan dapat dibuat menjadi produk olahan yang lezat dan bernilai ekonomis, misalnya seperti yang dilakukan oleh warga di kaki gunung Slamet tepatnya di Desa Serang, dimana komoditas utamanya adalah buah strawberry. Mereka menyulap buah strawberry menjadi produk olahan yang lezat dan enak. Yaitu getuk strawberry, keripik daun strawberry dan sirup strawberry.</p>
		</div>
		<div class="clearfix"></div>
		<h2 class="col-md-offset-1 text-center">Gethuk Strawberry</h2>
		<div class="row">
			<div class="col-md-offset-1 col-md-4">
				<img src="{{URL::to('assets/img/produk/getukstroberi.jpg')}}" class="img-responsive">
			</div>
			<div class="col-md-6">
				<p>Gethuk adalah makanan tradisional yang terbuat dari olahan singkong, namun oleh warga Serang gethuk dibuat inovasi menjadi gethuk strawberry. Bahan baku utama gethuk strawberry tetap menggunakan singkong yang dikukus dan ditumbuk halus seperti membuat getuk biasa, lalu dicampur dengan strawberry yang sudah dihaluskan sehingga membentuk adonan. Adonan tadi ditumbuk lagi hingga tercampur merata. Selanjutnya adonan di bentuk bulat-bulat kecil lalu di goreng dengan minyak panas. Rasa gurih dari singkong dan segar dari strawberry sangat nikmat di lidah ketika dimakan saat panas sambil menikmati indahnya pemandangan Serang. Keluarga ibu Jarman, salah satu penjual getuk strawberry di Desa Serang, memulai usaha getuknya sudah cukup lama dan banyak mendapat pesanan dari luar kota.</p>
			</div>
		</div>
		<br>
		<h2 class="col-md-offset-1 text-center">Keripik Daun Strawberry</h2>
		<div class="row">
			<div class="col-md-offset-1 col-md-6">
				<p>Siapa sangka daun strawberry bisa di olah menjadi makanan lezat? Selama ini yang kita tahu dari tanaman strawberry hanya buahnya lah yang bisa di konsumsi, namun berbeda dengan petani strawberry di Desa Serang, mereka membuat keripik dari daun strawberry. Untuk yang pertama kali mendengar memang cukup aneh, tapi siapa sangka bahwa rasanya jauh dari kata aneh. Rasanya yang gurih pas sebagai pendamping makan maupun dimakan langsung begitu saja. Sangat cocok untuk oleh-oleh keluarga di rumah.<p>
			</div>
			<div class="col-md-4">
				<img src="{{URL::to('assets/img/produk/kripikdaunstroberi.jpg')}}" class="img-responsive">
			</div>
		</div>
		<br>
		<h2 class="col-md-offset-1 text-center">Sirup Strawberry</h2>
		<div class="row">
			<div class="col-md-offset-1 col-md-4">
				<img src="{{URL::to('assets/img/produk/sirupstroberi.jpg')}}" class="img-responsive">
			</div>
			<div class="col-md-6">
				<p>Selain kedua makanan tadi, strawberry di Serang juga di buat menjadi minuman, yaitu sirup strawberry. Sirup strawberry ini merupakan produk olahan strawberry khas Desa Serang yang sudah dipasarkan hingga luar kota. Menggunakan bahan-bahan alami yaitu hanya dari sari buah strawberry dan gula pasir, tanpa menggunakan bahan pengawet kimia apapun. Sirup ini tidak bisa tahan terlalu lama, hanya sekitar 3-4 bulan karena hanya menggunakan gula sebagai pengawet alami. Wisatawan bisa membeli sirup strawberry kepada pak Joko, yaitu salah satu petani strawberry yang sekarang masih menekuni usaha sirup strawberry di Desa Serang.</p>
			</div>
		</div>
		<br>
	</div>	
	<!-- CONTENT END -->
	@include('home.footer')
</body>
</html>