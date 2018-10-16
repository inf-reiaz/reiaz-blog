				
				<?php 
					$popular = App\Post::popular()->take(8)->get();
				?>

					<div class="widget">
						<div class="title"><h4>জনপ্রিয় লিখা গুলো </h4></div>

							<div class="small_slider_hots owl-carousel owl-theme">

								@foreach($popular->chunk(4) as $posts)
								<div class="item clearfix">
									<ul class="small_posts">
										@foreach($posts as $post)
										<li class="clearfix">
											<a class="s_thumb float-shadow" href="{{ action('PublicPagesController@getSinglePost',$post->slug) }}">
												<img width="70" height="70" src="/public/front/img/{{ $post->image }}" alt="{{ $post->title }}">
											</a>
											<h3><a href="{{ action('PublicPagesController@getSinglePost',$post->slug) }}">{{ $post->title }}</a></h3>
											<div class="meta mb">
												@foreach($post->categories->take(1) as $ctg)
													<a class="cat color1" href="{{ action('PublicPagesController@getTag',$ctg->slug) }}">{{ $ctg->name }} </a>
												@endforeach
												<span class="post_rating">{{ $post->view_count }} বার পড়া হয়েছে </span>
											</div>
										</li>
										@endforeach
										
									</ul>
								</div>
								@endforeach
							</div>
					</div>