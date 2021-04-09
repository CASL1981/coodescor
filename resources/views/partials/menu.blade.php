<div id="home">
    <!-- navigation -->
    <div class="main-top py-1">
        <nav class="navbar navbar-expand-lg navbar-light fixed-navi">
            <div class="container">
                <!-- logo -->
                <img style="width: 90px; height: 70px;" src="{{ asset('images/logo.png') }}" alt="logo">
                {{-- <h1>
                    <a class="navbar-brand font-weight-bold font-italic" href="{{ route('home') }}">
                        <span>C</span>oodescor
                    </a>
                </h1> --}}
                <!-- //logo -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item mt-lg-0 mt-3">
                            <a class="nav-link" href="{{ route('home') }}">Inicio
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
                    <a href="#" class="login-button ml-lg-5 mt-lg-0 mt-4 mb-lg-0 mb-3" data-toggle="modal" data-target="#exampleModalCenter1">
                        <i class="fas fa-sign-in-alt mr-2"></i>Login</a>
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
                        <h5 class="text-center mb-4">Ingresar</h5>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label>Email</label>
                                {{-- <input type="email" class="form-control" name="name" placeholder="Ingresa Email" required="true"> --}}
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Ingresa Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Contraseña</label>
                                {{-- <input type="password" class="form-control" name="password" placeholder="Contrseña" required="true"> --}}
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contrseña" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn submit mb-4">Login</button>
                            <p class="forgot-w3ls text-center pb-4">
                                {{-- <a href="#" class="text-white">Recordar Contraseña?</a> --}}
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </p>
                            <p class="account-w3ls text-center pb-4">
                                No tienes cuenta?
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">Crea una ahora</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //login -->
    <!-- register -->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
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
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label>Nombre Completo</label>
                                {{-- <input type="text" class="form-control" name="name" placeholder="" required=""> --}}
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="Nombre Completo" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                {{-- <input type="email" class="form-control" name="email" placeholder="" required=""> --}}
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"  placeholder="Email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                {{-- <input type="password" class="form-control" name="password" id="password1" placeholder="" required=""> --}}
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Password" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Confirmar Password</label>
                                {{-- <input type="password" class="form-control" name="password" id="password2" placeholder="" required=""> --}}
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Password" required autocomplete="new-password">
                            </div>
                            <button type="submit" class="btn btn-primary submit mb-4">Registro</button>
                            <p class="text-center pb-2">
                                <a href="#" class="text-white">Al hacer click en Registro, Aceptas nuestros terminos</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //register -->
    <!-- //modal -->
</div>