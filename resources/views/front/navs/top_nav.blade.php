<?php $data = App\Setting::find(1);?>
			<div class="a_head">
				<div class="row clearfix">

					<div class="right_bar">
						<!--<div class="social social_head">-->
						<!--	<a href="#" class="bottomtip" title="Twitter"><i class="fa-twitter"></i></a>-->
						<!--	<a href="#" class="bottomtip" title="Facebook"><i class="fa-facebook"></i></a>-->
						<!--	<a href="#" class="bottomtip" title="Google Plus"><i class="fa-google-plus"></i></a>-->
						<!--	<a href="#" class="bottomtip" title="Linkedin"><i class="fa-linkedin"></i></a>-->
						<!--	<a href="#" class="bottomtip" title="Github"><i class="fa-github"></i></a>-->
						<!--	<a href="#" class="bottomtip" title="instagram"><i class="fa-instagram"></i></a>-->
						<!--	<a href="#" class="bottomtip" title="Dribbble"><i class="fa-dribbble"></i></a>-->
						<!--</div>-->
						
						<div class="social social_head">
							<a href="{{ $data->facebook }}" target="_blank" class="toptip" title="Facebook"><i class="fa-facebook"></i></a>
							<a href="{{ $data->twitter }}" target="_blank" class="toptip" title="Twitter"><i class="fa-twitter"></i></a>
							<a href="{{ $data->google_plus }}" target="_blank" class="toptip" title="Google Plus"><i class="fa-google-plus"></i></a>
							<a href="{{ $data->linkedin }}" target="_blank" class="toptip" title="Linkedin"><i class="fa-linkedin"></i></a>
							<a href="{{ $data->github }}" target="_blank" class="toptip" title="Github"><i class="fa-github"></i></a>
							<a href="{{ $data->instagram }}" target="_blank" class="toptip" title="instagram"><i class="fa-instagram"></i></a>
							<a href="{{ $data->youtube }}" target="_blank" class="toptip" title="youtube"><i class="fa-youtube"></i></a>
						</div>

						<span id="date_time"></span>
					</div>
				</div>
			</div>