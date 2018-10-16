@extends('front.app.layout')

@section('title')
	{{ $post->title }}
@endsection

@section('css')
	<style type="text/css">
		.fb-share-button span {
			background: transparent;
		}
	
	.share_post>.sear {
		     color: #fff; 
		    background: #e84a4a;
		    float: left;
		    padding: 4px 10px;
		}
		.share_post span {
		    color: #fff;
		     background: transparent; 
		    float: left;
		    padding: 0px 2px;
		    padding-top: 0px;
		}
		
		
			
			.share_post .socials {
			    float: left;
			    padding: 5px 0px 0px 15px;
			}
		
	</style>
	
@endsection


@section('content')

			<div class="row clearfix">
				<div class="grid_9 alpha">

					<div class="grid_12 omega posts righter">
						
						<div class="grid_12 alpha posts">
	
							<div class="single_post mbf clearfix">
								
								<h3 class="single_title"> <i class="icon-document-edit mi"></i>
									<a href="">{{$post->title}}</a>
								</h3>
								
								<div class="meta mb"> by  <a href="#">reiaz</a>  / {{ $post->date }} </div>
	
								
								{!! $post->body !!}
								
							</div>
	
							<div class="share_post mbf clearfix">
								
								<span class="sear"> Share </span>
								<div class="socials clearfix">
									<!--facebook-->
									<span class="me">
									<div class="fb-like" data-href="{{ Request::url() }}" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>

									</span>
									<!--facebook-->
									<!--twitter sear button-->
									<a href="{{ Request::url() }}" class="twitter-share-button" data-via="inf_reiaz" data-hashtags="love" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
									<!--twitter sear button-->
									
									<!--linkdin sear button-->
									<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
									<script type="IN/Share" data-url="{{ Request::url() }}"></script>
									<!--linkdin sear button-->
									
									<!--G+ shear button-->
									<!-- এই ট্যাগটি রাখুন, আপনি রেন্ডারে যেখানে বোতামগুলি শেয়ার করুন-কে চান৷ -->
										<div class="g-plus" data-action="share" data-href="{{ Request::url() }}"></div>
										
										<!-- শেষ শেয়ার করুন ট্যাগের পর এই ট্যাগ রাখুন৷ -->
										<script type="text/javascript">
										  window.___gcfg = {lang: 'bn'};
										
										  (function() {
										    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
										    po.src = 'https://apis.google.com/js/platform.js';
										    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
										  })();
										</script>
									<!--G+ shear button-->
									<!--<img src="/public/front/images/assets/share.png" alt="">-->
								</div>
							</div>
							
							<div class="share_post mbf clearfix">
								
									<div class="fb-comments" data-href="{{ Request::url() }}" data-width="100%" data-numposts="10"></div>
									
							</div>
	
						</div>

					</div>
					
					<div class="grid_12 omega posts righter"> 
							@include('front.partials.related_post')
					</div>

				</div>

				@include('front.partials.left_side_bar')
			</div>
			
			
			
			
@endsection
