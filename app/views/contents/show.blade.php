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
  <!--CONTENT ARTIKEL -->
  <?php if($content->type == "artikel"): ?>
  <div class="content-header">
    <?php foreach ($content->photos as $photo) { ?>
    <img src="{{URL::to($photo->path)}}">
    <?php break; } ?>
    <span><h2 class="text-center">{{$content->title}}</h2></span>
  </div>
  <div class="container-fluid image-list">
    <?php foreach ($content->photos as $photo) { ?>
    <a class="list" data-lightbox="image-list" href="{{URL::to($photo->path)}}">
      <img src="{{URL::to($photo->path)}}" class="img-responsive">
    </a>
    <?php } ?>
  </div>
  <div class="container fix-content">
    <div class="container-fluid">
      <div class="col-md-3 text-center" id="share-buttons">
        <a href="http://www.facebook.com/sharer.php?u={{Request::url()}}" target="_blank">
          <i class="fa fa-facebook fa-2x"></i>
        </a>
        <a href="https://twitter.com/share?url={{Request::url()}}&amp;name=Desa Serang&amp;hashtags=desaserang" target="_blank">
          <i class="fa fa-twitter fa-2x"></i>
        </a>
        <a href="https://plus.google.com/share?url={{Request::url()}}" target="_blank">
          <i class="fa fa-google-plus fa-2x"></i>
        </a>
      </div>
      <div class="col-md-8 content-description">
        <?php
        $tanggal = strtotime($content->created_at);
        $tanggal = date('d F Y G:i', $tanggal);
        echo "<p class='smaller'>Ditampilkan pada ".$tanggal."</p><br/>";
        ?>
        {{nl2br($content->description)}}
      </div>
    </div>
  </div>
  <!-- Artikel Terkait -->
  <div class="container timeline">
    <div class="row">
      <h2>{{ucfirst($content->type)}} Terkait</h2>
      <?php foreach ($results['related-post'] as $post): ?>
      <div class="col-md-3">
        <a href="{{URL::to('content/'.$post->id)}}" class="timeline-item shadow-bot text-center">
          <!-- <div class="timeline-item"> -->
          <h4>{{$post->title}}</h4>
          <?php foreach ($results['related-photo'] as $photo):
          if($photo->content_id == $post->id){ ?>
          <img src="{{URL::to($photo->path)}}" class="img-rounded">
          <?php break; }
          endforeach ?>
          <p class="smaller">{{truncDescription($post->description)}}</p>
          <!-- </div> -->
        </a>
      </div>
      <?php 
      endforeach ?>
    </div>
  </div>
  <?php 
  endif ?>
  <!-- Artikel Terkait End -->
  <!--CONTENT ARTIKEL END -->

  <!--CONTENT KEGIATAN -->
  <?php if($content->type == "kegiatan"): ?>
  <div class="container fix-content">
    <div class="col-md-5">
      <h3 class="text-left bigger">{{$content->title}}</h3>
      <?php
      $tanggal = strtotime($content->created_at);
      $tanggal = date('d F Y G:i', $tanggal);
      echo "<p class='smaller'>Ditampilkan pada ".$tanggal."</p><br/>";
      ?>
      <p><b>{{nl2br($content->description)}}</b></p>
      <div id="dateKeg">
        <br/>
        <p>Akan dilaksanakan pada:</p>
        <h4><i class="glyphicon glyphicon-calendar"></i> <b class="c-green">{{$content->dateStart}}</b> — <b class="c-red">{{$content->dateEnd}}</b></h4>
      </div>
      <br/><br/><br/>
      Bagikan
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
        <img src="{{URL::to($photo->path)}}" class="img-responsive img-rounded p-30">
        <?php break; } ?>
      </ul>
    </div>
  </div>
  <?php 
  endif ?>
  <div class="clearfix"></div>
  <!-- CONTENT KEGIATAN END-->

  <!-- Artikel Terkait -->

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