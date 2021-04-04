<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>COODESCOR</title>
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- Styles -->
        

        <!-- Custom-Files -->
        
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <!-- Bootstrap-Core-CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" />
		<link rel="stylesheet" href="{{ asset('css/blog.css') }}" type="text/css" media="all" />
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" media="all" />
        <!-- Style-CSS -->
        <link rel="stylesheet" href="{{ asset('css/fontawesome.all.min.css') }}">
        <!-- Font-Awesome-Icons-CSS -->

        <!-- //Custom-Files -->

        <!-- Web-Fonts -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" 
            rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
            rel="stylesheet">
        <!-- //Web-Fonts -->
		{{-- <script src="https://use.fontawesome.com/8313c77f9c.js"></script> --}}
    </head>
    <body>
    <!-- header -->
	 	@include('partials.topbar')
	<!-- //top-bar -->

	<!-- header 2 -->
		@include('partials.menu')
	<!-- //header 2 -->
	<!-- social media vertical -->
		@include('partials.socialmedia')
	<!-- end social media vertical -->

		@yield('content')
		
	<!-- footer -->
		@include('partials.footer')
    <!-- //footer -->
    
    <!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- banner slider -->
	<script src="js/responsiveslides.min.js"></script>   
	<!-- js -->
    
	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/medic.js"></script>

	<script src="js/bootstrap.min.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->
	<script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->
	<!-- //Js files -->
    </body>
</html>