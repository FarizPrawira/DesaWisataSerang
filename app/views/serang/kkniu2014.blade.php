<!DOCTYPE html>
<html>
<head>
	<title>Serang |	KKN-PPM IU 2014</title>
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
	<div class="container">
		<div class="row">	
			<h1 class="text-center">KKN - PPM</h1>
			<h4 class="text-center">Kuliah Kerja Nyata - Pembelajaran dan Pemberdayaan Masyarakat</h4>
			<div>
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation"><a href="{{URL::to('serang/kkn-ugm2015')}}">UGM</a></li>
					<li role="presentation" class="active"><a href="#">IU</a></li>
				</ul>
				<!-- Nav tabs end -->
				<!-- Tab content -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="IU2014">
						<ol class="breadcrumb">
							<li class="active">2014</li>
							<li><a href="{{URL::to('serang/kkn-iu2015')}}">2015</a></li>
						</ol>
						<div class="row">
							<div class="col-md-8 col-md-offset-4 col-ms-12">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/ani.jpg')}}" alt="Tidak ada">
										</a>	
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h3 class="text-left">Ani Widiastuti, S.P., M.P., Ph.D.</h3>
										<h4 class="text-left">Dosen Pembimbing Lapangan</h4>
									</div>
								</div>
							</div>
							<div class="col-md-8 col-md-offset-4 col-ms-12">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/eda.jpg')}}" alt="Tidak ada">											
										</a>	
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h3 class="text-left">Pranedya Atria</h3>
										<h4 class="text-left">Koordinator Mahasiswa Unit</h4>
										<p class="text-left">Subunit 1</p>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<ol class="breadcrumb">
								<li><h3>Subunit 1</h3></li>
							</ol>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/diva.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Diva Alfiansyah</h4>
										<p class="text-left">Koordinator Mahasiswa Subunit 1</p>
										<p class="text-left">Geofisika</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/sarah.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Sarah Wulan</h4>
										<p class="text-left">Bendahara Subunit 1 </p>
										<p class="text-left">Ilmu Ekonomi</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/fakhri.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Fakhri Hawari Arifin</h4>
										<p class="text-left">Sekertaris Subunit 1</p>
										<p class="text-left">Ilmu Komputer</p>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/putri.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Dyah Putri Puspitasari</h4>
										<p class="text-left">Koordinator Mahasiswa Kluster Soshum</p>
										<p class="text-left">Sosiologi</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/yuli.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Yuli Perwita Sari</h4>
										<p class="text-left">Teknologi Pangan dan Hasil Pertanian</p>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<ol class="breadcrumb">
								<li><h3>Subunit 2</h3></li>
							</ol>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/fariz.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Fariz Prawira</h4>
										<p class="text-left">Koordinator Mahasiswa Subunit 2</p>
										<p class="text-left">Ilmu Komputer</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/melvi.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Moria Melviani Harefa</h4>
										<p class="text-left">Bendahara Subunit 2</p>
										<p class="text-left">Bidan Pendidik</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/tiara.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Tiara Mawarni</h4>
										<p class="text-left">Sekertaris Subunit 2</p>
										<p class="text-left">Manejemen dan Kebijakan Publik</p>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/amar.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Muamar Mujab</h4>
										<p class="text-left">Koordinator Mahasiswa Kluster Saintek</p>
										<p class="text-left">Teknik Geodesi</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/tea.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Tiara Firda Sani</h4>
										<p class="text-left">Sekertaris Unit</p>
										<p class="text-left">Ilmu Komunikasi</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/vervita.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Verfita Sela Ragadisa</h4>
										<p class="text-left">Ilmu Hama dan Penyakit Tumbuhan</p>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<ol class="breadcrumb">
								<li><h3>Subunit 3</h3></li>
							</ol>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/adit.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Handaru Aditya Kusuma</h4>
										<p class="text-left">Koordinator Mahasiswa Subunit 3</p>
										<p class="text-left">Pembangunan Wilayah</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/vivi.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Viviane Annisa</h4>
										<p class="text-left">Bendahara Subunit 3</p>
										<p class="text-left">Farmasi</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/bella.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Bella Hayu Nurhayati</h4>
										<p class="text-left">Sekertaris Subunit 3</p>
										<p class="text-left">Teknologi Pangan dan Hasil Pertanian</p>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/lukman.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Lukman Adi Cahyo</h4>
										<p class="text-left">Koordinator Mahasiswa Kluster Agro</p>
										<p class="text-left">Ilmu Hama dan Penyakit Tumbuhan</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/dias.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Dias Haryu</h4>
										<p class="text-left">Bendahara Unit</p>
										<p class="text-left">Manejemen dan Kebijakan Publik</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/iid.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Maulida Tri Agustina M</h4>
										<p class="text-left">Kimia</p>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<ol class="breadcrumb">
								<li><h3>Subunit 4</h3></li>
							</ol>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/asep.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Asep Mulyana Dian DP</h4>
										<p class="text-left">Koordinator Mahasiswa Subunit 4</p>
										<p class="text-left">Penyuluhan dan Komunikasi Pertanian</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/ida.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Ida Nur Fatimah</p>
										<p class="text-left">Bendahara Subunit 4</p>
										<p class="text-left">Matematika</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/silo.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Susilo Utomo</h4>
										<p class="text-left">Sekertaris Subunit 4</p>
										<p class="text-left">Tenik Geodesi</p>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/wika.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Wikara Dyah Widayaka</h4>
										<p class="text-left">Bendahara Unit</p>
										<p class="text-left">Ilmu Ekonomi</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/fince.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Fince Febriani Zalukhu</h4>
										<p class="text-left">Bidan Pendidik</p>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<ol class="breadcrumb">
								<li><h3>Subunit 5</h3></li>
							</ol>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/ogi.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Ogi Yoga Abi Kuncoro</h4>
										<p class="text-left">Koordinator Mahasiswa Subunit 5</p>
										<p class="text-left">Ilmu Komputer</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/rina.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Rina Hikmayanti</h4>
										<p class="text-left">Bendahara Subunit 5</p>
										<p class="text-left">Ilmu dan Industri Peternakan</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/randy.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Randy Achmad Saputra</h4>
										<p class="text-left">Sekertaris Subunit 5</p>
										<p class="text-left">Geofisika</p>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/hana.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Hana Nur Pratiwi</h4>
										<p class="text-left">Koordinator Mahasiswa Kluster Medika</p>
										<p class="text-left">Farmasi</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/eny.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Eny Fatihatun Khasanah</h4>
										<p class="text-left">Sekertaris Unit</p>
										<p class="text-left">Sosiologi</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/juli.jpg')}}" alt="Tidak ada">
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="text-left">Juli Triantoro</h4>
										<p class="text-left">Teknik Pertanian</p>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				<!-- Tab content end -->
			</div>		
		</div>
	</div>
	<!-- CONTENT END -->

	@include('home.footer')
</body>
</html>