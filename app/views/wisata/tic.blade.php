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
    <link rel="icon" type="image/png" href="{{URL::to('assets/img/favicon.png')}}">
</head>
<body>
	@include('home.header')
	
	<!-- CONTENT -->
	<div class="container fix-content">
		<div class="row">
			<h2 class="text-center">Paket Wisata</h2>
			<table class="table table-striped">
				<tbody class="text-left">
					<tr>
						<th>Wisata</th>
						<th class="text-left"></th>
						<th class="text-left">Harga</th>
						<th class="text-left">Fasilitas</th>
						<th class="text-left">Keterangan</th>
					</tr>
					<?php foreach ($tics as $tic): ?>	
					<tr>
						<td class="text-right"><img src="{{URL::to('assets/img/facebook/agrokids.jpg')}}"></td>
						<td class="text-left"><b>Agro Kids</b></td>
						<td class="text-left">Rp.{{$tic->agroBiaya}}</td>
						<td class="text-left">{{nl2br($tic->agroFasilitas)}}</td>
						<td class="text-left">{{$tic->agroKet}}</td>
					</tr>
					<tr>
						<td class="text-right"><img src="{{URL::to('assets/img/facebook/campingground.jpg')}}"></td>
						<td class="text-left"><b>Camping Ground</b></td>
						<td class="text-left">Rp.{{$tic->campBiaya}}</td>
						<td class="text-left">{{nl2br($tic->campFasilitas)}}</td>
						<td class="text-left">{{$tic->campKet}}</td>
					</tr>
					<tr>
						<td class="text-right"><img src="{{URL::to('assets/img/facebook/homestaypelajar.jpg')}}"></td>
						<td class="text-left"><b>HomeStay Pelajar </b></td>
						<td class="text-left">Rp.{{$tic->homeBiaya}}</td>
						<td class="text-left">{{nl2br($tic->homeFasilitas)}}</td>
						<td class="text-left">{{$tic->homeKet}}</td>
					</tr>
					<tr>
						<td class="text-right"><img src="{{URL::to('assets/img/facebook/tracking.jpg')}}"></td>
						<td class="text-left"><b>Tracking</b></td>
						<td class="text-left">Rp.{{$tic->trackBiaya}}</td>
						<td class="text-left">{{nl2br($tic->trackFasilitas)}}</td>
						<td class="text-left">{{$tic->trackKet}}</td>
					</tr>
					<tr>
						<td class="text-right"><img src="{{URL::to('assets/img/facebook/outbound.jpg')}}"></td>
						<td class="text-left"><b>Outbound</b></td>
						<td class="text-left">Rp.{{$tic->outBiaya}}</td>
						<td class="text-left">{{nl2br($tic->outFasilitas)}}</td>
						<td class="text-left">{{$tic->outKet}}</td>
					</tr>
					<tr>
						<td class="text-right"><img src="{{URL::to('assets/img/facebook/paintball.jpg')}}"></td>
						<td class="text-left"><b>Paint Ball</b></td>
						<td class="text-left">Rp.{{$tic->paintBiaya}}</td>
						<td class="text-left">{{nl2br($tic->paintFasilitas)}}</td>
						<td class="text-left">{{$tic->paintKet}}</td>
					</tr>
					<tr>
						<td class="text-right"><img src="{{URL::to('assets/img/facebook/rapeling.jpg')}}"></td>
						<td class="text-left"><b>Rapeling</b></td>
						<td class="text-left">Rp.{{$tic->rapelBiaya}}</td>
						<td class="text-left">{{nl2br($tic->rapelFasilitas)}}</td>
						<td class="text-left">{{$tic->rapelKet}}</td>
					</tr>
					<tr>
						<td class="text-right"><img src="{{URL::to('assets/img/facebook/familygath.jpg')}}"></td>
						<td class="text-left"><b>Family Gathering</b></td>
						<td class="text-left">Rp.{{$tic->familyBiaya}}</td>
						<td class="text-left">{{nl2br($tic->familyFasilitas)}}</td>
						<td class="text-left">{{$tic->familyKet}}</td>
					</tr>
					<tr>
						<td class="text-right"><img src="{{URL::to('assets/img/facebook/pendakian.jpg')}}"></td>
						<td class="text-left"><b>Pendakian Gn Selamet</b></td>
						<td class="text-left">Rp.{{$tic->pendakianBiaya}}</td>
						<td class="text-left">{{nl2br($tic->pendakianFasilitas)}}</td>
						<td class="text-left">{{$tic->pendakianKet}}</td>
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