
		<script type="text/javascript" src="/public/front/js/jquery.min.js"></script>
		<script type="text/javascript" src="/public/front/js/ipress.js"></script>
		<script type="text/javascript" src="/public/front/js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="/public/front/js/jquery.ticker.js"></script>
		<script type="text/javascript" src="/public/front/js/custom.js"></script>

		<script type="text/javascript">
		
			function date_time(id){
				date = new Date;
				year = date.getFullYear();
				month = date.getMonth();
				months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
				d = date.getDate();
				day = date.getDay();
				days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
				h = date.getHours();
				if(h<10){
					h = "0"+h;}
					m = date.getMinutes();
					if(m<10){
						m = "0"+m;
					}
					s = date.getSeconds();
					if(s<10){
						s = "0"+s;
					}
				// result = ''+days[day]+' '+months[month]+' '+d+' '+year+' '+h+':'+m+':'+s;
				result = ''+days[day]+' '+d+' '+months[month]+' '+year;
				document.getElementById(id).innerHTML = result;
				setTimeout('date_time("'+id+'");','1000');
				return true;
			}
			window.onload = date_time('date_time');
		
		</script>
		
		@yield('js')