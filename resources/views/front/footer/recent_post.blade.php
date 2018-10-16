
<?php 
	$new_posts = App\Post::latest()->take(3)->get();
?>

				<div class="grid_3">
					<div class="widget">
						
						<div class="title"><h4>নতুন পোষ্ট</h4></div>
						
						<ul class="small_posts">
							@foreach($new_posts as $post)
							<li class="clearfix">
								<a class="s_thumb float-shadow" href="{{ action('PublicPagesController@getSinglePost',$post->slug) }}">
									<img width="70" height="70" src="/public/front/img/{{ $post->image }}" alt="{{ $post->title }}">
								</a>
								<h3><a href="{{ action('PublicPagesController@getSinglePost',$post->slug) }}">{{ $post->title }}</a></h3>
								<div class="meta mb">{{ $post->date }}</div>
							</li>
							@endforeach
						</ul>
					</div><!-- /widget -->
				</div>