<?php $me = App\About::find(1); ?>

	<div class="widget">
		<div class="title"><h4>আমি কে ?</h4></div>
		<img src="/public/front/img/{{ $me->image }}" alt="">
		<p style="margin-top:20px"> 
			<strong>
				{!! $me->about  !!}
			</strong>
		</p>
		
	</div>