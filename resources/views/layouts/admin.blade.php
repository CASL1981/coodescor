
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Coodescor | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  @stack('style')
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="{{ asset('dist/css/skins/skin-blue.min.css') }}">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="{{ route('dashboard') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>D</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>C</b>oodescor</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="{{ asset('images/logo.png') }}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{ auth()->user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{ asset('images/logo.png') }}" class="img-circle" alt="User Image">

                <p>
                  {{ auth()->user()->name }}
                  <small>Mimbro desde {{ auth()->user()->created_at->format('d M Y') }}</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                {{-- <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div> --}}
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                {{-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> --}}
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button class="btn btn-default btn-flat btn-block">Cerrar sesión</button>                
                </form>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          {{-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> --}}
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('images/logo.png') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ auth()->user()->name }}</p>
          <!-- Status -->
          {{-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> --}}
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">Panel</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="{{ request()->is('dashboard') ? 'active' : '' }}"><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> <span>Panel de Inicio</span></a></li>
        <li class="treeview {{ request()->is('admin/posts*') ? 'active' : '' }}">
          <a href="#"><i class="fa fa-file-text" aria-hidden="true"></i><span>Blog</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li {{ request()->is('admin/posts/create') ? 'class=active' : '' }} >
              @if (request()->routeIs('posts.edit'))
                <a href="{{ route('posts.index', '#createpost') }}"><i class="fa fa-plus-circle"></i>Crear Publicación</a>
              @else
                <a href="#" data-toggle="modal" data-target="#crearPost"><i class="fa fa-plus-circle"></i>Crear Publicación</a>
              @endif
            </li>
            <li {{ request()->is('admin/posts') ? 'class=active' : '' }} ><a href="{{ route('posts.index') }}">
              <i class="fa fa-eye"></i>Ver todas las Publicaciones</a>
            </li>
          </ul>
        </li>
        <li class="treeview {{ request()->is('admin/news*') ? 'active' : '' }}">
          <a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i><span>Noticias</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li {{ request()->is('admin/news/create') ? 'class=active' : '' }} >
              @if (request()->routeIs('news.edit'))
                <a href="{{ route('news.index', '#createnews') }}"><i class="fa fa-plus-circle"></i>Crear Noticia</a>                  
              @else
                <a href="#" data-toggle="modal" data-target="#crearNews"><i class="fa fa-plus-circle"></i>Crear Noticia</a>                  
              @endif
            </li>
            <li {{ request()->is('admin/news') ? 'class=active' : '' }} ><a href="{{ route('news.index') }}">
              <i class="fa fa-eye"></i>Ver todas las Noticias</a>
            </li>
          </ul>
        </li>
        <li class="treeview {{ request()->is('admin/asociados*') ? 'active' : '' }}">
          <a href="#"><i class="fa fa-users" aria-hidden="true"></i><span>Asocidos</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li {{ request()->is('admin/asociados/create') ? 'class=active' : '' }} ><a href="{{ route('asociados.create') }}">
              <i class="fa fa-user-plus"></i>Adicionar Asociado</a>
            </li>
            <li {{ request()->is('admin/asociados') ? 'class=active' : '' }}><a href="{{ route('asociados.index') }}">
              <i class="fa fa-eye"></i>Ver todos los Asociados</a>
            </li>
          </ul>
        </li>
        <li class="{{ request()->is('comments') ? 'active' : '' }}"><a href="{{ route('comments.index') }}"><i class="fa fa-commenting-o"></i> <span>Comentarios</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @yield('dashboard_content-header')
    </section>

    <!-- Main content -->
    <section class="content">
      @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <p>{{ $message }}</p>
          </div>
      @endif
      @yield('dashboard_content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.0 -->
<script src="{{ asset('plugins/jQuery/jQuery-2.2.0.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

@unless (request()->routeIs('posts.edit'))
  @include('administrator.blog.create')  
@endunless

@unless (request()->routeIs('news.edit'))
  @include('administrator.news.create')    
@endunless
@stack('script')

<!-- AdminLTE App -->
<script src="{{ asset('dist/js/app.min.js') }}"></script>

</body>
</html>