<!DOCTYPE html>
<html>
<head>
	<title>Serang | Kegiatan</title>
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
	<div class="container main-container">
		<div class="row">
			<div class="col-md-2 sidebar-serang">
				<ul class="list-unstyled">
					<li id="Blomba" class="active">Lomba <span>({{Content::where('tag','lomba')->count();}})</span></li>
					<li id="Bacara">Acara <span>({{Content::where('tag','acara')->count();}})</span></li>
					<li id="Bsosial">Sosialisasi <span>({{Content::where('tag','sosial')->count();}})</span></li>
				</ul>
			</div>

			<div class="col-md-10">
				<?php foreach ($results['tag'] as $tag): ?>
				<div class="panel panel-default" id="C{{$tag->tag}}">
					<div class="panel-heading">
						Kegiatan <b>{{$tag->tag}}</b>
					</div>
					<div class="panel-body">
						<table class="table table-striped">
							<tr>
								<th class="text-center">Judul</th>
								<th class="text-center" id="desc">Deskripsi</th>
								<th class="text-center">CP</th>
								<th class="text-center">Lokasi</th>
								<th class="text-center">Tanggal</th>
							</tr>
							<?php foreach ($results['content'] as $kegiatan): 
							if ($tag->tag == $kegiatan->tag) { ?>
							<tr>
								<td class="text-center"><a href="{{URL::to('content/'.$kegiatan->id)}}">{{$kegiatan->title}}</a></td>
								<td class="text-center">{{truncDescription($kegiatan->description)}}</td>
								<td class="text-center">{{$kegiatan->cp}}</td>
								<td class="text-center">{{$kegiatan->lokasi}}</td>
								<td class="text-center">{{$kegiatan->dateStart}} <br>sampai<br> {{$kegiatan->dateEnd}}</td>
							</tr>
							<?php }
							endforeach ?>
						</table>
					</div>
				</div>
				<?php 
				endforeach ?>
			</div>
		</div>
	</div>
	<!-- CONTENT END-->
	@include('home.footer')

	<?php 
	function truncDescription($description) {
		if (strlen($description) > 120) {
			$description = substr($description, 0, 100);
			$description.="...";
		}
		return $description;
	}
	?>
</body>
</html>