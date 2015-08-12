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
		<div class="hasil-serang">
			<ol class="breadcrumb">
				<?php foreach ($results["tahun"] as $tahun) {
					if ($tahun->tahun == $peternakan->tahun) { $active = "active";	}
					else{ $active = "";	}
					echo"<li class='".$active."'><a href=".URL::to('serang/peternakan/'.$tahun->tahun).">".$tahun->tahun."</a></li>";	
				} ?>
			</ol>
			<table class="table table-bordered">
				<tbody class="text-center">
					<tr>
						<th class="text-center">Jenis Ternak</th>
						<th class="text-center">Jumlah Ternak (Ekor)</th>
					</tr>
					<tr>
						<td><b>Sapi</b></td>
						<td>{{$peternakan->sapi}}</td>
					</tr>
					<tr>
						<td><b>Kambing</b></td>
						<td>{{$peternakan->kambing}}</td>
					</tr>
					<tr>
						<td><b>Ayam</b></td>
						<td>{{$peternakan->ayam}}</td>
					</tr>
					<tr>
						<td><b>Kuda</b></td>
						<td>{{$peternakan->kuda}}</td>
					</tr>
				</tbody>
			</table>
			<table class="table table-bordered">
				<tbody class="text-center">
					<tr>
						<th class="text-center">Jenis Produk Ternak</th>
						<th class="text-center">Jumlah Produk Ternak</th>
					</tr>
					<tr>
						<td><b>Daging</b></td>
						<td>{{$peternakan->daging}}</td>
					</tr>
					<tr>
						<td><b>Susu</b></td>
						<td>{{$peternakan->susu}} ltr/th</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="row">
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/peternakan/sapi.jpg')}}">
					<div class="caption">
						<h4>Sapi</h4>
						<p>Stroberi merupakan salah satu komoditas unggulan yang ada di desa serang dan kabupaten Pubalingga pada umumnya, stroberi dapat tumbuh baik di dataran tinggi yang mempunyai ketinggian anatara 1.000 s/d 1.300 mdpl. tingginya harga buah stroberi membuat para petani banyak yang beralih menanam tanaman ini</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/peternakan/kambing.jpg')}}">
					<div class="caption">
						<h4>Kambing</h4>
						<p>Stroberi merupakan salah satu komoditas unggulan yang ada di desa serang dan kabupaten Pubalingga pada umumnya, stroberi dapat tumbuh baik di dataran tinggi yang mempunyai ketinggian anatara 1.000 s/d 1.300 mdpl. tingginya harga buah stroberi membuat para petani banyak yang beralih menanam tanaman ini</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/peternakan/ayam.jpg')}}">
					<div class="caption">
						<h4>Ayam</h4>
						<p>Stroberi merupakan salah satu komoditas unggulan yang ada di desa serang dan kabupaten Pubalingga pada umumnya, stroberi dapat tumbuh baik di dataran tinggi yang mempunyai ketinggian anatara 1.000 s/d 1.300 mdpl. tingginya harga buah stroberi membuat para petani banyak yang beralih menanam tanaman ini</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/peternakan/kuda.jpg')}}">
					<div class="caption">
						<h4>Kuda</h4>
						<p>Stroberi merupakan salah satu komoditas unggulan yang ada di desa serang dan kabupaten Pubalingga pada umumnya, stroberi dapat tumbuh baik di dataran tinggi yang mempunyai ketinggian anatara 1.000 s/d 1.300 mdpl. tingginya harga buah stroberi membuat para petani banyak yang beralih menanam tanaman ini</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/peternakan/susu.jpg')}}">
					<div class="caption">
						<h4>Susu</h4>
						<p>Stroberi merupakan salah satu komoditas unggulan yang ada di desa serang dan kabupaten Pubalingga pada umumnya, stroberi dapat tumbuh baik di dataran tinggi yang mempunyai ketinggian anatara 1.000 s/d 1.300 mdpl. tingginya harga buah stroberi membuat para petani banyak yang beralih menanam tanaman ini</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/peternakan/daging.jpg')}}">
					<div class="caption">
						<h4>Daging</h4>
						<p>Stroberi merupakan salah satu komoditas unggulan yang ada di desa serang dan kabupaten Pubalingga pada umumnya, stroberi dapat tumbuh baik di dataran tinggi yang mempunyai ketinggian anatara 1.000 s/d 1.300 mdpl. tingginya harga buah stroberi membuat para petani banyak yang beralih menanam tanaman ini</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
		</div><!-- End row -->
	</div>
	<!-- CONTENT END -->

	@include('home.footer')
</body>
</html>
