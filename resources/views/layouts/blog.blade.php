<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('page-title', config('app.name', 'Laravel'))</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="description" content="@yield('meta-content', 'Pagina web COODESCOR')" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('css/blog/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('css/blog/app.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('css/fontawesome.all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    {!! htmlScriptTagJsApi(['lang' => 'es']) !!}
</head>

<body>
    <div class="header-top-w3layouts">
        <header>
            {{-- <div class="top-head text-left container-fluid">
                <div class="row honey-leo">
                     <div class="col-md-6 left-info footer-grid-w3ls">
                           <ul class="social mt-lg-0 mt-3 d-flex">
                                <li class="mr-1"><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li class="mx-1"><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li class="mx-1"><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                <li class="mx-1"><a href="#"><span class="fab fa-linkedin-in"></span></a></li>

                            </ul>
                    </div>
                    <div class="col-md-6 right-p text-right">
                        <ul>
                            <li>
                               <span class="fas fa-phone-volume"></span> 0098-765-4321</li>
                            <li>
                                <span class="far fa-clock"></span> ( Mon-Fri 9am - 8pm ) ( Sat-Sun 10am - 6pm )</li>
                        </ul>
                    </div>
                </div>
            </div> --}}
          <nav class="navbar navbar-expand-lg navbar-light">
                <div class="logo-w3">
                    <h1>
                        <a class="navbar-brand" href="/">
                            <img class="logo" src="{{ asset('images/logo.png') }}" alt="logo">
                        </a>
                    </h1>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                
                            </span>

                        </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Inicio
                                        <span class="sr-only">(current)</span>
                                    </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">Nosotros</a>
                        </li>                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       COODESCOR<i class="fas fa-angle-down"></i></a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('services') }}" title="Servicios">Servicios</a>
                                <a class="dropdown-item" href="{{ route('partner') }}" title="Asociados">Asociados</a>
                                <a class="dropdown-item" href="{{ route('blog') }}" title="Blog">Blog</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('news') }}" title="Noticias">Noticias</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contactanos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pqrs') }}">PQRS</a>
                        </li>
                    </ul>

                </div>
            </nav>
            {{-- @include('partials.menu') --}}
        </header>
    </div>

<!-- banner-inner -->
<div class="inner-page"></div>
<!--// banner-inner -->

<!-- blog -->
<section class="banner-bottom-w3layouts">
    <div class="container">
        <div class="inner-sec-w3ls py-lg-5">
            <h3 class="tittle-wthree text-center mb-lg-5 mb-3">Publicaciones</h3>
            <div class="row">
                @yield('content')
    
                {{-- aside --}}
                @include('partials.blog.aside')
                {{-- end aside --}}
            </div>

        </div>
    </div>
</section>
<!-- //blog-->

 <!-- footer -->
    @include('partials.footer')
<!-- //footer -->

    <!-- js -->
    <script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
    <!-- //js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!--/ start-smoth-scrolling -->
    <script src="{{ asset('js/move-top.js') }}"></script>
    <script src="{{ asset('js/easing.js') }}"></script>
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
</body>

</html>