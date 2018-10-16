

						<div class="post_day mbf clearfix">
							<div class="title colordefault"><h4> নতুন পোষ্ট  </h4></div>

							<div class="grid_4 alpha relative">
								<a class="cat" href="#" title="{{ $new_post->title }}">@foreach($new_post->categories->take(1) as $ctg){{  $ctg->name }} @endforeach</a>
								<a class="float-shadow" href="{{ action('PublicPagesController@getSinglePost',$new_post->slug) }}"><img src="/public/front/img/{{ $new_post->image }}" alt="{{ $new_post->title }}"></a>
								
							</div>

							<div class="grid_8 omega">
								<div class="post_day_content">
									
									<h3> <a href="{{ action('PublicPagesController@getSinglePost',$new_post->slug) }}"> {{ $new_post->title }} </a> </h3>
									
									<div class="meta mb">{{ $new_post->date }} </div>
									<p>
										{{ substr(strip_tags($new_post->body), 0, 500) }}{{ strlen(strip_tags($new_post->body)) > 500 ? "... " : "" }}
										[ <a href="{{ action('PublicPagesController@getSinglePost',$new_post->slug) }}">বিস্তারিত  </a> ]
									</p>
									
								</div>
							</div>
						</div>
						