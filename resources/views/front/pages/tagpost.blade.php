@extends('front.app.layout')

@section('title')
	হোমা
@endsection

@section('content')

			<div class="row clearfix">
				<div class="grid_9 alpha">

					<div class="grid_12 omega posts righter">
						<!--post of the day-->
							@include('front.partials.tag_page')
						<!--post of the day-->

					</div>

				</div>

				@include('front.partials.left_side_bar')
			</div>
@endsection
