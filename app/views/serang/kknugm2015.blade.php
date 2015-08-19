<!DOCTYPE html>
<html>
<head>
	<title>Serang |	KKN-PPM UGM 2015</title>
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
	<div class="container">
		<div class="row">	
			<h3>KKN - PPM</h3>
			<p>Kuliah Kerja Nyata - Pembelajaran dan Pemberdayaan Masyarakat</p>
			<div>
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#">UGM</a></li>
					<li role="presentation"><a href="{{URL::to('serang/kkn-iu2015')}}">IU</a></li>
				</ul>
				<!-- Nav tabs end -->
				<!-- Tab content -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="UGM2015">
						<ol class="breadcrumb">
							<li><a href="{{URL::to('serang/kkn-ugm2014')}}">2014</a></li>
							<li class="active">2015</li>
						</ol>
						<div class="row">
							<div class="col-md-8 col-md-offset-4 col-ms-12">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/ani.jpg')}}" alt="Tidak ada">
											<h3 class="nama text-center">Ani Widiastuti, S.P., M.P., Ph.D.</h3>
										</a>	
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h3 class="media-heading text-center">Dosen Pembimbing Lapangan</h3>
									</div>
								</div>
							</div>
							<div class="col-md-8 col-md-offset-4 col-ms-12">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/eda.jpg')}}" alt="Tidak ada">
											<h3 class="nama text-center">Pranedya Atria</h3>
										</a>	
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h3 class="media-heading text-center">Koordinator Mahasiswa Unit</h3>
										<h4 class="text-center">Subunit 1</h4>
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
											<h4 class="nama text-center">Diva Alfiansyah</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Koordinator Mahasiswa Subunit 1</h4>
										<h4 class="text-center">Geofisika</h4>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/sarah.jpg')}}" alt="Tidak ada">
											<h4 class="nama text-center">Sarah Wulan</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Bendahara Subunit 1 </h4>
										<h4 class="text-center">Ilmu Ekonomi</h4>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/fakhri.jpg')}}" alt="Tidak ada">
											<h4 class="nama text-center">Fakhri Hawari Arifin</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Sekertaris Subunit 1</h4>
										<h4 class="text-center">Ilmu Komputer</h4>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/putri.jpg')}}" alt="Tidak ada">
											<h4 class="nama text-center">Dyah Putri Puspitasari</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Koordinator Mahasiswa Kluster Soshum</h4>
										<h4 class="text-center">Sosiologi</h4>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/yuli.jpg')}}" alt="Tidak ada">
											<h4 class="nama text-center">Yuli Perwita Sari</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Teknologi Pangan dan Hasil Pertanian</h4>
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
											<h4 class="nama text-center">Fariz Prawira</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Koordinator Mahasiswa Subunit 2</h4>
										<h4 class="text-center">Ilmu Komputer</h4>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/melvi.jpg')}}" alt="Tidak ada">
											<h4 class="nama text-center">Moria Melviani Harefa</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Bendahara Subunit 2</h4>
										<h4 class="text-center">Bidan Pendidik</h4>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/tiara.jpg')}}" alt="Tidak ada">
											<h4 class="nama text-center">Tiara Mawarni</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Sekertaris Subunit 2</h4>
										<h4 class="text-center">Manejemen dan Kebijakan Publik</h4>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/amar.jpg')}}" alt="Tidak ada">
											<h4 class="nama text-center">Muamar Mujab</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Koordinator Mahasiswa Kluster Saintek</h4>
										<h4 class="text-center">Teknik Geodesi</h4>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/tea.jpg')}}" alt="Tidak ada">
											<h4 class="nama text-center">Tiara Firda Sani</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Sekertaris Unit</h4>
										<h4 class="text-center">Ilmu Komunikasi</h4>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/vervita.jpg')}}" alt="Tidak ada">
											<h4 class="nama text-center">Verfita Sela Ragadisa</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Ilmu Hama dan Penyakit Tumbuhan</h4>
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
											<h4 class="nama text-center">Handaru Aditya Kusuma</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Koordinator Mahasiswa Subunit 3</h4>
										<h4 class="text-center">Pembangunan Wilayah</h4>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/vivi.jpg')}}" alt="Tidak ada">
											<h4 class="nama text-center">Viviane Annisa</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Bendahara Subunit 3</h4>
										<h4 class="text-center">Farmasi</h4>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/bella.jpg')}}" alt="Tidak ada">
											<h4 class="nama text-center">Bella Hayu Nurhayati</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Sekertaris Subunit 3</h4>
										<h4 class="text-center">Teknologi Pangan dan Hasil Pertanian</h4>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/lukman.jpg')}}" alt="Tidak ada">
											<h4 class="nama text-center">Lukman Adi Cahyo</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Koordinator Mahasiswa Kluster Agro</h4>
										<h4 class="text-center">Ilmu Hama dan Penyakit Tumbuhan</h4>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/dias.jpg')}}" alt="Tidak ada">
											<h4 class="nama text-center">Dias Haryu</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Bendahara Unit</h4>
										<h4 class="text-center">Manejemen dan Kebijakan Publik</h4>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/iid.jpg')}}" alt="Tidak ada">
											<h4 class="nama text-center">Maulida Tri Agustina M</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Kimia</h4>
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
											<h4 class="nama text-center">Asep Mulya Dian DP</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Koordinator Mahasiswa Subunit 4</h4>
										<h4 class="text-center">Penyuluhan dan Komunikasi Pertanian</h4>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/ida.jpg')}}" alt="Tidak ada">
											<h4 class="nama text-center">Ida Nur Fatimah</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Bendahara Subunit 4</h4>
										<h4 class="text-center">Matematika</h4>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/silo.jpg')}}" alt="Tidak ada">
											<h4 class="nama text-center">Susilo Utomo</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Sekertaris Subunit 4</h4>
										<h4 class="text-center">Tenik Geodesi</h4>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/wika.jpg')}}" alt="Tidak ada">
											<h4 class="nama text-center">Wikara Dyah Widayaka</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Bendahara Unit</h4>
										<h4 class="text-center">Ilmu Ekonomi</h4>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/fince.jpg')}}" alt="Tidak ada">
											<h4 class="nama text-center">Fince Febriani Zalukhu</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Bidan Pendidik</h4>
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
											<h4 class="nama text-center">Ogi Yoga Abi Kuncoro</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Koordinator Mahasiswa Subunit 5</h4>
										<h4 class="text-center">Ilmu Komputer</h4>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/rina.jpg')}}" alt="Tidak ada">
											<h4 class="nama text-center">Rina Hikmayanti</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Bendahara Subunit 5</h4>
										<h4 class="text-center">Ilmu dan Industri Peternakan</h4>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/randy.jpg')}}" alt="Tidak ada">
											<h4 class="nama text-center">Randy Achmad Saputra</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Sekertaris Subunit 5</h4>
										<h4 class="text-center">Geofisika</h4>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/hana.jpg')}}" alt="Tidak ada">
											<h4 class="nama text-center">Hana Nur Pratiwi</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Koordinator Mahasiswa Kluster Medika</h4>
										<h4 class="text-center">Farmasi</h4>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/eny.jpg')}}" alt="Tidak ada">
											<h4 class="nama text-center">Eny Fatihatun Khasanah</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Sekertaris Unit</h4>
										<h4 class="text-center">Sosiologi</h4>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="media">
									<div class="media-left ">
										<a href="#">
											<img class="media-object pemerintah-besar-gambar img-circle" src="{{URL::to('assets/img/kknugm2015/juli.jpg')}}" alt="Tidak ada">
											<h4 class="nama text-center">Juli Triantoro</h4>
										</a>
									</div>
									<div class="media-body pemerintah-besar-body ">
										<h4 class="media-heading text-center">Teknik Pertanian</h4>
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