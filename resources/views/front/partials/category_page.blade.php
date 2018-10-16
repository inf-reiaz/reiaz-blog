
						<div class="post_day mbf clearfix">
							<div class="title colordefault"><h4> {{ $category->name  }} </h4></div>
						</div>
						
						@if($ctgposts->count()>0)
							@foreach($ctgposts as $post)
							
							<div class="post_day mbf clearfix">
								
								<div class="grid_2 alpha relative">
									<a class="cat" href="{{ action('PublicPagesController@getCategory',$post->slug) }}" title="{{ $category->name  }}">{{ $category->name  }}</a>
									<a class="float-shadow" href="{{ action('PublicPagesController@getSinglePost',$post->slug) }}">
										<img src="/public/front/img/{{ $post->image }}" alt="{{ $post->title }}">
									</a>
								</div>
								
								<div class="grid_10 omega">
									<div class="post_day_content">
										
										<h3> <a href="{{ action('PublicPagesController@getSinglePost',$post->slug) }}">{{ $post->title }} </a> </h3>
										
										<div class="meta mb">{{ $post->date }}</div>
										<p>
											{{ substr(strip_tags($post->body), 0, 250) }}{{ strlen(strip_tags($post->body)) > 250 ? "... " : "" }}
										
										</p>
										<p>	[ <a href="{{ action('PublicPagesController@getSinglePost',$post->slug) }}">বিস্তারিত  </a> ]</p>
										
									</div>
								</div>
								
							</div>
							
							@endforeach
						@else
							<div class="post_day mbf clearfix">
								<div class="notification-box notification-box-success">
									<p>দুঃখিত এই বিষয়ে কোন ব্লগ এখনো লিখা হয় নি । </p>
									<a href="{{ action('PublicPagesController@getIndex') }}"> <strong>   হোম পেইজ ফিরে যান </strong></a>
								</div>
							</div>
						@endif
						
						
						
						<div class="pagination-tt clearfix">
							{{ $ctgposts->links() }}
						</div>