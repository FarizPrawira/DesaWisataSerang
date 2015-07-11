<html>
<head>
	<title>Dashboard admin</title>
	<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
	<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
</head>
<body>
	<a href="{{URL::to('/')}}">Home</a>
	<a href="{{URL::to('user/logout')}}">Keluar</a>
	<legend>Pengisian Konten</legend> 	
	<!-- {{ Form::open(array('url'=>'post','files'=>true)) }} -->
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
						<option value="pertanian">Pertanian</option>
						<option value="pariwisata">Pariwisata</option>
						<option value="produk">Produk</option>
						<option value="budaya">Budaya</option>
						<option value="unik">Unik</option>
					</select>
				</td>
			</tr>
		</table>
		{{ Form::file('images[]', ['multiple' => true, 'class' => 'dropzone', 'id' => 'my-awesome-dropzone']) }}
		<br>	
		<button type="submit">Submit</button>
	</form>
</body>
</html>