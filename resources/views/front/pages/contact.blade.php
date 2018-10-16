@extends('front.app.layout')

@section('title')
	Contact
@endsection



@section('content')

			<div class="row clearfix">
				<div class="grid_9 alpha">

					<div class="grid_12 omega posts righter">
						<div class="grid_12 alpha posts">
						<div class="title"><h4>আমার সাথে যোগাযোগ করুন</h4></div>

						<div class="mbf">
							<iframe height="300" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=dhaka+mirpur+14&oq=dhaka+mirpur+14&amp;aq=0&amp;oq=New+yok&amp;sll=23.7953753,90.3803809&amp;sspn=23.7953753,90.3803809&amp;ie=UTF8&amp;hq=&amp;hnear=mirpur+14&amp;t=m&amp;z=10&amp;ll=23.7953753,90.3803809&amp;output=embed"></iframe>
						</div>
						
						{!! Form::open(['url'=>action('PublicPagesController@postContact'),'id'=>'contactForm', 'method'=>'post']) !!}
							
							<div class="clearfix">
								
								<div class="grid_6 alpha fll">
									{!! Form::text('name', null , ['class'=>'form-control requiredField','id'=>'senderName','placeholder'=>'name *','required']) !!}
								</div>
								
								<div class="grid_6 omega flr">
									{!! Form::text('email', null , ['class'=>'form-control','id'=>'senderEmail','placeholder'=>'Email','required']) !!}
								</div>
								
							</div>
							
							<div>
								<textarea name="message" id="message" placeholder="Message *" class="requiredField" rows="8"></textarea>
							</div>
							
							<input type="submit" id="sendMessage" name="sendMessage" value="Send Email">
							
		    			{!! Form::close() !!}

					</div>

					</div>
					

				</div>

				@include('front.partials.left_side_bar')
			</div>
			
			
			
			
@endsection
