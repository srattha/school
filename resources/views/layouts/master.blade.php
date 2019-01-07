<!DOCTYPE html>
<html  ng-app="app">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title></title>
	<!-- Global stylesheets -->
	<link href="{{ asset('assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('assets/css/colors.css') }}" rel="stylesheet" type="text/css">


	<!-- /theme JS files -->
	<script type="text/javascript" src="{{ asset('assets/js/core/libraries/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/core/libraries/bootstrap.min.js') }}"></script>
	<!-- Angular JS files -->
	<script type="text/javascript" src="{{ asset('assets/js/angular/angular.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/angular/app.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/angular/service.js') }}"></script>

	@yield('css')
	<!-- <style type="text/css">
	#overlay{
		position:fixed;
		z-index:99999;
		top:0;
		left:0;
		bottom:0;
		right:0;
		background:#f5f5f7;
		transition: 1s 0.4s;
	}
	#progress{
		height:5px;
		background:#0f6d7b;
		position:absolute;
		width:0;                
		top:50%;
	}
	#progstat{
		font-size:24px;
		letter-spacing: 3px;
		position:absolute;
		top:50%;
		margin-top:-40px;
		width:100%;
		text-align:center;
		color:#0f6d7b;
	}
</style> -->
<!-- <script type="text/javascript">
	;(function(){
		function id(v){ return document.getElementById(v); }
		function loadbar() {
			var ovrl = id("overlay"),
			prog = id("progress"),
			stat = id("progstat"),
			img = document.images,
			c = 0,
			tot = img.length;
			if(tot == 0) return doneLoading();

			function imgLoaded(){
				c += 1;
				var perc = ((100/tot*c) << 0) +"%";
				prog.style.width = perc;
				stat.innerHTML = "Loading "+ perc;
				if(c===tot) return doneLoading();
			}
			function doneLoading(){
				ovrl.style.opacity = 0;
				setTimeout(function(){ 
					$('.sidebar-category').fadeIn();
					$('.navbar-right').fadeIn();
				}, 300);

				setTimeout(function(){ 
					ovrl.style.display = "none";
				}, 1500);
			}
			for(var i=0; i<tot; i++) {
				var tImg     = new Image();
				tImg.onload  = imgLoaded;
				tImg.onerror = imgLoaded;
				tImg.src     = img[i].src;
			}    
		}
		document.addEventListener('DOMContentLoaded', loadbar, false);
	}());
</script> -->
<style type="text/css">
.gallery
{
	display: inline-block;
	margin-top: 20px;
}
.border{
	background-color: #fff;
	border-radius: 3px;
	box-shadow: 0 0 6px rgba(0,0,0,0.1);
}
.line{
	height: 2px;display: block;background: #85b910;
}
</style>

</head>

<body style="background-color: #e5e5e5;" class="navbar-top">
	<div id="overlay">
		<div id="progstat"></div>
		<div id="progress"></div>
	</div>
	@include('layouts.main_navbar')
	<!-- Page container -->
	<div class="page-container">
		<!-- Page content -->
		<div class="page-content">
			
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">
					<div class="container border">
						@yield('content')
						<br>
						<span class="line"></span>	
						<br>
						@include('layouts.footer')
					</div>
				</div>
				<!-- /content area -->
			</div>
			<!-- /main content -->
		</div>
		<!-- /page content -->
	</div>
	<!-- /page container -->

	
</body>

@yield('script')
</html>
