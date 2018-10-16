
						<div class="posts_block mbf clearfix">
							
							<div class="title color5">
								<h4> প্রোগ্রামিং  </h4>
							</div>

							<div class="grid_4 alpha">
								<div class="mb float-shadow"><a href=""><img src="/public/front/img/{{ $programing_one->image }}" alt=""></a></div>
								<div class="post_m_content">
									<h3>
										 <a href="{{ action('PublicPagesController@getSinglePost',$programing_one->slug) }}">{{ $programing_one->title }}</a> 
									</h3>
									<div class="meta mb">{{ $programing_one->date }}</div>
									<p>
										{{ substr(strip_tags($new_post->body), 0, 350) }}{{ strlen(strip_tags($new_post->body)) > 350 ? "... " : "" }}
									</p>
									<div class="meta mb">[ <a href="{{ action('PublicPagesController@getSinglePost',$programing_one->slug) }}">বিস্তারিত  </a> ] </div>
								</div>
							</div>

							<div class="grid_8 omega">
								<div class="small_slider_music owl-carousel owl-theme">
									@foreach($programings->chunk(3) as $posts)
										
									<div class="item clearfix">
										<ul class="small_posts">
										@foreach($posts as $p)
											<li class="clearfix">
												<a class="s_thumb float-shadow" href="{{ action('PublicPagesController@getSinglePost',$p->slug) }}">
													<img width="70" height="70" src="/public/front/img/{{ $p->image }}" alt="{{ $p->title }}">
												</a>
												
												<h3>
										 			<a href="{{ action('PublicPagesController@getSinglePost',$p->slug) }}">{{ $p->title }}</a> 
												</h3>
												<div class="meta mb"> {{ $p->date }} </div>
													<p>
													{{ substr(strip_tags($p->body), 0, 350) }}{{ strlen(strip_tags($p->body)) > 350 ? "... " : "" }}
													
													</p>
												<div class="meta mb">[ <a href="{{ action('PublicPagesController@getSinglePost',$p->slug) }}">বিস্তারিত  </a> ] </div>
											</li>
										@endforeach
										</ul>
									</div>
									@endforeach
								</div>
							</div>
							
						</div>