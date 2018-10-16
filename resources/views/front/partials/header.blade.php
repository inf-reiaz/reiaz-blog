<?php $data = App\Setting::find(1);?>
		<header id="header">
		    @include('front.navs.top_nav')

			<div class="b_head">
				<div class="row clearfix">
					<div class="logo">
						<a href="{{ action('PublicPagesController@getIndex') }}" title="logo"><img src="/public/front/img/{{ $data->website_logo }}" alt="Abdul Halim Reiaz"></a>
					</div>
	
				</div>
			</div>

			<div class="row clearfix">
				<div class="sticky_true">
					
					@include('front.navs.main_nav')
					
				</div>
			</div>
		</header>