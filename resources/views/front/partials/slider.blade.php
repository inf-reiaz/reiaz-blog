	
	<?php $sliders = App\Slider::orderBy('id', 'desc')->take(4)->get(); ?>

					<div class="ipress_slider mbf">
						<div class="slider_a owl-carousel owl-theme">
							@foreach($sliders as $s)
							<div class="item clearfix">
								<div class="">
									<div class="slide_details">
										<h3 style="color: #fff">{{ $s->title }}</h3>
									</div>
									<img src="/public/front/img/{{ $s->image }}" alt="">
								</div>
							</div>
							@endforeach
							

						</div>
					</div>