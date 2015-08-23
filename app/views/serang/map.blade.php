<!DOCTYPE html>
<html>
<head>
	<title>Serang |	Peta Desa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- STYLE -->
	<!-- <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,700italic,900,900italic' rel='stylesheet' type='text/css'> -->
	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
	<link rel="stylesheet" href="http://smeijer.github.io/GeoSearch/css/l.geosearch.css"/>
	<link rel="stylesheet" href="{{URL::to('vendor/font-awesome/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('vendor/bootstrap/dist/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{URL::to('assets/css/agency.css')}}">
	<link rel="stylesheet" href="{{URL::to('assets/css/site.css')}}"/>
</head>
<body>
	@include('home.header')

	<div class="container">
		<div class="row">
			<center><h1>PETA PARIWISATA & KEPENDUDUKAN DESA SERANG</h1></center>
		</div>
		<center>
			<div id="map">
			</div>
			<div>
				<button class="btn btn-success" onclick="locateUser()"> <!-- onclick: untuk memanggil fungsi javascript -->
					My Location
				</button>
				<button class="btn btn-success" onclick="myFunction()"> <!-- onclick: untuk memanggil fungsi javascript -->
					Back to My Map
				</button>
			</center>
		</div>

		<script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
		<script>
		var cities = new L.LayerGroup();		
		var mbAttr = 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
		'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
		'Imagery Â© <a href="http://mapbox.com">Mapbox</a>',
		mbUrl = 'https://{s}.tiles.mapbox.com/v3/{id}/{z}/{x}/{y}.png';

		var grayscale   = L.tileLayer(mbUrl, {id: 'examples.map-20v6611k', attribution: mbAttr}),
		streets  = L.tileLayer(mbUrl, {id: 'examples.map-i875mjb7',   attribution: mbAttr});

		var map = L.map('map', {
			center: [-7.24712, 109.30298],
			zoom: 13.25,
			layers: [grayscale, cities]
		});

		var baseLayers = {
			"Grayscale": grayscale,
			"Streets": streets
		};

		var overlays = {
			"Cities": cities
		};

		L.control.layers(baseLayers, overlays).addTo(map);

		var popup = L.popup();

		function onMapClick(e) {
			popup
			.setLatLng(e.latlng)
			.setContent("This position is" + e.latlng.toString())
			.openOn(map);
		}

		map.on('click', onMapClick);

		var LeafIcon = L.Icon.extend({
			options: {
				iconSize:     [20, 20],
				shadowSize:   [50, 64],
				iconAnchor:   [15, 24],
				shadowAnchor: [4, 62],
				popupAnchor:  [-3, -25]
			}
		});

		var baldes = new LeafIcon({iconUrl: '{{URL::to("assets/img/peta/icons/baldes.png")}}'}),
		stroberi = new LeafIcon({iconUrl: '{{URL::to("assets/img/peta/icons/strawberry.png")}}'}),
		masjid = new LeafIcon({iconUrl: '{{URL::to("assets/img/peta/icons/masjid.png")}}'}),
		rest = new LeafIcon({iconUrl: '{{URL::to("assets/img/peta/icons/rest.png")}}'}),
		pinus = new LeafIcon({iconUrl: '{{URL::to("assets/img/peta/icons/pinus.png")}}'}),
		sayur = new LeafIcon({iconUrl: '{{URL::to("assets/img/peta/icons/sayur.png")}}'}),
		gereja = new LeafIcon({iconUrl: '{{URL::to("assets/img/peta/icons/gereja.png")}}'}),
		home = new LeafIcon({iconUrl: '{{URL::to("assets/img/peta/icons/home.png")}}'}),			
		gedung = new LeafIcon({iconUrl: '{{URL::to("assets/img/peta/icons/gedung.png")}}'});
		house = new LeafIcon({iconUrl: '{{URL::to("assets/img/peta/icons/homestay.png")}}'});

		L.marker([-7.23996, 109.28791], {icon: baldes}).bindPopup('<b><center>Balai Desa Serang</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/Balaidesa.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Terletak di dusun Rejadadi dan menjadi kantor pusat desa Serang. Desa Serang dikepalai oleh Bapak Sugito.</center>').addTo(map);
		L.marker([-7.24104, 109.28922], {icon: masjid}).bindPopup('<b><center>Masjid Nurul Islam</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5690.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23465, 109.28593], {icon: masjid}).bindPopup('<b><center>Masjid Nurul Iman</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5697.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.25036, 109.30205], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5663.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.27287, 109.30889], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5682.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.27111, 109.30703], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5679.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.27009, 109.30627], {icon: masjid}).bindPopup('<b><center>Mushola Nurul Iman</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5678.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.25703, 109.30155], {icon: masjid}).bindPopup('<b><center>Masjid Al-Ikhlas</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5667.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.24101, 109.28921], {icon: masjid}).bindPopup('<b><center>Masjid 3</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5690.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23564, 109.28074], {icon: masjid}).bindPopup('<b><center>Masjid Pak Untung</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5704.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23360, 109.28439], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5699.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23395, 109.28352], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5702.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.27198, 109.30798], {icon: masjid}).bindPopup('<b><center>Masjid Baitul Makdis</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5681.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.22869, 109.28668], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5717.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.22890, 109.28493], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5712.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.22938, 109.28299], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5709.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23009, 109.28091], {icon: masjid}).bindPopup('<b><center>Masjid Baitul Hikmah</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5708.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23212, 109.26996], {icon: masjid}).bindPopup('<b><center>Masjid 1</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5690.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23484, 109.26589], {icon: masjid}).bindPopup('<b><center>Masjid 2</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5690.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.26400, 109.30591], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5673.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.26196, 109.30521], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5671.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.25846, 109.30332], {icon: masjid}).bindPopup('<b><center>Mushola Baitur Rohman</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5670.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.25211, 109.30228], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5683.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.24744, 109.29673], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5660.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.24835, 109.29945], {icon: masjid}).bindPopup('<b><center>Masjid Miftahul Huda</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5661.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23457, 109.28418], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5698.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23275, 109.28163], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5705.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23271, 109.28190], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5706.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23273, 109.28584], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5722.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23062, 109.28675], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5721.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23216, 109.26997], {icon: masjid}).bindPopup('<b><center>Masjid Baitul Quba</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150804_122213_HDR.jpg")}}" alt=""" width="150" height="100"/></div>'+'<br>'+'<center> Masjid ini masih dalam perbaikan.</center>').addTo(map);
		L.marker([-7.23269, 109.26783], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150804_121809_HDR.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23324, 109.26606], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150804_121503_HDR.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.22861, 109.26993], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150804_122517_HDR.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.22959, 109.27433], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150803_162435.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23186, 109.27247], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150803_162837.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23376, 109.27089], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150803_163755.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23314, 109.27090], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150803_164702.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23321, 109.26918], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150803_164912.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23486, 109.26588], {icon: masjid}).bindPopup('<b><center>Masjid Baitul Muttaqin</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150803_165702.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23486, 109.26588], {icon: masjid}).bindPopup('<b><center>Masjid</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/20150807_132759.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23617, 109.28015], {icon: masjid}).bindPopup('<b><center>Mushola</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/20150807_132759.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);

		L.marker([-7.24301, 109.28687], {icon: pinus}).bindPopup('<b><center>Hutan</center><b>'+'<br>'+'<center> Hutan ini dilindungi oleh Perhutani Serang. Terdapat banyak pohon-pohon besar yang berdiri dengan kokohnya di kanan kiri jalan menuju Baturaden, Purwokerto. Daun-daun hijau nan lebat mengiasi dan menyebar membentuk sebuah hutan yang indah dan memukau.</center>').addTo(map);
		L.marker([-7.24292, 109.28841], {icon: pinus}).bindPopup('<b><center>Hutan</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5649.jpg")}}" alt=""" width="150" height="100"/></div>'+'<br>'+'<center> Hutan ini dilindungi oleh Perhutani Serang. Terdapat banyak pohon-pohon besar yang berdiri dengan kokohnya di kanan kiri jalan menuju Baturaden, Purwokerto. Sebagian besar pohon-pohon ini adalah pohon damar. Daun-daun hijau nan lebat mengiasi dan menyebar membentuk sebuah hutan yang indah dan memukau.</center>').addTo(map);
		L.marker([-7.24639, 109.29016], {icon: pinus}).bindPopup('<b><center>Hutan</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5655.jpg")}}" alt=""" width="150" height="100"/></div>'+'<br>'+'<center> Hutan ini dilindungi oleh Perhutani Serang. Terdapat banyak pohon-pohon besar yang berdiri dengan kokohnya. Sebagian besar pohon-pohon ini adalah pohon damar. Daun-daun hijau nan lebat mengiasi dan menyebar membentuk sebuah hutan yang indah dan memukau.</center>').addTo(map);
		L.marker([-7.23777, 109.28812], {icon: pinus}).bindPopup('<b><center>Hutan Pinus</center><b>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5696.jpg")}}" alt=""" width="150" height="100"/></div>' + '<br>' +'<center> Hutan Pinus ini cocok digunakan sebagai kegiatan outbond. Jika beruntung, para pengunjung dapat melihat dan naik kuda. Berikut adalah Giant Swing, permainan baru yang banyak menarik perhatian pengunjung untuk menguji keberanian. </center>' + '<b><center>Giant Swing</center><b>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/wika.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.26679, 109.30650], {icon: pinus}).bindPopup('<b><center>Ladang</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/093236.jpg")}}" alt=""" width="150" height="100"/></div>'+'<br>'+'<center> Di sini, lahan belum sepenuhnya ditumbuhi oleh pohon-pohon besar. Masih terdapat lahan pertanian, seperti singkong dan jagung.</center>').addTo(map);
		L.marker([-7.23321, 109.26767], {icon: pinus}).bindPopup('<b><center>Hutan</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5655.jpg")}}" alt=""" width="150" height="100"/></div>'+'<br>'+'<center> Hutan ini berada di lereng antara dua jalan. Terdapat banyak pohon-pohon besar yang berdiri dengan kokohnya. Daun-daun hijau nan lebat mengiasi dan menyebar membentuk sebuah hutan yang indah dan memukau.</center>').addTo(map);
		L.marker([-7.23460, 109.26739], {icon: pinus}).bindPopup('<b><center>Hutan</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150803_165322.jpg")}}" alt=""" width="150" height="100"/></div>'+'<br>'+'<center> Hutan ini berada di lereng antara dua jalan. Terdapat banyak pohon-pohon besar yang berdiri dengan kokohnya. Daun-daun hijau nan lebat mengiasi dan menyebar membentuk sebuah hutan yang indah dan memukau.</center>').addTo(map);

		L.marker([-7.23918, 109.28775], {icon: stroberi}).bindPopup('<b><center>Kebun Petik Strawberry</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/001.jpg")}}" alt=""" width="150" height="150"/></div>' + '<br>' +'<center> Di sini, para pengunjung diberikan kebebasan untuk memetik strawberry sepuasnya dengan biaya yang terjangkau. Selain mendapatkan kepuasan berupa segar dan manisnya strawberry Serang, para pengunjung dapat menikmati pemandangan alam yang masih sejuk dan asri.</center>').addTo(map);
		L.marker([-7.23896, 109.28817], {icon: stroberi}).bindPopup('<b><center>Kebun Petik Strawberry</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/002.jpg")}}" alt=""" width="150" height="100"/></div>' + '<br>' +'<center> Di sini, para pengunjung diberikan kebebasan untuk memetik strawberry sepuasnya dengan biaya yang terjangkau. Selain mendapatkan kepuasan berupa segar dan manisnya strawberry Serang, para pengunjung dapat menikmati pemandangan alam yang masih sejuk dan asri.</center>').addTo(map);
		L.marker([-7.23610, 109.28645], {icon: stroberi}).bindPopup('<b><center>Kebun Petik Strawberry</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/merah1.jpg")}}" alt=""" width="150" height="150"/></div>' + '<br>' +'<center> Di sini, para pengunjung diberikan kebebasan untuk memetik strawberry sepuasnya dengan biaya yang terjangkau. Selain mendapatkan kepuasan berupa segar dan manisnya strawberry Serang, para pengunjung dapat menikmati pemandangan alam yang masih sejuk dan asri.</center>').addTo(map);
		L.marker([-7.24770, 109.29331], {icon: stroberi}).bindPopup('<b><center>Kebun Petik Strawberry</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5656.jpg")}}" alt=""" width="150" height="100"/></div>' + '<br>' +'<center> Di sini, para pengunjung diberikan kebebasan untuk memetik strawberry sepuasnya dengan biaya yang terjangkau. Selain mendapatkan kepuasan berupa segar dan manisnya strawberry Serang, para pengunjung dapat menikmati pemandangan alam yang masih sejuk dan asri.</center>').addTo(map);
		L.marker([-7.24440, 109.29025], {icon: stroberi}).bindPopup('<b><center>Kebun Petik Strawberry</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/merah1.jpg")}}" alt=""" width="150" height="100"/></div>' + '<br>' +'<center> Di sini, para pengunjung diberikan kebebasan untuk memetik strawberry sepuasnya dengan biaya yang terjangkau. Selain mendapatkan kepuasan berupa segar dan manisnya strawberry Serang, para pengunjung dapat menikmati pemandangan alam yang masih sejuk dan asri.</center>'+ '<b><center>Si Bunga Kuning</center><b>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5652.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center> Tanaman kecil dengan bunga bulat berwarna kuning. Kalau digesek-gesek akan terasa pedas. Tanaman dimanfaatkan untuk bahan sabun atau deterjen.</center>' ).addTo(map);
		L.marker([-7.22850, 109.28510], {icon: stroberi}).bindPopup('<b><center>Kebun Petik Strawberry</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5713.jpg")}}" alt=""" width="150" height="100"/></div>' + '<br>' +'<center> Di sini, para pengunjung diberikan kebebasan untuk memetik strawberry sepuasnya dengan biaya yang terjangkau. Selain mendapatkan kepuasan berupa segar dan manisnya strawberry Serang, para pengunjung dapat menikmati pemandangan alam yang masih sejuk dan asri.</center>').addTo(map);
		L.marker([-7.22986, 109.28718], {icon: stroberi}).bindPopup('<b><center>Kebun Petik Strawberry</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSC_0137.jpg")}}" alt=""" width="150" height="100"/></div>' + '<br>' +'<center> Di sini, para pengunjung diberikan kebebasan untuk memetik strawberry sepuasnya dengan biaya yang terjangkau. Selain mendapatkan kepuasan berupa segar dan manisnya strawberry Serang, para pengunjung dapat menikmati pemandangan alam yang masih sejuk dan asri.</center>').addTo(map);

		L.marker([-7.24498, 109.29092], {icon: rest}).bindPopup('<b><center>Agrowisata Lembah Asri Desa Serang</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5653.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Tempat wisata alam yang menyediakan kenyamanan bagi pengunjung. Tersedia outbond, naik kuda, gubuk cinta, kebun petik strawberry, hutan pinus, teh, pemandangan langsung ke Gunung Slamet. Berikut adalah flying fox, wahana permainan andalan di rest area ini yang patut dicoba.</center>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/outbond.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.24075, 109.28890], {icon: gedung}).bindPopup('<b><center>SDN 4 Serang</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5691.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23360, 109.28308], {icon: gedung}).bindPopup('<b><center>SDN 1 Serang</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5703.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23405, 109.28347], {icon: gedung}).bindPopup('<b><center>TPQ Rhoudhotuttolabah</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5701.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.24073, 109.28911], {icon: gedung}).bindPopup('<b><center>TPQ Miftahul Ulmu</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5689.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.27160, 109.30781], {icon: gedung}).bindPopup('<b><center>MIN GUPPI Serang</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5680.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.25160, 109.30175], {icon: gedung}).bindPopup('<b><center>SDN 5 Serang</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5665.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.26243, 109.30484], {icon: gedung}).bindPopup('<b><center>SDN 2 Serang</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5672.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.25741, 109.30220], {icon: gedung}).bindPopup('<b><center>TPQ 3</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5690.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.25804, 109.30182], {icon: gedung}).bindPopup('<b><center>Taman Baca Masyarakat An-Nur</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5668.jpg")}}" alt=""" width="150" height="100"/></div>'+'<center>Merupakan Taman Baca yang menyediakan buku-buku bacaan yang bisa memberikan wawasan dan pengetahuan bagi masyarakat desa Serang.</center>').addTo(map);
		L.marker([-7.22872, 109.28659], {icon: gedung}).bindPopup('<b><center>TPQ</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5716.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.24265, 109.28874], {icon: gedung}).bindPopup('<b><center>Serang Adventure SAD Pusat Informasi</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5651.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.24710, 109.29665], {icon: gedung}).bindPopup('<b><center>Tempat Pengolahan Strawberry</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5659.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Bapak/Ibu Jarman adalah salah satu warga Serang yang sukses dengan hasil olahan strawberry. Ada gethuk strawberry, keripik strawberry, dan sirup strawberry. Beliau bekerja dibantu oleh keluarga dan para tetangga. Bu Jarman tidak membuat toko oleh-oleh, tetapi hanya membuat jika ada pesanan saja. Beliau juga membuka kebun petik strawberry di belakang rumahnya. Saat ini, bu Jarma dan teman-temannya sedang belajar membuat aksesoris berupa rajutan. Keterampilan baru ini diharapkan dapat meningkatkan perekonomian warga Serang.</center>').addTo(map);
		L.marker([-7.26653, 109.30763]).bindPopup('<b><center>Pintu Masuk Desa Serang</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5675.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Merupakan Pintu Masuk dan Keluar ke/dari Desa Serang, Kecamatan Karangreja, Kabupaten Purbalingga, Propinsi Jawa Tengah. Pintu ini juga sebagai batas antara Desa Serang dengan Desa Sangkanayu.</center>').addTo(map);
		L.marker([-7.25559, 109.30201], {icon: gedung}).bindPopup('<b><center>TK Pertiwi 1 Serang</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5666.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.25046, 109.30173], {icon: gedung}).bindPopup('<b><center>Kuda Pustaka</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5684.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.24177, 109.28901], {icon: gedung}).bindPopup('<b><center>Perhutani Serang</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5731.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23926, 109.28816], {icon: gedung}).bindPopup('<b><center>Resort Polisi Hutan</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/Resort Polisi Hutan.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);
		L.marker([-7.23676, 109.28709], {icon: gedung}).bindPopup('<b><center>Poliklinik Desa Serang</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5724.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sebagai tempat Posyandu setiap sebulan sekali dan kegiatan kesehatan lainnya.</center>').addTo(map);
		L.marker([-7.23307, 109.27155], {icon: gedung}).bindPopup('<b><center>SDN 3 Serang</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150804_120418_HDR.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);

		L.marker([-7.24114, 109.28882], {icon: home}).bindPopup('<b><center>Homestay</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5729.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sebagai tempat menginap bagi para pengunjung, baik dari dalam maupun luar kota yang ingin bermalam atau sekedar beristirahat menikmati indahnya desa Serang.</center>').addTo(map);
		L.marker([-7.24033, 109.28803], {icon: home}).bindPopup('<b><center>Homestay</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/....jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sebagai tempat menginap bagi para pengunjung, baik dari dalam maupun luar kota yang ingin bermalam atau sekedar beristirahat menikmati indahnya desa Serang.</center>').addTo(map);
		L.marker([-7.23540, 109.28621], {icon: home}).bindPopup('<b><center>Homestay</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/....jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sebagai tempat menginap bagi para pengunjung, baik dari dalam maupun luar kota yang ingin bermalam atau sekedar beristirahat menikmati indahnya desa Serang.</center>').addTo(map);

		L.marker([-7.24867, 109.30049], {icon: gereja}).bindPopup('<b><center>Gereja</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5662.jpg")}}" alt=""" width="150" height="100"/></div>').addTo(map);

		L.marker([-7.22873, 109.28733], {icon: sayur}).bindPopup('<b><center>Sayur-Sayuran</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5719.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sayuran yang tumbuh di sini antara lain: kubis, sawi, wortel, jagung, dan daun bawang. Tidak semua lahan pertanian selalu ditanami dengan satu jenis tanaman sayuran. Para petani menggunakan sistem tanam tumpangsari di setiap lahannya. Mereka sering mengganti jenis tanaman sayuran setiap kali selesai panen. Biasanya, setelah selesai ditanam tomat, maka selanjutnya adalah sawi atau kubis. Namun, tidak semua jenis tanaman dapat menggantikan tanaman lain secara acak, contohnya wortel. Lahan wortel hanya dapat diganti dengan tanaman kubis. </center>').addTo(map);
		L.marker([-7.22775, 109.28586], {icon: sayur}).bindPopup('<b><center>Sayur-Sayuran</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150804_110817_HDR.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sayuran yang tumbuh di sini antara lain: sawi, daun bawang, dan wortel. Tidak semua lahan pertanian selalu ditanami dengan satu jenis tanaman sayuran. Para petani menggunakan sistem tanam tumpangsari di setiap lahannya. Mereka sering mengganti jenis tanaman sayuran setiap kali selesai panen. Biasanya, setelah selesai ditanam tomat, maka selanjutnya adalah sawi atau kubis. Namun, tidak semua jenis tanaman dapat menggantikan tanaman lain secara acak, contohnya wortel. Lahan wortel hanya dapat diganti dengan tanaman kubis. </center>').addTo(map);
		L.marker([-7.22821, 109.28298], {icon: sayur}).bindPopup('<b><center>Sayur-Sayuran</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150804_114954_HDR.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sayuran yang tumbuh di sini antara lain: kubis dan si bunga kuning. Tidak semua lahan pertanian selalu ditanami dengan satu jenis tanaman sayuran. Para petani menggunakan sistem tanam tumpangsari di setiap lahannya. Mereka sering mengganti jenis tanaman sayuran setiap kali selesai panen. Biasanya, setelah selesai ditanam tomat, maka selanjutnya adalah sawi atau kubis. Namun, tidak semua jenis tanaman dapat menggantikan tanaman lain secara acak, contohnya wortel. Lahan wortel hanya dapat diganti dengan tanaman kubis. </center>').addTo(map);
		L.marker([-7.24130, 109.29115], {icon: sayur}).bindPopup('<b><center>Sayur-Sayuran</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/P_20150811_112316.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sayuran yang tumbuh di sini antara lain: jagung dan daun bawang. Terdapat pula strawberry untuk konsumsi sendiri, tidak dijadikan sebagai kebun petik.Tidak semua lahan pertanian selalu ditanami dengan satu jenis tanaman sayuran. Para petani menggunakan sistem tanam tumpangsari di setiap lahannya. Mereka sering mengganti jenis tanaman sayuran setiap kali selesai panen. Biasanya, setelah selesai ditanam tomat, maka selanjutnya adalah sawi atau kubis. Namun, tidak semua jenis tanaman dapat menggantikan tanaman lain secara acak, contohnya wortel. Lahan wortel hanya dapat diganti dengan tanaman kubis. </center>').addTo(map);
		L.marker([-7.23776, 109.28659], {icon: sayur}).bindPopup('<b><center>Sayur-Sayuran</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5726.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Lahan pertanian di sini masih dalam proses pengolahan, biasanya ditanami kubis. Tidak semua lahan pertanian selalu ditanami dengan satu jenis tanaman sayuran. Para petani menggunakan sistem tanam tumpangsari di setiap lahannya. Mereka sering mengganti jenis tanaman sayuran setiap kali selesai panen. Biasanya, setelah selesai ditanam tomat, maka selanjutnya adalah sawi atau kubis. Namun, tidak semua jenis tanaman dapat menggantikan tanaman lain secara acak, contohnya wortel. Lahan wortel hanya dapat diganti dengan tanaman kubis. </center>').addTo(map);
		L.marker([-7.25808, 109.30264], {icon: sayur}).bindPopup('<b><center>Sayur-Sayuran</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5669.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sayuran yang tumbuh di sini antara lain: jagung dan kubis. Tidak semua lahan pertanian selalu ditanami dengan satu jenis tanaman sayuran. Para petani menggunakan sistem tanam tumpangsari di setiap lahannya. Mereka sering mengganti jenis tanaman sayuran setiap kali selesai panen. Biasanya, setelah selesai ditanam tomat, maka selanjutnya adalah sawi atau kubis. Namun, tidak semua jenis tanaman dapat menggantikan tanaman lain secara acak, contohnya wortel. Lahan wortel hanya dapat diganti dengan tanaman kubis. </center>').addTo(map);
		L.marker([-7.24788, 109.29472], {icon: sayur}).bindPopup('<b><center>Sayur-Sayuran</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5657.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sayuran yang tumbuh di sini antara lain: kubis dan sawi. Tidak semua lahan pertanian selalu ditanami dengan satu jenis tanaman sayuran. Para petani menggunakan sistem tanam tumpangsari di setiap lahannya. Mereka sering mengganti jenis tanaman sayuran setiap kali selesai panen. Biasanya, setelah selesai ditanam tomat, maka selanjutnya adalah sawi atau kubis. Namun, tidak semua jenis tanaman dapat menggantikan tanaman lain secara acak, contohnya wortel. Lahan wortel hanya dapat diganti dengan tanaman kubis. </center>').addTo(map);
		L.marker([-7.22809, 109.28474], {icon: sayur}).bindPopup('<b><center>Sayur-Sayuran</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/DSCF5715.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sayuran yang tumbuh di sini antara lain: daun bawang dan tomat. Terdapat pula strawberry untuk konsumsi sendiri, tidak dijadikan sebagai kebun petik. Tidak semua lahan pertanian selalu ditanami dengan satu jenis tanaman sayuran. Para petani menggunakan sistem tanam tumpangsari di setiap lahannya. Mereka sering mengganti jenis tanaman sayuran setiap kali selesai panen. Biasanya, setelah selesai ditanam tomat, maka selanjutnya adalah sawi atau kubis. Namun, tidak semua jenis tanaman dapat menggantikan tanaman lain secara acak, contohnya wortel. Lahan wortel hanya dapat diganti dengan tanaman kubis. </center>').addTo(map);
		L.marker([-7.22738, 109.28467], {icon: sayur}).bindPopup('<b><center>Sayur-Sayuran</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150804_111836.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sayuran yang tumbuh di sini antara lain: wortel, sawi, jagung, tomat, dan cabai. Tidak semua lahan pertanian selalu ditanami dengan satu jenis tanaman sayuran. Para petani menggunakan sistem tanam tumpangsari di setiap lahannya. Mereka sering mengganti jenis tanaman sayuran setiap kali selesai panen. Biasanya, setelah selesai ditanam tomat, maka selanjutnya adalah sawi atau kubis. Namun, tidak semua jenis tanaman dapat menggantikan tanaman lain secara acak, contohnya wortel. Lahan wortel hanya dapat diganti dengan tanaman kubis. </center>').addTo(map);
		L.marker([-7.22739, 109.28287], {icon: sayur}).bindPopup('<b><center>Sayur-Sayuran</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150804_114834_HDR.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sayuran yang tumbuh di sini antara lain: kubis dan wortel. Tidak semua lahan pertanian selalu ditanami dengan satu jenis tanaman sayuran. Para petani menggunakan sistem tanam tumpangsari di setiap lahannya. Mereka sering mengganti jenis tanaman sayuran setiap kali selesai panen. Biasanya, setelah selesai ditanam tomat, maka selanjutnya adalah sawi atau kubis. Namun, tidak semua jenis tanaman dapat menggantikan tanaman lain secara acak, contohnya wortel. Lahan wortel hanya dapat diganti dengan tanaman kubis. </center>').addTo(map);
		L.marker([-7.22757, 109.28158], {icon: sayur}).bindPopup('<b><center>Sayur-Sayuran</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150804_114916_HDR.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sayuran yang tumbuh di sini antara lain: sawi dan si bunga kuning. Tidak semua lahan pertanian selalu ditanami dengan satu jenis tanaman sayuran. Para petani menggunakan sistem tanam tumpangsari di setiap lahannya. Mereka sering mengganti jenis tanaman sayuran setiap kali selesai panen. Biasanya, setelah selesai ditanam tomat, maka selanjutnya adalah sawi atau kubis. Namun, tidak semua jenis tanaman dapat menggantikan tanaman lain secara acak, contohnya wortel. Lahan wortel hanya dapat diganti dengan tanaman kubis. </center>').addTo(map);
		L.marker([-7.22793, 109.27568], {icon: sayur}).bindPopup('<b><center>Sayur-Sayuran</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150804_120128_HDR.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sayuran yang tumbuh di sini antara lain: daun bawang, cabai, dan tomat. Tidak semua lahan pertanian selalu ditanami dengan satu jenis tanaman sayuran. Para petani menggunakan sistem tanam tumpangsari di setiap lahannya. Mereka sering mengganti jenis tanaman sayuran setiap kali selesai panen. Biasanya, setelah selesai ditanam tomat, maka selanjutnya adalah sawi atau kubis. Namun, tidak semua jenis tanaman dapat menggantikan tanaman lain secara acak, contohnya wortel. Lahan wortel hanya dapat diganti dengan tanaman kubis. </center>').addTo(map);
		L.marker([-7.22837, 109.27542], {icon: sayur}).bindPopup('<b><center>Sayur-Sayuran</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150804_120113_HDR.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sayuran yang tumbuh di sini antara lain: wortel, daun bawang, dan sawi. Tidak semua lahan pertanian selalu ditanami dengan satu jenis tanaman sayuran. Para petani menggunakan sistem tanam tumpangsari di setiap lahannya. Mereka sering mengganti jenis tanaman sayuran setiap kali selesai panen. Biasanya, setelah selesai ditanam tomat, maka selanjutnya adalah sawi atau kubis. Namun, tidak semua jenis tanaman dapat menggantikan tanaman lain secara acak, contohnya wortel. Lahan wortel hanya dapat diganti dengan tanaman kubis. </center>').addTo(map);
		L.marker([-7.22907, 109.27920], {icon: sayur}).bindPopup('<b><center>Sayur-Sayuran</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150804_115205_HDR.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sayuran yang tumbuh di sini antara lain: cabai, wortel, dan sawi. Tidak semua lahan pertanian selalu ditanami dengan satu jenis tanaman sayuran. Para petani menggunakan sistem tanam tumpangsari di setiap lahannya. Mereka sering mengganti jenis tanaman sayuran setiap kali selesai panen. Biasanya, setelah selesai ditanam tomat, maka selanjutnya adalah sawi atau kubis. Namun, tidak semua jenis tanaman dapat menggantikan tanaman lain secara acak, contohnya wortel. Lahan wortel hanya dapat diganti dengan tanaman kubis. </center>').addTo(map);
		L.marker([-7.22858, 109.27832], {icon: sayur}).bindPopup('<b><center>Sayur-Sayuran</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150804_115321.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sayuran yang tumbuh di sini antara lain: cabai dan daun bawang. Tidak semua lahan pertanian selalu ditanami dengan satu jenis tanaman sayuran. Para petani menggunakan sistem tanam tumpangsari di setiap lahannya. Mereka sering mengganti jenis tanaman sayuran setiap kali selesai panen. Biasanya, setelah selesai ditanam tomat, maka selanjutnya adalah sawi atau kubis. Namun, tidak semua jenis tanaman dapat menggantikan tanaman lain secara acak, contohnya wortel. Lahan wortel hanya dapat diganti dengan tanaman kubis. </center>').addTo(map);
		L.marker([-7.23590, 109.26468], {icon: sayur}).bindPopup('<b><center>Sayur-Sayuran</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150804_121126_HDR.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sayuran yang tumbuh di sini antara lain: tomat, daun bawang, dan cabai. Tidak semua lahan pertanian selalu ditanami dengan satu jenis tanaman sayuran. Para petani menggunakan sistem tanam tumpangsari di setiap lahannya. Mereka sering mengganti jenis tanaman sayuran setiap kali selesai panen. Biasanya, setelah selesai ditanam tomat, maka selanjutnya adalah sawi atau kubis. Namun, tidak semua jenis tanaman dapat menggantikan tanaman lain secara acak, contohnya wortel. Lahan wortel hanya dapat diganti dengan tanaman kubis. </center>').addTo(map);
		L.marker([-7.23598, 109.26501], {icon: sayur}).bindPopup('<b><center>Sayur-Sayuran</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150804_121217_HDR.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sayuran yang tumbuh di sini antara lain: kubis, daun bawang, dan wortel. Tidak semua lahan pertanian selalu ditanami dengan satu jenis tanaman sayuran. Para petani menggunakan sistem tanam tumpangsari di setiap lahannya. Mereka sering mengganti jenis tanaman sayuran setiap kali selesai panen. Biasanya, setelah selesai ditanam tomat, maka selanjutnya adalah sawi atau kubis. Namun, tidak semua jenis tanaman dapat menggantikan tanaman lain secara acak, contohnya wortel. Lahan wortel hanya dapat diganti dengan tanaman kubis. </center>').addTo(map);
		L.marker([-7.22840, 109.26978], {icon: sayur}).bindPopup('<b><center>Sayur-Sayuran</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150804_122621_HDR.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sayuran yang tumbuh di sini antara lain: tomat, wortel, dan cabai. Tidak semua lahan pertanian selalu ditanami dengan satu jenis tanaman sayuran. Para petani menggunakan sistem tanam tumpangsari di setiap lahannya. Mereka sering mengganti jenis tanaman sayuran setiap kali selesai panen. Biasanya, setelah selesai ditanam tomat, maka selanjutnya adalah sawi atau kubis. Namun, tidak semua jenis tanaman dapat menggantikan tanaman lain secara acak, contohnya wortel. Lahan wortel hanya dapat diganti dengan tanaman kubis. </center>').addTo(map);
		L.marker([-7.22945, 109.27007], {icon: sayur}).bindPopup('<b><center>Sayur-Sayuran</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150804_122341_HDR.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sayuran yang tumbuh di sini antara lain: daun bawang, wortel, dan jagung. Tidak semua lahan pertanian selalu ditanami dengan satu jenis tanaman sayuran. Para petani menggunakan sistem tanam tumpangsari di setiap lahannya. Mereka sering mengganti jenis tanaman sayuran setiap kali selesai panen. Biasanya, setelah selesai ditanam tomat, maka selanjutnya adalah sawi atau kubis. Namun, tidak semua jenis tanaman dapat menggantikan tanaman lain secara acak, contohnya wortel. Lahan wortel hanya dapat diganti dengan tanaman kubis. </center>').addTo(map);
		L.marker([-7.22968, 109.27462], {icon: sayur}).bindPopup('<b><center>Sayur-Sayuran</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150803_162553.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sayuran yang tumbuh di sini antara lain: daun bawang dan tomat. Terdapat pula strawberry untuk konsumsi sendiri, tidak dijadikan sebagai kebun petik. Tidak semua lahan pertanian selalu ditanami dengan satu jenis tanaman sayuran. Para petani menggunakan sistem tanam tumpangsari di setiap lahannya. Mereka sering mengganti jenis tanaman sayuran setiap kali selesai panen. Biasanya, setelah selesai ditanam tomat, maka selanjutnya adalah sawi atau kubis. Namun, tidak semua jenis tanaman dapat menggantikan tanaman lain secara acak, contohnya wortel. Lahan wortel hanya dapat diganti dengan tanaman kubis. </center>').addTo(map);
		L.marker([-7.23333, 109.27284], {icon: sayur}).bindPopup('<b><center>Sayur-Sayuran</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150803_163151.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sayuran yang tumbuh di sini antara lain: kubis, daun bawang, dan jagung. Tidak semua lahan pertanian selalu ditanami dengan satu jenis tanaman sayuran. Para petani menggunakan sistem tanam tumpangsari di setiap lahannya. Mereka sering mengganti jenis tanaman sayuran setiap kali selesai panen. Biasanya, setelah selesai ditanam tomat, maka selanjutnya adalah sawi atau kubis. Namun, tidak semua jenis tanaman dapat menggantikan tanaman lain secara acak, contohnya wortel. Lahan wortel hanya dapat diganti dengan tanaman kubis. </center>').addTo(map);
		L.marker([-7.23469, 109.26785], {icon: sayur}).bindPopup('<b><center>Sayur-Sayuran</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/IMG_20150803_165140.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Sayuran yang tumbuh di sini antara lain: kubis, daun bawang, dan si bunga kuning . Tidak semua lahan pertanian selalu ditanami dengan satu jenis tanaman sayuran. Para petani menggunakan sistem tanam tumpangsari di setiap lahannya. Mereka sering mengganti jenis tanaman sayuran setiap kali selesai panen. Biasanya, setelah selesai ditanam tomat, maka selanjutnya adalah sawi atau kubis. Namun, tidak semua jenis tanaman dapat menggantikan tanaman lain secara acak, contohnya wortel. Lahan wortel hanya dapat diganti dengan tanaman kubis. </center>').addTo(map);

		L.marker([-7.24062, 109.29091], {icon: house}).bindPopup('<b><center>Screenhouse</center><b>'+'<br>'+'<div style="text-align:center;"> <img src="{{URL::to("assets/img/peta/fotoku/P_20150811_112151.jpg")}}" alt=""" width="150" height="100"/></div>'+ '<br>' +'<center>Merupakan media tanaman yang berbentuk bangunan untuk melindungi tanaman dari serangan hama dan penyakit. Terdapat dua buah Screenhouse di Desa Serang ini, yang digunakan untuk pembibitan strawberry varietas baru.</center>').addTo(map);

		// dipanggil ketika tombol 'my location' ditekan
		function locateUser(){
			map.locate({setView : true});
			map.on('locationfound', onLocationFound);
			map.on('locationerror', onLocationError);
		}

		//dipanggil setelah lokasi ditemukan
		function onLocationFound(e) {
			var radius = e.accuracy / 2;

			L.marker(e.latlng).addTo(map)
			.bindPopup("You are within " + radius + " meters from this point" + "</br>" +
				"Koordinat: </br> Lintang: " + e.latlng.lat + "; Bujur: " + e.latlng.lng).openPopup();

			L.circle(e.latlng, radius).addTo(map);
		}

		function onLocationError(e) {
			alert(e.message);
		}

		</script>

		<script src="{{URL::to('assets/js/serang00.js')}}"></script>
		<script type="text/javascript">
		// control that shows state info on hover
		var info = L.control();

		info.onAdd = function (map) {
			this._div = L.DomUtil.create('div', 'info');
			this.update();
			return this._div;
		};

		info.update = function (props) {
			this._div.innerHTML = '<h1>INFORMASI</h1>' +  (props ?
				'<b>' + props.dusun + '</b>' + '<br/>' + props.rwrt0 +'<br/>' + props.rtrw00 +
				'<br/>' + 'Jumlah Penduduk = ' + props.total + ' Jiwa ' + 
				'<br/>' + 'Laki-Laki = ' + props.co + ' Jiwa ' + 
				'<br>' + 'Perempuan = ' + props.ce + ' Jiwa ' + '</br>'+ 
				'<br/>' +'<b><center>PERSENTASE TINGKAT PENDIDIKAN</justify></center></b>' +
				'Belum/Tidak Tamat SD = ' + props.belum + ' %' +
				'<br/>'+ 'SD/Sederajad = ' + props.sd + ' %' + 
				'<br/>'+ 'SMP/Sederajad = ' + props.smp + ' %' +
				'<br/>'+ 'SMA/Sederajad = ' + props.sma + ' %' +
				'<br/>'+ 'D-1 s/d S-3 = ' + props.kuliah + ' %'
				: '<b>Desa Serang, Karangreja, Purbalingga</b>');
		};

		info.addTo(map);

		// get color depending on population density value
		function getColor(d) {
			return d > 2250  ? '#FD8D3C' :
			d > 1500 ? '#FEB24C' :
			d > 750  ? '#FED976' :
			'#FFEDA0';
		}

		function style(feature) {
			return {
				weight: 2,
				opacity: 1,
				color: 'white',
				dashArray: '3',
				fillOpacity: 0.7,
				fillColor: getColor(feature.properties.total)
			};
		}

		function highlightFeature(e) {
			var layer = e.target;

			layer.setStyle({
				weight: 5,
				color: '#666',
				dashArray: '',
				fillOpacity: 0.7
			});

			if (!L.Browser.ie && !L.Browser.opera) {
				layer.bringToFront();
			}

			info.update(layer.feature.properties);
		}

		var geojson;

		function resetHighlight(e) {
			geojson.resetStyle(e.target);
			info.update();
		}

		function zoomToFeature(e) {
			map.fitBounds(e.target.getBounds());
		}

		function onEachFeature(feature, layer) {
			layer.on({
				mouseover: highlightFeature,
				mouseout: resetHighlight,
				click: zoomToFeature
			});
		}

		geojson = L.geoJson(statesData, {
			style: style,
			onEachFeature: onEachFeature
		}).addTo(map);

		map.attributionControl.addAttribution('Pariwisata dan Kependudukan &copy; <a href="http://www.desawisataserang.com/">Balai Desa Serang dan Dispendukcapil Kabupaten Purbalingga 2014</a>');


		var legend = L.control({position: 'bottomright'});

		legend.onAdd = function (map) {

			var div = L.DomUtil.create('div', 'info legend'),
			grades = [0, 750, 1500, 2250],
			labels = [],
			from, to;

			for (var i = 0; i < grades.length; i++) {
				from = grades[i];
				to = grades[i + 1];

				labels.push(
					'<i style="background:' + getColor(from + 1) + '"></i> ' +
					from + (to ? '&ndash;' + to : '+'));
			}

			div.innerHTML = labels.join('<br>');
			return div;
		};

		legend.addTo(map);

		new L.Control.GeoSearch({
			provider: new L.GeoSearch.Provider.Google()
		}).addTo(map);


		function showlokasi(latitude,longitude,marker)
		{
			marker.bindPopup('Ini lokasi yang dicari '+latitude+', '+longitude).openPopup();
		}

		var geolocate = document.getElementById('geolocate');

		if (!navigator.geolocation) {
			geolocate.innerHTML = 'Geolocation is not available';
		} else {
			geolocate.onclick = function (e) {
				e.preventDefault();
				e.stopPropagation();
				map.locate();
			};
		}

		</script>
	</div>

	@include('home.footer')
	<!-- SCRIPT -->
	<script>function myFunction() {location.reload();}</script>
</body>
</html>