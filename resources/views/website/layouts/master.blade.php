<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title id='title'>Creative Web | @yield('title')</title>

	<!-- =============== Bootstrap Core CSS =============== -->
	<link rel="stylesheet" href="{{url('website/assets/css/bootstrap.min.css')}}" type="text/css">
	<!-- =============== fonts awesome =============== -->
	<link rel="stylesheet" href="{{url('website/assets/font/css/font-awesome.min.css')}}" type="text/css">
	<!-- =============== Plugin CSS =============== -->
	<link rel="stylesheet" href="{{url('website/assets/css/animate.min.css')}}" type="text/css">
	<!-- =============== Custom CSS =============== -->
	<link rel="stylesheet" href="{{url('website/assets/css/style.css')}}" type="text/css">
	<!-- =============== Owl Carousel Assets =============== -->
	<link href="{{url('website/assets/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
	<link href="{{url('website/assets/owl-carousel/owl.theme.css')}}" rel="stylesheet">

	<link rel="stylesheet" href="{{url('website/assets/css/isotope-docs.css')}}" media="screen">
	<link rel="stylesheet" href="{{url('website/assets/css/baguetteBox.css')}}">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
    <![endif]-->

    @yield('css')

</head>

<body>
	

	@include('website.layouts.banner')

    
    @yield('content')

	
    @include('website.layouts.footer')


    @yield('js')


	<script src="{{url('website/assets/js/script.js')}}"></script>
	
	<!-- =============== jQuery =============== -->
	<script src="{{url('website/assets/js/jquery.js')}}"></script>
	<script src="{{url('website/assets/js/isotope-docs.min.js')}}"></script>
	<!-- =============== Bootstrap Core JavaScript =============== -->
	<script src="{{url('website/assets/js/bootstrap.min.js')}}"></script>
	<!-- =============== Plugin JavaScript =============== -->
	<script src="{{url('website/assets/js/jquery.easing.min.js')}}"></script>
	<script src="{{url('website/assets/js/jquery.fittext.js')}}"></script>
	<script src="{{url('website/assets/js/wow.min.js')}}"></script>
	<!-- =============== owl carousel =============== -->
	<script src="{{url('website/assets/owl-carousel/owl.carousel.js')}}"></script>
	<!-- Isotope does NOT require jQuery. But it does make things easier -->

	<script src="{{url('website/assets/js/baguetteBox.js')}}" async></script>
	<script src="{{url('website/assets/js/plugins.js')}}" async></script>

	<!-- =============== Custom Theme JavaScript =============== -->
	<script src="{{url('website/assets/js/creative.js')}}"> </script>
	<script src="{{url('website/assets/js/jquery.nicescroll.min.js')}}"></script>

	<script>
		$(document).ready(function () {

			var nice = $("html").niceScroll(); // The document page (body)

			$("#div1").html($("#div1").html() + ' ' + nice.version);

			$("#boxscroll").niceScroll({
				cursorborder: "",
				cursorcolor: "#00F",
				boxzoom: true
			}); // First scrollable DIV

			$("#boxscroll2").niceScroll("#contentscroll2", {
				cursorcolor: "#F00",
				cursoropacitymax: 0.7,
				boxzoom: true,
				touchbehavior: true
			}); // Second scrollable DIV
			$("#boxframe").niceScroll("#boxscroll3", {
				cursorcolor: "#0F0",
				cursoropacitymax: 0.7,
				boxzoom: true,
				touchbehavior: true
			}); // This is an IFrame (iPad compatible)

			$("#boxscroll4").niceScroll("#boxscroll4 .wrapper", {
				boxzoom: true
			}); // hw acceleration enabled when using wrapper

		});
	</script>
	<script>
		window.onload = function () {
			if (typeof oldIE === 'undefined' && Object.keys)
				hljs.initHighlighting();

			baguetteBox.run('.baguetteBoxOne');
			baguetteBox.run('.baguetteBoxTwo');
			baguetteBox.run('.baguetteBoxThree', {
				animation: 'fadeIn'
			});
			baguetteBox.run('.baguetteBoxFour', {
				buttons: false
			});
			baguetteBox.run('.baguetteBoxFive', {
				captions: function (element) {
					return element.getElementsByTagName('img')[0].alt;
				}
			});
		};
	</script>
</body>

</html>
