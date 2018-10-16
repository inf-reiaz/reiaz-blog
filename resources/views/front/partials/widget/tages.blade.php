<?php 
	$tags = App\Tag::all();
?>

	<div class="widget">
		<div class="title"><h4>ব্লগের বিষয় গুলো</h4></div>
		<div class="tags">
			@foreach($tags as $tag)
				<a href="{{ action('PublicPagesController@getTag',$tag->slug) }}"> {{ $tag->name }}</a>
			@endforeach
		</div>
	</div>