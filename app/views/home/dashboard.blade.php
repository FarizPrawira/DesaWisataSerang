<html>
<head>
	<title>Dashboard admin</title>
	<link href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css" rel="stylesheet">
	<link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<a href="{{URL::to('/')}}">Home</a>
	<a href="{{URL::to('user/logout')}}">Keluar</a>
	<legend>Pengisian Konten Artikel dan Kegiatan</legend> 	
	<form action="{{URL::to('content/store')}}" method="post" enctype="multipart/form-data" file="true">
		<table>
			<tr>
				<td>Judul</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td>Isi</td>
				<td><textarea name="description"></textarea></td>
			</tr>
			<tr>
				<td>Tipe</td>
				<td>
					<select name="type">
						<option value="artikel">Artikel</option>
						<option value="kegiatan">Kegiatan</option>
					</select>
				</td>
			</tr>
		</table>
		{{ Form::file('images[]', ['multiple' => true, 'class' => 'dropzone', 'id' => 'my-awesome-dropzone']) }}
		<br>	
		<button type="submit">Submit</button>
	</form>

	<legend>Pengisian Konten Pertanian</legend> 	
	<form action="{{URL::to('pertanian/store')}}" method="post">
		<table>
			<tr>
				<td>Tahun</td>
				<td><input type="number" name="tahun"></td>
			</tr>
			<tr>
				<td></td>
				<td>Hasil(Ton/Ha)</td>
				<td>Luas(Ha)</td>
			</tr>
			<tr>
				<td>Jagung</td>
				<td><input type="real" name="jagung_hasil"></td>
				<td><input type="real" name="jagung_luas"></td>
			</tr>
			<tr>
				<td>Ubi Kayu</td>
				<td><input type="real" name="ubi_kayu_hasil"></td>
				<td><input type="real" name="ubi_kayu_luas"></td>
			</tr>
			<tr>
				<td>Ubi Jalar</td>
				<td><input type="real" name="ubi_jalar_hasil"></td>
				<td><input type="real" name="ubi_jalar_luas"></td>
			</tr>
			<tr>
				<td>Cabai</td>
				<td><input type="real" name="cabai_hasil"></td>
				<td><input type="real" name="cabai_luas"></td>
			</tr>
			<tr>
				<td>Tomat</td>
				<td><input type="real" name="tomat_hasil"></td>
				<td><input type="real" name="tomat_luas"></td>
			</tr>
			<tr>
				<td>Sawi</td>
				<td><input type="real" name="sawi_hasil"></td>
				<td><input type="real" name="sawi_luas"></td>
			</tr>
			<tr>
				<td>Kentang</td>
				<td><input type="real" name="ketang_hasil"></td>
				<td><input type="real" name="kentang_luas"></td>
			</tr>
			<tr>
				<td>Kubis</td>
				<td><input type="real" name="kubis_hasil"></td>
				<td><input type="real" name="kubis_luas"></td>
			</tr>
			<tr>
				<td>Buncis</td>
				<td><input type="real" name="buncis_hasil"></td>
				<td><input type="real" name="buncis_luas"></td>
			</tr>
			<tr>
				<td>Terong</td>
				<td><input type="real" name="terong_hasil"></td>
				<td><input type="real" name="terong_luas"></td>
			</tr>
			<tr>
				<td>Wortel</td>
				<td><input type="real" name="wortel_hasil"></td>
				<td><input type="real" name="wortel_luas"></td>
			</tr>
			<tr>
				<td>Pagi Ladang</td>
				<td><input type="real" name="padi_hasil"></td>
				<td><input type="real" name="padi_luas"></td>
			</tr>
		</table>
		<button type="submit">Submit</button>
	</form>

	<legend>Pengisian Konten Peternakan</legend> 	
	<form action="{{URL::to('peternakan/store')}}" method="post">
		<table>
			<tr>
				<td>Tahun</td>
				<td><input type="number" name="tahun"></td>
			</tr>
			<tr>
				<td>Jenis Ternak</td>
				<td>Jumlah Ternak</td>
			</tr>
			<tr>
				<td>Sapi</td>
				<td><input type="number" name="sapi"></td>
			</tr>
			<tr>
				<td>Kambing</td>
				<td><input type="number" name="kambing"></td>
			</tr>
			<tr>
				<td>Ayam</td>
				<td><input type="number" name="ayam"></td>
			</tr>
			<tr>
				<td>Kuda</td>
				<td><input type="number" name="kuda"></td>
			</tr>
			<tr>
				<td>Jenis Produk Ternak</td>
				<td>Jumlah Produk Ternak</td>
			</tr>
			<tr>
				<td>Susu</td>
				<td><input type="number" name="susu"></td>
			</tr>
			<tr>
				<td>Daging</td>
				<td><input type="number" name="daging"></td>
			</tr>
		</table>
		<button type="submit">Submit</button>
	</form>

	<div class="notification" id="notification">
		<?php if(isset($errors)) {foreach ($errors->all() as $key): ?>
		<div class="col-xs-offset-3 col-xs-6 alert alert-danger alert-dismissible" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			{{$key}}
		</div>
		<?php endforeach; }?>
	</div>
	<script src="vendor/jquery/dist/jquery.min.js"></script>
	<script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
</body>
</html>