<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Desa Wisata Serang</title>

	<link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<?php
	if(!Auth::check()){ ?>
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Login</h4>
			</div>
			<div class="modal-body">
				<form action="{{URL::to('user/login')}}" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="username" id="username" placeholder="Username">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" id="password" placeholder="Password">
					</div>
					<a href="#">Lupa password?</a>
					<div class="checkbox">
						<label>
							<input type="checkbox"> Remember me
						</label>
					</div>
					<div class="text-right">
						<button type="submit" class="btn btn-default">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php }	
	else{
		echo "<a href=".URL::to('dashboard').">Dashboard</a>";
	} ?>

	<div id="notification" class="notification">
		<?php if (Session::has('error')): ?>
		<div class="col-xs-offset-3 col-xs-6 alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			{{Session::get('error')}}
		</div>
		<div class="clearfix"></div>
		<?php endif; ?>
	</div>

	<a href="{{URL::to('content/kegiatan')}}">Kegiatan</a>
	<a href="{{URL::to('content/artikel')}}">Artikel</a>

	@foreach ($results["content"] as $content)
	<table>
		<tr>
			<?php 
			$tanggal = strtotime($content->created_at);
			$tanggal = date('d F Y G:i', $tanggal);
			echo "<br>".$tanggal;
			?>	
		</tr>
		<tr>
			<td>Title</td>
			<td>:</td>
			<td><a href="{{URL::to('content/'.$content->id)}}">{{$content->title}}</a></td>
		</tr>
		<tr>
			<td>Isi</td>
			<td>:</td>
			<td>{{nl2br($content->description)}}</td>
		</tr>
		<tr>
			<td>Tipe</td>
			<td>:</td>
			<td>{{$content->type}}</td>
		</tr>
		@foreach ($results["photo"] as $photo)
		<?php if($photo->content_id == $content->id){
			echo "<img class='media-object' src=".$photo->path." alt='img'>";
		} ?>
		@endforeach	
	</table>
	@endforeach

	<script src="vendor/jquery/dist/jquery.min.js"></script>
	<script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>