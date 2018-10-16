
<?php 
	$popular = App\Post::latest()->popular()->take(3)->get();
?>
				<div class="grid_3">
					<div class="widget">
						<div class="title"><h4>জনপ্রিয় পোষ্ট</h4></div>
						<ul class="small_posts">
							@foreach($popular as $post)
							<li class="clearfix">
								<a class="s_thumb float-shadow" href="{{ action('PublicPagesController@getSinglePost',$post->slug) }}">
									<img width="70" height="70" src="/public/front/img/{{ $post->image }}" alt="{{ $post->title }}">
								</a>
								<h3><a href="{{ action('PublicPagesController@getSinglePost',$post->slug) }}">{{ $post->title }}</a></h3>
								<div class="meta mb"> 
								@foreach($post->categories->take(1) as $ctg)
									<a class="cat color5" href="{{ action('PublicPagesController@getTag',$ctg->slug) }}">{{  $ctg->name }}</a>
								 @endforeach
								</div>
							</li>
							@endforeach
						</ul>
					</div>
				</div>