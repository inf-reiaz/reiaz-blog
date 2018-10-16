
						
						
						<div class="posts_block mbf clearfix">
							
							<div class="title color5">
								<h4> সম্পর্কিত পোস্ট  </h4>
							</div>

							<div class="grid_4 alpha">
								<div class="mb float-shadow"><a href="{{ action('PublicPagesController@getSinglePost',$randmon->slug) }}"><img src="/public/front/img/{{ $randmon->image }}" alt="{{ $randmon->title }}"></a></div>
								<div class="post_m_content">
									<h3>
										 <a href="{{ action('PublicPagesController@getSinglePost',$randmon->slug) }}"> {{ $randmon->title }} </a> 
									</h3>
									<div class="meta mb"> {{ $randmon->date }} </div>
									<p>
										{{ substr(strip_tags($randmon->body), 0, 400) }}{{ strlen(strip_tags($randmon->body)) > 400 ? "... " : "" }}
										 
									</p>
									<p>[ <a href="{{ action('PublicPagesController@getSinglePost',$randmon->slug) }}">বিস্তারিত  </a>]</p>
								</div>
							</div>

							<div class="grid_8 omega">
								<div class="small_slider_music owl-carousel owl-theme">
									@foreach($relatedpost->chunk(3) as $posts)
									<div class="item clearfix">
										<ul class="small_posts">
											@foreach($posts as $post)
											<li class="clearfix">
												
												<a class="s_thumb float-shadow" href="{{ action('PublicPagesController@getSinglePost',$post->slug) }}">
													<img width="70" height="70" src="/public/front/img/{{ $post->image }}" alt="{{ $post->title }}">
												</a>
												
												<h3>
										 			<a href="{{ action('PublicPagesController@getSinglePost',$post->slug) }}">{{ $post->title }}</a> 
												</h3>
												<div class="meta mb">{{ $post->date }}</div>
												<p>
													{{ substr(strip_tags($post->body), 0, 500) }}{{ strlen(strip_tags($post->body)) > 500 ? "... " : "" }}
												
												</p>
												<p>	[ <a href="{{ action('PublicPagesController@getSinglePost',$post->slug) }}">বিস্তারিত  </a> ]	</p>
											</li>
											@endforeach
										</ul>
									</div>
									@endforeach
								</div>
							</div>
						</div>