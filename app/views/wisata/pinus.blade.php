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
			<div class="col-md-offser-1 col-md-4">
				<img src="{{URL::to('assets/img/pinus2.jpg')}}" class="img-responsive">
			</div>
			<div class="col-md-6">
				<p align="justify">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec massa nec lectus sollicitudin aliquet. Curabitur dignissim, magna quis tincidunt dictum, erat tortor venenatis orci, vel ornare diam elit eget lorem. Suspendisse in ante et dolor ornare ultricies eget eu tortor. Duis sapien tellus, malesuada in consectetur ac, vestibulum eget urna. Suspendisse pretium, lorem in gravida placerat, felis ante congue urna, ultricies mattis ante nunc et mauris. Sed interdum nisi sed laoreet finibus. Vestibulum consequat ante eget convallis fermentum. Vivamus augue mauris, sollicitudin eu ligula cursus, vestibulum tempor orci.
					Fusce sit amet velit volutpat, maximus ipsum in, vestibulum eros. In id laoreet nisi, eu pretium ante. Morbi enim mi, facilisis sit amet eleifend vitae, sagittis a ante. Donec eu tristique nisl, vel consectetur nisl. Vestibulum convallis elementum nisi ac mollis. Mauris at ante sit amet mi egestas tempus maximus vel dolor. Pellentesque nec venenatis lectus. Mauris id sollicitudin ante. Etiam dapibus ipsum blandit urna elementum placerat. Curabitur a commodo ipsum, vitae ullamcorper mauris. Donec vestibulum felis pharetra metus iaculis, nec dapibus libero vestibulum. Duis eu leo pulvinar, condimentum mauris vitae, porttitor ligula.
				</p>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-offser-1  col-md-6">
				<p align="justify">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec massa nec lectus sollicitudin aliquet. Curabitur dignissim, magna quis tincidunt dictum, erat tortor venenatis orci, vel ornare diam elit eget lorem. Suspendisse in ante et dolor ornare ultricies eget eu tortor. Duis sapien tellus, malesuada in consectetur ac, vestibulum eget urna. Suspendisse pretium, lorem in gravida placerat, felis ante congue urna, ultricies mattis ante nunc et mauris. Sed interdum nisi sed laoreet finibus. Vestibulum consequat ante eget convallis fermentum. Vivamus augue mauris, sollicitudin eu ligula cursus, vestibulum tempor orci.
					Fusce sit amet velit volutpat, maximus ipsum in, vestibulum eros. In id laoreet nisi, eu pretium ante. Morbi enim mi, facilisis sit amet eleifend vitae, sagittis a ante. Donec eu tristique nisl, vel consectetur nisl. Vestibulum convallis elementum nisi ac mollis. Mauris at ante sit amet mi egestas tempus maximus vel dolor. Pellentesque nec venenatis lectus. Mauris id sollicitudin ante. Etiam dapibus ipsum blandit urna elementum placerat. Curabitur a commodo ipsum, vitae ullamcorper mauris. Donec vestibulum felis pharetra metus iaculis, nec dapibus libero vestibulum. Duis eu leo pulvinar, condimentum mauris vitae, porttitor ligula.
				</p>
			</div>
			<div class="col-md-4">
				<img src="{{URL::to('assets/img/pinus3.jpg')}}" class="img-responsive">
			</div>
		</div>
	</div>	
	<!-- CONTENT END -->
	
	@include('home.footer')
	</html>
