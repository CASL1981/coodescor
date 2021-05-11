<div id="home">
    <!-- navigation -->
    <div class="main-top py-1">
        <nav class="navbar navbar-expand-lg navbar-light fixed-navi">
            <div class="container">
                <!-- logo -->
                <img class="logo" src="{{ asset('images/logo.png') }}" alt="logo">
                
                <!-- //logo -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item mt-lg-0 mt-3">
                            <a class="nav-link" href="/">Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item mx-lg-4 my-lg-0 my-3">
                            <a class="nav-link" href="{{ route('about') }}">Nosotros</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">COODESCOR
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="{{ route('services') }}">Servicios</a>
                                <a class="dropdown-item" href="{{ route('partner') }}">Asociados</a>
                                <a class="dropdown-item" href="{{ route('blog') }}">Blog</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('news') }}">Noticias</a>
                            </div>
                        </li>
                        <li class="nav-item mx-lg-4 my-lg-0 my-3">
                            <a class="nav-link" href="{{ route('contact') }}">Contactanos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pqrs') }}">PQRS</a>
                        </li>
                    </ul>
                    <!-- login -->
                    {{-- <a href="#" class="login-button ml-lg-5 mt-lg-0 mt-4 mb-lg-0 mb-3" data-toggle="modal" data-target="#exampleModalCenter1">
                        <i class="fas fa-sign-in-alt mr-2"></i>Login
                    </a> --}}
                    <!-- //login -->
                </div>
            </div>
        </nav>
    </div>
    <!-- //navigation -->
    <!-- modal -->
    <!-- login -->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> -->
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Login Now</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="name" placeholder="Ingresa Email" required="true">
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Contraseña</label>
                                <input type="password" class="form-control" name="password" placeholder="Contrseña" required="true">
                            </div>
                            <button type="submit" class="btn submit mb-4">Login</button>
                            <p class="forgot-w3ls text-center pb-4">
                                <a href="#" class="text-white">Recordar Contraseña?</a>
                            </p>
                            {{-- <p class="account-w3ls text-center pb-4">
                                No tienes cuenta?
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">Crea una ahora</a>
                            </p> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //login -->
    <!-- register -->
    {{-- <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-2">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Registro</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="form-control" name="name" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" name="password" id="password1" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" name="password" id="password2" placeholder="" required="">
                            </div>
                            <button type="submit" class="btn btn-primary submit mb-4">Register</button>
                            <p class="text-center pb-2">
                                <a href="#" class="text-white">By clicking Register, I agree to your terms</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- //register -->
    <!-- //modal -->
</div>