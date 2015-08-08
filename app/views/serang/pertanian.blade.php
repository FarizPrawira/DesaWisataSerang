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
</head>
<body>
	@include('home.header')

	<!-- CONTENT -->
	<div class="container fix-content">
		<div class="hasil-serang">
			<ol class="breadcrumb">
				<?php foreach ($results["tahun"] as $tahun) {
					if ($tahun->tahun == $pertanian->tahun) { $active = "active";	}
					else{ $active = "";	}
					echo"<li class='".$active."'><a href=".URL::to('serang/pertanian/'.$tahun->tahun).">".$tahun->tahun."</a></li>";	
				} ?>
			</ol>
			<table class="table table-bordered">
				<tbody class="text-center">
					<tr>
						<th class="text-center">Komoditas</th>
						<th class="text-center">Lahan (Ha)</th>
						<th class="text-center">Hasil (Ton/Ha)</th>
					</tr>
					<tr>
						<td><b>Jagung</b></td>
						<td>{{round($pertanian->jagung_luas,2)}}</td>
						<td>{{round($pertanian->jagung_hasil,2)}}</td>
					</tr>
					<tr>
						<td><b>Ubi Kayu</b></td>
						<td>{{round($pertanian->ubi_kayu_luas,2)}}</td>
						<td>{{round($pertanian->ubi_kayu_hasil,2)}}</td>
					</tr>
					<tr>
						<td><b>Ubi Jalar</b></td>
						<td>{{round($pertanian->ubi_jalar_luas,2)}}</td>
						<td>{{round($pertanian->ubi_jalar_hasil,2)}}</td>
					</tr>
					<tr>
						<td><b>Cabai</b></td>
						<td>{{round($pertanian->cabai_luas,2)}}</td>
						<td>{{round($pertanian->cabai_hasil,2)}}</td>
					</tr>
					<tr>
						<td><b>Tomat</b></td>
						<td>{{round($pertanian->tomat_luas,2)}}</td>
						<td>{{round($pertanian->tomat_hasil,2)}}</td>
					</tr>
					<tr>
						<td><b>Sawi</b></td>
						<td>{{round($pertanian->sawi_luas,2)}}</td>
						<td>{{round($pertanian->sawi_hasil,2)}}</td>
					</tr>
					<tr>
						<td><b>Kentang</b></td>
						<td>{{round($pertanian->kentang_luas,2)}}</td>
						<td>{{round($pertanian->kentang_hasil,2)}}</td>
					</tr>
					<tr>
						<td><b>Kubis</b></td>
						<td>{{round($pertanian->kubis_luas,2)}}</td>
						<td>{{round($pertanian->kubis_hasil,2)}}</td>
					</tr>
					<tr>
						<td><b>Buncis</b></td>
						<td>{{round($pertanian->buncis_luas,2)}}</td>
						<td>{{round($pertanian->buncis_hasil,2)}}</td>
					</tr>
					<tr>
						<td><b>Terong</b></td>
						<td>{{round($pertanian->terong_luas,2)}}</td>
						<td>{{round($pertanian->terong_hasil,2)}}</td>
					</tr>
					<tr>
						<td><b>Wortel</b></td>
						<td>{{round($pertanian->wortel_luas,2)}}</td>
						<td>{{round($pertanian->wortel_hasil,2)}}</td>
					</tr>
					<tr>
						<td><b>Padi Gogo</b></td>
						<td>{{round($pertanian->padi_luas,2)}}</td>
						<td>{{round($pertanian->padi_hasil,2)}}</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="row">
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="img/sea.jpg">
					<div class="caption">
						<h4>Jagung</h4>
						<p>Stroberi merupakan salah satu komoditas unggulan yang ada di desa serang dan kabupaten Pubalingga pada umumnya, stroberi dapat tumbuh baik di dataran tinggi yang mempunyai ketinggian anatara 1.000 s/d 1.300 mdpl. tingginya harga buah stroberi membuat para petani banyak yang beralih menanam tanaman ini</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="img/sea.jpg">
					<div class="caption">
						<h4>Ubi Kayu</h4>
						<p>Stroberi merupakan salah satu komoditas unggulan yang ada di desa serang dan kabupaten Pubalingga pada umumnya, stroberi dapat tumbuh baik di dataran tinggi yang mempunyai ketinggian anatara 1.000 s/d 1.300 mdpl. tingginya harga buah stroberi membuat para petani banyak yang beralih menanam tanaman ini</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="img/sea.jpg">
					<div class="caption">
						<h4>Ubi Jalar</h4>
						<p>Stroberi merupakan salah satu komoditas unggulan yang ada di desa serang dan kabupaten Pubalingga pada umumnya, stroberi dapat tumbuh baik di dataran tinggi yang mempunyai ketinggian anatara 1.000 s/d 1.300 mdpl. tingginya harga buah stroberi membuat para petani banyak yang beralih menanam tanaman ini</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="img/sea.jpg">
					<div class="caption">
						<h4>Cabai</h4>
						<p>Stroberi merupakan salah satu komoditas unggulan yang ada di desa serang dan kabupaten Pubalingga pada umumnya, stroberi dapat tumbuh baik di dataran tinggi yang mempunyai ketinggian anatara 1.000 s/d 1.300 mdpl. tingginya harga buah stroberi membuat para petani banyak yang beralih menanam tanaman ini</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="img/sea.jpg">
					<div class="caption">
						<h4>Tomat</h4>
						<p>Stroberi merupakan salah satu komoditas unggulan yang ada di desa serang dan kabupaten Pubalingga pada umumnya, stroberi dapat tumbuh baik di dataran tinggi yang mempunyai ketinggian anatara 1.000 s/d 1.300 mdpl. tingginya harga buah stroberi membuat para petani banyak yang beralih menanam tanaman ini</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="img/sea.jpg">
					<div class="caption">
						<h4>Sawi</h4>
						<p>Stroberi merupakan salah satu komoditas unggulan yang ada di desa serang dan kabupaten Pubalingga pada umumnya, stroberi dapat tumbuh baik di dataran tinggi yang mempunyai ketinggian anatara 1.000 s/d 1.300 mdpl. tingginya harga buah stroberi membuat para petani banyak yang beralih menanam tanaman ini</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="img/sea.jpg">
					<div class="caption">
						<h4>Kentang</h4>
						<p>Stroberi merupakan salah satu komoditas unggulan yang ada di desa serang dan kabupaten Pubalingga pada umumnya, stroberi dapat tumbuh baik di dataran tinggi yang mempunyai ketinggian anatara 1.000 s/d 1.300 mdpl. tingginya harga buah stroberi membuat para petani banyak yang beralih menanam tanaman ini</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="{{URL::to('assets/img/pertanian/kubis.jpg')}}">
					<div class="caption">
						<h4>Kubis</h4>
						<p>Stroberi merupakan salah satu komoditas unggulan yang ada di desa serang dan kabupaten Pubalingga pada umumnya, stroberi dapat tumbuh baik di dataran tinggi yang mempunyai ketinggian anatara 1.000 s/d 1.300 mdpl. tingginya harga buah stroberi membuat para petani banyak yang beralih menanam tanaman ini</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="img/sea.jpg">
					<div class="caption">
						<h4>Buncis</h4>
						<p>Stroberi merupakan salah satu komoditas unggulan yang ada di desa serang dan kabupaten Pubalingga pada umumnya, stroberi dapat tumbuh baik di dataran tinggi yang mempunyai ketinggian anatara 1.000 s/d 1.300 mdpl. tingginya harga buah stroberi membuat para petani banyak yang beralih menanam tanaman ini</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="img/sea.jpg">
					<div class="caption">
						<h4>Terong</h4>
						<p>Stroberi merupakan salah satu komoditas unggulan yang ada di desa serang dan kabupaten Pubalingga pada umumnya, stroberi dapat tumbuh baik di dataran tinggi yang mempunyai ketinggian anatara 1.000 s/d 1.300 mdpl. tingginya harga buah stroberi membuat para petani banyak yang beralih menanam tanaman ini</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="img/sea.jpg">
					<div class="caption">
						<h4>Wortel</h4>
						<p>Stroberi merupakan salah satu komoditas unggulan yang ada di desa serang dan kabupaten Pubalingga pada umumnya, stroberi dapat tumbuh baik di dataran tinggi yang mempunyai ketinggian anatara 1.000 s/d 1.300 mdpl. tingginya harga buah stroberi membuat para petani banyak yang beralih menanam tanaman ini</p>
						<!-- <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p> -->
					</div>
				</div>
			</div>
			<div class="col-xs-18 col-sm-6 col-md-3">
				<div class="thumbnail">
					<img src="img/sea.jpg">
					<div class="caption">
						<h4>Padi Gogo</h4>
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
