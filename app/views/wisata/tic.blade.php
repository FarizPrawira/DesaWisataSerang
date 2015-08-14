<!DOCTYPE html>
<html>
<head>
	<title>Serang |	Tourist Information Center</title>
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
		<div class="row">
			<h2 class="text-center">Paket Wisata</h2>
			<table class="table table-striped">
				<tbody class="text-center">
					<tr>
						<th></th>
						<th class="text-center">Wisata</th>
						<th class="text-center">Harga</th>
						<th class="text-center">Fasilitas</th>
						<th class="text-center">Keterangan</th>
					</tr>
					<?php foreach ($tics as $tic): ?>	
					<tr>
						<td><img src="{{URL::to('assets/img/stroberi1.jpg')}}"></td>
						<td><b>Agro Kids</b></td>
						<td>Rp.{{$tic->agroBiaya}}</td>
						<td>{{nl2br($tic->agroFasilitas)}}</td>
						<td>{{$tic->agroKet}}</td>
					</tr>
					<tr>
						<td><img src="{{URL::to('assets/img/stroberi1.jpg')}}"></td>
						<td><b>Camping Ground</b></td>
						<td>Rp.{{$tic->campBiaya}}</td>
						<td>{{nl2br($tic->campFasilitas)}}</td>
						<td>{{$tic->campKet}}</td>
					</tr>
					<tr>
						<td><img src="{{URL::to('assets/img/stroberi1.jpg')}}"></td>
						<td><b>HomeStay Pelajar </b></td>
						<td>Rp.{{$tic->homeBiaya}}</td>
						<td>{{nl2br($tic->homeFasilitas)}}</td>
						<td>{{$tic->homeKet}}</td>
					</tr>
					<tr>
						<td><img src="{{URL::to('assets/img/stroberi1.jpg')}}"></td>
						<td><b>Tracking</b></td>
						<td>Rp.{{$tic->trackBiaya}}</td>
						<td>{{nl2br($tic->trackFasilitas)}}</td>
						<td>{{$tic->trackKet}}</td>
					</tr>
					<tr>
						<td><img src="{{URL::to('assets/img/stroberi1.jpg')}}"></td>
						<td><b>Outbound</b></td>
						<td>Rp.{{$tic->outBiaya}}</td>
						<td>{{nl2br($tic->outFasilitas)}}</td>
						<td>{{$tic->outKet}}</td>
					</tr>
					<tr>
						<td><img src="{{URL::to('assets/img/stroberi1.jpg')}}"></td>
						<td><b>Paint Ball</b></td>
						<td>Rp.{{$tic->paintBiaya}}</td>
						<td>{{nl2br($tic->paintFasilitas)}}</td>
						<td>{{$tic->paintKet}}</td>
					</tr>
					<tr>
						<td><img src="{{URL::to('assets/img/stroberi1.jpg')}}"></td>
						<td><b>Rapeling</b></td>
						<td>Rp.{{$tic->rapelBiaya}}</td>
						<td>{{nl2br($tic->rapelFasilitas)}}</td>
						<td>{{$tic->rapelKet}}</td>
					</tr>
					<tr>
						<td><img src="{{URL::to('assets/img/stroberi1.jpg')}}"></td>
						<td><b>Family Gathering</b></td>
						<td>Rp.{{$tic->familyBiaya}}</td>
						<td>{{nl2br($tic->familyFasilitas)}}</td>
						<td>{{$tic->familyKet}}</td>
					</tr>
					<tr>
						<td><img src="{{URL::to('assets/img/stroberi1.jpg')}}"></td>
						<td><b>Pendakian Gn Selamet</b></td>
						<td>Rp.{{$tic->pendakianBiaya}}</td>
						<td>{{nl2br($tic->pendakianFasilitas)}}</td>
						<td>{{$tic->pendakianKet}}</td>
					</tr>
					<?php 
					endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
	<!-- CONTENT END -->

	@include('home.footer')
</body>
</html>