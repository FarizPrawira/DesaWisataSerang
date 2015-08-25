<!DOCTYPE html>
<html>
<head>
	<title>Serang | Artikel</title>
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
	<div class="container fix-content timeline">
		<div class="row">
			<?php 
			foreach ($results['content'] as $post): ?>
			<div class="col-md-3">
				<a href="{{URL::to('content/'.$post->id)}}" class="timeline-item shadow-bot text-center">
					<h5>{{$post->title}}</h5>
					<p class="smaller">{{$post->updated_at}}</p>
					<?php foreach ($results['photo'] as $photo):
					if ($photo->content_id == $post->id){ ?>
					<img src="{{URL::to($photo->path)}}" class="related-image img-rounded">
					<?php break; }
					endforeach ?>
					<p class="smaller">{{truncDescription($post->description)}}</p>
				</a>
			</div>
			<?php 
			endforeach ?>
			<div class="col-md-3 loadmore-artikel"></div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="row text-center">
		<button id="loadArtikel">
			<p class="text-center">Sebelumnya ↓</p>
		</button>
	</div>
	<!-- CONTENT END-->

	@include('home.footer')

	<?php 
	function truncDescription($description) {
		if (strlen($description) > 140) {
			$description = substr($description, 0, 130);
			$description.="...";
		}
		return $description;
	}
	?>
	<script>
	var artikel = 8;
	var description = "";
	var photoAr = "";
	// AJAX load artikel
	$('#loadArtikel').click(function(event){
		$.ajax({
			url: '{{URL::to("loadArtikel")}}',
			method: 'GET',
			dataType: 'json'
		})
		.done(function(response){
			for(var loop = 0; loop < 5; loop++) {
				var i = 0;
				if (response.artikel.length <= artikel) {
					$('#loadArtikel').html('');
				};
				if (response.artikel[artikel] !== undefined) {
					while (response.artikel[artikel].id != response.photo[i].content_id) {
						i++;
					}
					photoAr = response.photo[i].path;
					description = response.artikel[artikel].description;
					if (description.length > 190) {
						description = description.substr(0, 280);
						description = description.concat("...");
					};
					$('.loadmore-artikel').append('\
						<a href="'+response.artikel[artikel].id+'" class="timeline-item shadow-bot text-center">\
						<h5>'+response.artikel[artikel].title+'</h5>\
						<p class="smaller">'+response.artikel[artikel].updated_at+'</p>\
						<img src=http://localhost/desaserang/public/'+photoAr+' class="img-rounded">\
						<p class="smaller">'+description+'</p>\
						</a>\
						');
				};
				artikel++;
			}
		}) .fail(function(){
			alert("error");
		});
	});
	// <?php if(Session::has('script')) echo Session::get('script');?>
	</script>
</body>
</html>