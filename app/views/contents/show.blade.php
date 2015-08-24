<!DOCTYPE html>
<html>
<head>
	<title>Serang | {{$content->title}}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- STYLE -->
	<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,700italic,900,900italic' rel='stylesheet' type='text/css'> -->
	<link rel="stylesheet" href="{{URL::to('vendor/lightbox/dist/css/lightbox.css')}}">
	<link rel="stylesheet" href="{{URL::to('vendor/font-awesome/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('vendor/bootstrap/dist/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('assets/css/site.css')}}"/>
    <link rel="icon" type="image/png" href="{{URL::to('assets/img/favicon.png')}}">
</head>
<body>
	@include('home.header')

	<!-- CONTENT -->
	<!-- Content Header -->
	<!-- List Image -->

	<!-- Description Artikel -->
	<div class="container fix-content">
		<div class="col-md-5">
            <h3 class="text-left bigger">{{$content->title}}</h3>
			<?php
			$tanggal = strtotime($content->created_at);
			$tanggal = date('d F Y G:i', $tanggal);
			echo "<p class='smaller'>Ditampilkan pada ".$tanggal."</p><br/>";
			?>
			<p><b>{{nl2br($content->description)}}</b></p>
            <?php if ($content->type == "kegiatan"): ?>			
            <div id="dateKeg">
                <br/>
                <p>Akan dilaksanakan pada:</p>
                <h4><i class="glyphicon glyphicon-calendar"></i> {{$content->dateStart}} — {{$content->dateEnd}}</h4>
            </div>
            <br/>
            Share
            <div id="share-buttons">
                <!-- Facebook -->
                <a href="http://www.facebook.com/sharer.php?u={{Request::url()}}" target="_blank">
                    <i class="fa fa-facebook fa-2x"></i>
                </a>
                <!-- Twitter -->
                <a href="https://twitter.com/share?url={{Request::url()}}&amp;name=Desa Serang&amp;hashtags=desaserang" target="_blank">
                    <i class="fa fa-twitter fa-2x"></i>
                </a>
                <!-- Google+ -->
                <a href="https://plus.google.com/share?url={{Request::url()}}" target="_blank">
                    <i class="fa fa-google-plus fa-2x"></i>
                </a>
            </div>
        </div>
        <div class="col-md-7">
            <ul class="list-unstyled list-inline">
                <?php foreach ($content->photos as $photo) { ?>
                <img src="{{URL::to($photo->path)}}" class="img-responsive img-rounded">
                <?php break; } ?>
            </ul>
        </div>
    </div>
    <?php 
    endif ?>
    <div class="clearfix"></div>
    
    
	<!-- Artikel Terkait -->
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