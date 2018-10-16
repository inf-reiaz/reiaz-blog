<?php $data = App\Setting::find(1);?>
				<div class="grid_3">
					<div class="widget">
						<div class="title"><h4>নিউজলেটার</h4></div>
						<p> সর্বশেষ আপডেট এবং সর্বশেষ পোস্টগুলি আপনার ইমেলে পাবেন </p>
						<form id="newsletters">
							<input type="email" onfocus="if (this.value=='আপনার ইমেই এড্রেস টি টাইপ করুন') this.value = '';" onblur="if (this.value=='') this.value = 'আপনার ইমেই এড্রেস টি টাইপ করুন';"  placeholder="আপনার ইমেই এড্রেস টি টাইপ করুন" required="required">
							<button type="submit"><i class="icon-checkmark"></i></button>
						</form>
					</div>

					<div class="widget">
						<div class="title"><h4>আমাকে অনুসরণ করুন </h4></div>
						<div class="social">
							<a href="{{ $data->facebook }}" target="_blank" class="toptip" title="Facebook"><i class="fa-facebook"></i></a>
							<a href="{{ $data->twitter }}" target="_blank" class="toptip" title="Twitter"><i class="fa-twitter"></i></a>
							<a href="{{ $data->google_plus }}" target="_blank" class="toptip" title="Google Plus"><i class="fa-google-plus"></i></a>
							<a href="{{ $data->linkedin }}" target="_blank" class="toptip" title="Linkedin"><i class="fa-linkedin"></i></a>
							<a href="{{ $data->github }}" target="_blank" class="toptip" title="Github"><i class="fa-github"></i></a>
							<a href="{{ $data->instagram }}" target="_blank" class="toptip" title="instagram"><i class="fa-instagram"></i></a>
							<a href="{{ $data->youtube }}" target="_blank" class="toptip" title="youtube"><i class="fa-youtube"></i></a>
						</div>
					</div>
				</div>