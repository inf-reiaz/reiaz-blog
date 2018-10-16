@extends('front.app.layout')

@section('title')
	হোম
@endsection

@section('content')

			<div class="row clearfix">
				<div class="grid_9 alpha">
					<!--slider section-->
					@include('front.partials.slider')
					<!--slider section-->

					<div class="grid_12 omega posts righter">
						<!--post of the day-->
							@include('front.partials.post_of_the_day')
						<!--post of the day-->
						
						<!--category post-->
							@include('front.partials.category_1')
						<!--category post-->

						<!--category post-->
							@include('front.partials.category_2')
						<!--category post-->

						<!--category post-->
							@include('front.partials.category_3')
						<!--category post-->


					</div>

				</div>

				<!--left side bar-->
				@include('front.partials.left_side_bar')
				<!--left side bar-->
			</div>
@endsection
