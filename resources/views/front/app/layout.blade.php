
<!DOCTYPE>
<html>
<head>
	@include('front.partials.head')
	@include('front.partials.facebook_script')
</head>
<body>
	<div id="layout" class="boxed">
		
		<!--header-->
		@include('front.partials.header')
		<!--header-->

		<div class="page-content">
		    @yield('content')
		</div>

		
		@include('front.footer.footer')

	</div>

	<!-- Scripts -->
	@include('front.partials.scripts')
	<!-- Scripts -->
</body>
</html>