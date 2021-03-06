<!-- FOOTER -->
<div class="footer">
	<div class="row">
		<div class="col-md-3">
			<h4>Hubungi Kami di</h4>
			<hr/>
			<ul class="list-unstyled">
				<li><i class="fa fa-phone"></i> 0852-9101-3121</a></li>
				<li><a href="mailto:serang_pbg@ymail.com" target="_blank"><i class="fa fa-envelope-o"></i> serang_pbg@ymail.com</a></li>
				<li><a href="https://www.google.co.id/maps/place/Serang,+Karangreja,+Purbalingga+Regency,+Central+Java/" target="_blank"><i class="fa fa-map-marker"></i> Jl. Raya Serang km 07 RT/RW 03/04, Purbalingga, Jawa Tengah 53357</a></li>
			</ul>
		</div>

		<div class="col-md-3">
			<h4>Temukan Kami di</h4>
			<hr/>
			<ul class="list-unstyled list-inline">
				<li>
					<a href="https://facebook.com/strawberryserang">
						<span>
							<i class="fa fa-facebook fa-2x"></i>
							Facebook
						</span>
					</a>
				</li><!-- 
				<li>
					<a href="https://twitter.com/">
						<span>
							<i class="fa fa-twitter fa-2x"></i>
							Twitter
						</span>
					</a>
				</li> -->
				<li>
					<a href="https://instagram.com/exploreserangpbg/">
						<span>
							<i class="fa fa-instagram fa-2x"></i>
							Instagram
						</span>
					</a>
				</li><!-- 
				<li>
					<a href="https://googleplus.com/">
						<span>
							<i class="fa fa-google-plus fa-2x"></i>
							Google+
						</span>
					</a>
				</li>
				<li>
					<a href="https://youtube.com/">
						<span>
							<i class="fa fa-youtube fa-2x"></i>
							Youtube
						</span>
					</a>
				</li> -->
			</ul>
		</div>

		<div class="col-md-6">
			<h4><a href="https://instagram.com/exploreserangpbg/">#exploreserangpbg</a></h4>
			<hr/>
			<?php
				// function fetchData($url){
				// 	$ch = curl_init();
				// 	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				// 	curl_setopt($ch, CURLOPT_URL, $url);
				// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				// 	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
				// 	$result = curl_exec($ch);
				// 	curl_close($ch);
				// 	return $result;
				// }
				// $result = fetchData("https://api.instagram.com/v1/users/1779862945/media/recent/?access_token=1779862945.ab103e5.efc62c04fcda46d6a4fe23395ff09dce&count=18");
				// $result = json_decode($result,true);
				// echo "<div class='instapic-box'>";
				// foreach ($result["data"] as $post) {
				// 	echo "<div class='col-md-2 col-xs-2 '>";
				// 	echo "<a href=".$post['link']."><img src=".$post['images']['thumbnail']['url']." alt='' class='img-responsive  instapic'></a>";
				// 	echo "</div>";
				// }
				// echo "</div>";
			?>
		</div>

	</div>
	<div class="text-center">© KKN UGM 2015</div>
</div>

<!-- SCRIPT -->
<script src="{{URL::to('vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{URL::to('vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{URL::to('vendor/lightbox/dist/js/lightbox-plus-jquery.min.js')}}"></script>
<script src="{{URL::to('vendor/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{URL::to('assets/js/owl.carousel.js')}}"></script>
<script src="{{URL::to('assets/js/dropzone.js')}}"></script>
<script src="{{URL::to('assets/js/Chart.js')}}"></script>
<script src="{{URL::to('assets/js/site.js')}}"></script>
<!-- FOOTER END-->