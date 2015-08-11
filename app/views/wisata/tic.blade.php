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
						<th class="text-center">Jumlah orang (minimal)</th>
						<th class="text-center">Harga</th>
					</tr>
					<tr>
						<td><img src="{{URL::to('assets/img/stroberi1.jpg')}}"></td>
						<td><b>Giant Swing</b></td>
						<td>1</td>
						<td>Rp.25.000,-</td>
					</tr>
					<tr>
						<td><img src="{{URL::to('assets/img/stroberi1.jpg')}}"></td>
						<td><b>ATV</b></td>
						<td>1</td>
						<td>Rp.25.000,-</td>
					</tr>
					<tr>
						<td><img src="{{URL::to('assets/img/stroberi1.jpg')}}"></td>
						<td><b>Flying Fox</b></td>
						<td>1</td>
						<td>Rp.25.000,-</td>
					</tr>
					<tr>
						<td><img src="{{URL::to('assets/img/stroberi1.jpg')}}"></td>
						<td><b>Camping Ground</b></td>
						<td>1</td>
						<td>Rp.25.000,-</td>
					</tr>
					<tr>
						<td><img src="{{URL::to('assets/img/stroberi1.jpg')}}"></td>
						<td><b>Kuda Tunggang</b></td>
						<td>1</td>
						<td>Rp.25.000,-</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<!-- CONTENT END -->

	@include('home.footer')
</body>
</html>