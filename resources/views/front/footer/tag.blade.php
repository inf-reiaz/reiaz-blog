<?php 
	$tag = App\Tag::latest()->take(15)->get();
?>

				<div class="grid_3">
					<div class="widget">

						<div class="title"><h4>ব্লগের বিষয় গুলো</h4></div>
						<div class="tags">
							@foreach($tag as $t)
							<a href="{{ action('PublicPagesController@getTag',$t->slug) }}" title="{{ $t->name }}"> {{ $t->name }} </a>
							@endforeach
						</div>
					</div>
				</div>