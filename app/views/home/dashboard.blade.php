<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- STYLE -->
	<link rel="stylesheet" href="{{URL::to('vendor/bootstrap/dist/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('vendor/font-awesome/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('vendor/jquery-ui/jquery-ui.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('vendor/jquery-ui/jquery-ui.structure.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('vendor/jquery-ui/jquery-ui.theme.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('assets/css/dropzone.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('assets/css/site.css')}}"/>
    <link rel="icon" type="image/png" href="{{URL::to('assets/img/favicon.png')}}">
</head>
<body>
	<!-- ERROR LOGIN NOTIF -->
	<div id="notification" class="notification">
		<?php if (Session::has('error')): ?>
		<div class="col-xs-offset-3 col-xs-6 alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			{{Session::get('error')}}
		</div>
		<div class="clearfix"></div>
		<?php 
		endif; ?>
	</div>
	<!-- ERROR LOGIN NOTIF END-->

	<!-- LOGIN FORM -->
	<?php	if(!Auth::check()){ ?>
    <div class="middle">
        <div class="row">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Dashboard Desa Serang</h4>
                    </div>
                    <div class="modal-body">
                        <form action="{{URL::to('user/login')}}" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Masuk</button>
                                <a href="{{URL::to('')}}" type="button" class="btn btn-link">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <img src="{{URL::to('assets/img/logo_warna.png')}}" id="login_logo">
        </div> 
    </div>
	<?php }	
	// LOGIN FORM END 
	// ALREADY LOGIN
	else { ?>
	@include('home.header')

	<!-- ERROR INPUT -->
	<?php if(isset($errors)) {foreach ($errors->all() as $key): ?>
	<div class="notification" id="notification">
		<div class="col-xs-offset-3 col-xs-6 alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			{{$key}}
		</div>
		<div class="clearfix"></div>
	</div>
	<?php 
	endforeach; }?>
	<!-- ERROR INPUT END-->

	<!-- SUCCESS INPUT -->
	<?php if(Session::has('sukses')) { ?>
	<div class="notification" id="notification">
		<div class="col-xs-offset-3 col-xs-6 alert alert-success alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			{{Session::get('sukses')}}
		</div>
		<div class="clearfix"></div>
	</div>
	<?php } ?>
	<!-- SUCCESS INPUT END-->

	<!-- CONTENT -->
	<div class="container fix-content">
		<div class="col-md-2 sidebar-serang">
			<ul class="list-unstyled">
				<li id="Bdaftar" class="active"><i class="glyphicon glyphicon-home"></i> Daftar konten<span>({{Content::count();}})</span></li>
				<li id="Bgalery"><i class="glyphicon glyphicon-picture"></i> Galeri </li>
				<li id="Bartikel"><i class="glyphicon glyphicon-file"></i> Artikel </li>
				<li id="Bkegiatan"><i class="glyphicon glyphicon-time"></i> Kegiatan</li>
				<li id="Bpertanian"><i class="glyphicon glyphicon-grain"></i> Pertanian </li>
				<li id="Bpeternakan"><i class="glyphicon glyphicon-cutlery"></i> Peternakan </li>
				<li id="Bpaketwisata"><i class="glyphicon glyphicon-tree-conifer"></i> Paket wisata </li>
			</ul>
		</div>
		<div class="col-md-10">
			<div class="panel panel-green" id="Cdaftar">
				<div class="panel-body">
					<ul class="list-unstyled">
						<?php foreach ($results["content"] as $content) { ?>						
						<!-- Confirm deletion modal -->
						<div class="modal fade" id="myModal{{$content->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-body">
										Anda yakin ingin menghapus "{{$content->title}}" ?
									</div>
									<div class="modal-footer">
										{{ Form::open(array('route' => array('deleteContent', $content->id), 'role'=>'form')) }}
										<button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
										<button class="btn btn-primary" type="submit" class="delete" name="delete">Hapus</button>
										{{ Form::close() }}
									</div>
								</div>
							</div>
						</div>
						<!-- Confirm deletion modal end -->
						<li>
							<div class="row">
								<span class="col-sm-5">{{$content->title}}</span>
								<span class="col-sm-2">{{ucfirst($content->type)}}</span>
								<span class="col-sm-3">{{$content->created_at}}</span>
								<a href="{{URL::to('content/edit/'.$content->id)}}" class="btn btn-link col-sm-1">Edit</a>
								<button type="button" class="btn btn-link" data-toggle="modal" data-target="#myModal{{$content->id}}">Hapus</button>
							</div>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>

			<div class="panel panel-green" id="Cgalery">
					<a href="{{URL::to('content/galery-edit')}}" class="btn" style="float: right;"><i class="glyphicon glyphicon-scissors"></i> Edit Galery</a>
				<div class="panel-body">
					<form class="form-horizontal" action="{{URL::to('galery/store')}}" method="post" enctype="multipart/form-data" file="true">
						<input type="hidden" name="type" value="image">
						<div class="form-group">
							<label for="inputPhoto" class="col-sm-2 control-label">Foto</label>
							<div class="col-sm-10">
								{{ Form::file('images[]', ['multiple' => true, 'class' => 'dropzone', 'id' => 'my-awesome-dropzone']) }}
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10"></div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<button type="reset" class="btn btn-default">Bersihkan</button>
							</div>
						</div>
					</form>
					<form class="form-horizontal" action="{{URL::to('galery/store')}}" method="post">
						<input type="hidden" name="type" value="video">
						<div class="form-group">
							<label for="inputPhoto" class="col-sm-2 control-label">Video</label>
							<div class="col-sm-8">
								<input type="text" name="path" class="form-control" id="inputJudul" placeholder="URL embed video">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10"></div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<button type="reset" class="btn btn-default">Bersihkan</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="panel panel-green" id="Cartikel">
				<div class="panel-body">
					<form class="form-horizontal" action="{{URL::to('content/store')}}" method="post" enctype="multipart/form-data" file="true">
						<input type="hidden" name="type" value="artikel">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
							<div class="col-sm-10">
								<input type="text" name="title" class="form-control" id="inputJudul" placeholder="Tulis judul">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Deskripsi</label>
							<div class="col-sm-10">
								<textarea placeholder="Deskripsi artikel" name="description" class="form-control" id="tempat-deskripsi"rows="10"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="inputPhoto" class="col-sm-2 control-label">Foto</label>
							<div class="col-sm-10">
								{{ Form::file('images[]', ['multiple' => true, 'class' => 'dropzone', 'id' => 'my-awesome-dropzone']) }}
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10"></div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<button type="reset" class="btn btn-default">Bersihkan</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="panel panel-green" id="Ckegiatan">
				<div class="panel-body">
					<form class="form-horizontal" action="{{URL::to('content/store')}}" method="post" enctype="multipart/form-data" file="true">
						<input type="hidden" name="type" value="kegiatan">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
							<div class="col-sm-10">
								<input type="text" name="title" class="form-control" id="inputJudul" placeholder="Tulis judul">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Deskripsi</label>
							<div class="col-sm-10">
								<textarea placeholder="Deskripsi kegitan" name="description" class="form-control" id="tempat-deskripsi"rows="10"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Contact Person</label>
							<div class="col-sm-10">
								<input type="text" name="cp" class="form-control" id="inputJudul" placeholder="Tulis CP">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Lokasi</label>
							<div class="col-sm-10">
								<input type="text" name="lokasi" class="form-control" id="inputJudul" placeholder="Tulis lokasi kegiatan">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Tag</label>
							<div class="col-sm-10">
								<select class="form-control" name="tag">
									<option value="lomba">Lomba</option>
									<option value="acara">Acara</option>
									<option value="sosial">Sosialisasi</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Tanggal mulai</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="KegDateStart" name="dateStart" placeholder="Pilih tanggal">
							</div>
							<label class="col-sm-2 control-label">Tanggal selesai</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id="KegDateEnd" name="dateEnd" placeholder="Pilih tanggal">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPhoto" class="col-sm-2 control-label">Foto</label>
							<div class="col-sm-10">
								{{ Form::file('images[]', ['multiple' => true, 'class' => 'dropzone', 'id' => 'my-awesome-dropzone']) }}
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10"></div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<button type="reset" class="btn btn-default">Bersihkan</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="panel panel-green" id="Cpertanian">
				<div class="panel-body">
					<form class="form-horizontal" action="{{URL::to('pertanian/store')}}" method="post">
						<div class="form-group">
							<div class="col-sm-12">
								<table class="table table-bordered">
									<tbody class="text-center">
										<tr>
											<td><b>Tahun</b></td>
											<td><input class="form-control" type="number" name="tahun"></td>
										</tr>
										<tr>
											<th class="text-center"><b>Komoditas</th>
											<th class="text-center"><b>Lahan (Ha)</th>
											<th class="text-center"><b>Hasil (Ton/Ha)</th>
										</tr>
										<tr>
											<td><b>Jagung</b></td>
											<td><input class="form-control" type="real" name="jagung_luas" id="inputJumlahSayur1" placeholder="0"></td>
											<td><input class="form-control" type="real" name="jagung_hasil" id="inputHasilSayur1" placeholder="0"></td>
										</tr>
										<tr>
											<td><b>Ubi Kayu</b></td>
											<td><input class="form-control" type="real" name="ubi_kayu_luas" id="inputJumlahSayur2" placeholder="0"></td>
											<td><input class="form-control" type="real" name="ubi_kayu_hasil" id="inputHasilSayur2" placeholder="0"></td>
										</tr>
										<tr>
											<td><b>Ubi Jalar</b></td>
											<td><input class="form-control" type="real" name="ubi_jalar_luas" id="inputJumlahSayur3" placeholder="0"></td>
											<td><input class="form-control" type="real" name="ubi_jalar_hasil" id="inputHasilSayur3" placeholder="0"></td>
										</tr>
										<tr>
											<td><b>Cabai</b></td>
											<td><input class="form-control" type="real" name="cabai_luas" id="inputJumlahSayur4" placeholder="0"></td>
											<td><input class="form-control" type="real" name="cabai_hasil" id="inputHasilSayur4" placeholder="0"></td>              
										</tr>
										<tr>
											<td><b>Tomat</b></td>
											<td><input class="form-control" type="real" name="tomat_luas" id="inputJumlahSayur5" placeholder="0"></td>
											<td><input class="form-control" type="real" name="tomat_hasil" id="inputHasilSayur5" placeholder="0"></td>
										</tr>
										<tr>
											<td><b>Sawi</b></td>
											<td><input class="form-control" type="real" name="sawi_luas" id="inputJumlahSayur6" placeholder="0"></td>
											<td><input class="form-control" type="real" name="sawi_hasil" id="inputHasilSayur6" placeholder="0"></td>
										</tr>
										<tr>
											<td><b>Kentang</b></td>
											<td><input class="form-control" type="real" name="kentang_luas" id="inputJumlahSayur7" placeholder="0"></td>
											<td><input class="form-control" type="real" name="kentang_hasil" id="inputHasilSayur7" placeholder="0"></td>
										</tr>
										<tr>
											<td><b>Kubis</b></td>
											<td><input class="form-control" type="real" name="kubis_luas" id="inputJumlahSayur8" placeholder="0"></td>
											<td><input class="form-control" type="real" name="kubis_hasil" id="inputHasilSayur8" placeholder="0"></td>
										</tr>
										<tr>
											<td><b>Buncis</b></td>
											<td><input class="form-control" type="real" name="buncis_luas" id="inputJumlahSayur9" placeholder="0"></td>
											<td><input class="form-control" type="real" name="buncis_hasil" id="inputHasilSayur9" placeholder="0"></td>
										</tr>
										<tr>
											<td><b>Terong</b></td>
											<td><input class="form-control" type="real" name="terong_luas" id="inputJumlahSayur10" placeholder="0"></td>
											<td><input class="form-control" type="real" name="terong_hasil" id="inputHasilSayur10" placeholder="0"></td>
										</tr>
										<tr>
											<td><b>Wortel</b></td>
											<td><input class="form-control" type="real" name="wortel_luas" id="inputJumlahSayur11" placeholder="0"></td>
											<td><input class="form-control" type="real" name="wortel_hasil" id="inputHasilSayur11" placeholder="0"></td>
										</tr>
										<tr>
											<td><b>Pagi Gogo</b></td>
											<td><input class="form-control" type="real" name="padi_luas" id="inputJumlahSayur12" placeholder="0"></td>
											<td><input class="form-control" type="real" name="padi_hasil" id="inputHasilSayur12" placeholder="0"></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-0 col-sm-12">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<button type="reset" class="btn btn-default">Bersihkan</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="panel panel-green" id="Cpeternakan">
				<div class="panel-body">
					<form class="form-horizontal" action="{{URL::to('peternakan/store')}}" method="post">
						<div class="form-group">							
							<div class="col-sm-12">
								<table class="table table-bordered">
									<tbody class="text-center">
										<tr>
											<td><b>Tahun</b></td>
											<td><input class="form-control" type="number" name="tahun"></td>
										</tr>
										<tr>
											<th class="text-center"><b>Ternak</th>
											<th class="text-center"><b>Jumlah (Ekor)</th>
										</tr>
										<tr>
											<td><b>Sapi</b></td>
											<td><input class="form-control" type="number" name="sapi" id="inputJumlahSapi" placeholder="0"></td>											
										</tr>
										<tr>
											<td><b>Kambing</b></td>
											<td><input class="form-control" type="number" name="kambing" id="inputJumlahKambing" placeholder="0"></td>											
										</tr>
										<tr>
											<td><b>Ayam</b></td>
											<td><input class="form-control" type="number" name="ayam" id="inputJumlahAyam" placeholder="0"></td>
										</tr>
										<tr>
											<td><b>Kuda</b></td>
											<td><input class="form-control" type="number" name="kuda" id="inputJumlahKuda" placeholder="0"></td>              
										</tr>
										<tr>
											<th class="text-center"><b>Produk Ternak</th>
											<th class="text-center"><b>Jumlah Produk Ternak</th>
										</tr>
										<tr>
											<td><b>Susu</b></td>
											<td><input class="form-control" type="number" name="susu" id="inputJumlahSusu" placeholder="0"></td>
										</tr>
										<tr>
											<td><b>Daging</b></td>
											<td><input class="form-control" type="number" name="daging" id="inputJumlahDaging" placeholder="0"></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-0 col-sm-12">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<button type="reset" class="btn btn-default">Bersihkan</button>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="panel panel-green" id="Cpaketwisata">
				<div class="panel-body">
					<form class="form-horizontal" action="{{URL::to('tic/update/1')}}" method="post">
						<div class="form-group">
							<div class="col-sm-12">
								<table class="table table-bordered">
									<tbody class="text-center">
										<tr>
											<th class="text-center"><h4>Permainan</h4></th>
											<th class="text-center"><h4>Harga (Rupiah)</h4></th>
											<th class="text-center"><h4>Fasilitas</h4></th>
											<th class="text-center"><h4>Keterangan</h4></th>
										</tr>
										<?php foreach ($results['tic'] as $tic): ?>
										<tr>
											<td><b>Agro Kid's</b></td>
											<td><input type="text" class="form-control" name="agroBiaya" placeholder="Rp/orang" value="{{$tic->agroBiaya}}"></td>
											<td><textarea class="form-control" name="agroFasilitas" placeholder="Fasilitas wisata">{{$tic->agroFasilitas}}</textarea></td>
											<td><input type="text" class="form-control" name="agroKet" placeholder="Keterangan wisata" value="{{$tic->agroKet}}"></td>
										</tr>
										<tr>
											<td><b>Camping Ground</b></td>
											<td><input type="text" class="form-control" name="campBiaya" placeholder="Rp/orang" value="{{$tic->campBiaya}}"></td>
											<td><textarea class="form-control" name="campFasilitas" placeholder="Fasilitas wisata">{{$tic->campFasilitas}}</textarea></td>
											<td><input type="text" class="form-control" name="campKet" placeholder="Keterangan wisata" value="{{$tic->campKet}}"></td>
										</tr>
										<tr>
											<td><b>Homestay Pelajar</b></td>
											<td><input type="text" class="form-control" name="homeBiaya" placeholder="Rp/orang" value="{{$tic->homeBiaya}}"></td>
											<td><textarea class="form-control" name="homeFasilitas" placeholder="Fasilitas wisata">{{$tic->homeFasilitas}}</textarea></td>
											<td><input type="text" class="form-control" name="homeKet" placeholder="Keterangan wisata" value="{{$tic->homeKet}}"></td>
										</tr>
										<tr>
											<td><b>Tracking</b></td>
											<td><input type="text" class="form-control" name="trackBiaya" placeholder="Rp/orang" value="{{$tic->trackBiaya}}"></td>
											<td><textarea class="form-control" name="trackFasilitas" placeholder="Fasilitas wisata">{{$tic->trackFasilitas}}</textarea></td>
											<td><input type="text" class="form-control" name="trackKet" placeholder="Keterangan wisata" value="{{$tic->trackKet}}"></td>
										</tr>
										<tr>
											<td><b>Outbound</b></td>
											<td><input type="text" class="form-control" name="outBiaya" placeholder="Rp/orang" value="{{$tic->outBiaya}}"></td>
											<td><textarea class="form-control" name="outFasilitas" placeholder="Fasilitas wisata">{{$tic->outFasilitas}}</textarea></td>
											<td><input type="text" class="form-control" name="outKet" placeholder="Keterangan wisata" value="{{$tic->outKet}}"></td>
										</tr>
										<tr>
											<td><b>Paint Ball</b></td>
											<td><input type="text" class="form-control" name="paintBiaya" placeholder="Rp/orang" value="{{$tic->paintBiaya}}"></td>
											<td><textarea class="form-control" name="paintFasilitas" placeholder="Fasilitas wisata">{{$tic->paintFasilitas}}</textarea></td>
											<td><input type="text" class="form-control" name="paintKet" placeholder="Keterangan wisata" value="{{$tic->paintKet}}"></td>
										</tr>
										<tr>
											<td><b>Rapeling</b></td>
											<td><input type="text" class="form-control" name="rapelBiaya" placeholder="Rp/orang" value="{{$tic->rapelBiaya}}"></td>
											<td><textarea class="form-control" name="rapelFasilitas" placeholder="Fasilitas wisata">{{$tic->rapelFasilitas}}</textarea></td>
											<td><input type="text" class="form-control" name="rapelKet" placeholder="Keterangan wisata" value="{{$tic->rapelKet}}"></td>
										</tr>
										<tr>
											<td><b>Family Gathering</b></td>
											<td><input type="text" class="form-control" name="familyBiaya" placeholder="Rp/orang" value="{{$tic->familyBiaya}}"></td>
											<td><textarea class="form-control" name="familyFasilitas" placeholder="Fasilitas wisata">{{$tic->familyFasilitas}}</textarea></td>
											<td><input type="text" class="form-control" name="familyKet" placeholder="Keterangan wisata" value="{{$tic->familyKet}}"></td>
										</tr>
										<tr>
											<td><b>Pendakian Gn Slamet</b></td>
											<td><input type="text" class="form-control" name="pendakianBiaya" placeholder="Rp/orang" value="{{$tic->pendakianBiaya}}"></td>
											<td><textarea class="form-control" name="pendakianFasilitas" placeholder="Fasilitas wisata">{{$tic->pendakianFasilitas}}</textarea></td>
											<td><input type="text" class="form-control" name="pendakianKet" placeholder="Keterangan wisata" value="{{$tic->pendakianKet}}"></td>
										</tr>
										<?php 
										endforeach ?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-0 col-sm-12">
								<button type="submit" class="btn btn-primary">Simpan</button>
								<button type="reset" class="btn btn-default">Bersihkan</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div> 
	</div>
	@include('home.footer')
	<!-- CONTENT END -->
	<?php } ?>
	<!-- ALREADY LOGIN END -->
	<script>
	$(function() {
		$("#KegDateStart").datepicker({
			dateFormat: 'dd/M/yy',
			monthNamesShort: [ "Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agus", "Sep", "Okt", "Nov", "Des" ] 
		});
		$("#KegDateEnd").datepicker({
			dateFormat: 'dd/M/yy',
			monthNamesShort: [ "Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agus", "Sep", "Okt", "Nov", "Des" ] 
		});
	});
	</script>
</body>
</html>