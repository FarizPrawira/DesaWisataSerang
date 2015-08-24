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
    <link rel="icon" type="image/png" href="{{URL::to('assets/img/favicon.png')}}">
</head>
<body>
	@include('home.header')
	<!-- CONTENT -->
	<div class="container fix-content">
		<div class="row"> 
            <div class="col-md-12">
                <ul class="list-unstyled list-inline">
                    <li id="Blomba" class="btn btn-default active">Lomba <span>({{Content::where('tag','lomba')->count();}})</span></li>
                    <li id="Bacara" class="btn btn-default">Acara <span>({{Content::where('tag','acara')->count();}})</span></li>
                    <li id="Bsosial" class="btn btn-default">Sosialisasi <span>({{Content::where('tag','sosial')->count();}})</span></li>
                </ul>
            </div>
			<div class="col-md-12" >
				<?php foreach ($results['tag'] as $tag): ?>
				<div id="C{{$tag->tag}}">				
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th class="text-left">Judul</th>
                            <th class="text-left" id="desc">Deskripsi</th>
                            <th class="text-left">CP</th>
                            <th class="text-left">Lokasi</th>
                            <th class="text-left">Tanggal</th>
                        </tr>
                        <?php foreach ($results['content'] as $kegiatan): 
                        if ($tag->tag == $kegiatan->tag) { ?>
                        <tr>
                            <td class="text-left"><a href="{{URL::to('content/'.$kegiatan->id)}}">{{$kegiatan->title}}</a></td>
                            <td class="text-left">{{truncDescription($kegiatan->description)}}</td>
                            <td class="text-left">{{$kegiatan->cp}}</td>
                            <td class="text-left">{{$kegiatan->lokasi}}</td>
                            <td class="text-left">{{$kegiatan->dateStart}} <br>sampai<br> {{$kegiatan->dateEnd}}</td>
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