@extends('layouts.web')

@section('content')
    
<!-- banner 2 -->
<div class="inner-banner-w3ls">
    <div class="container">

    </div>
</div>
<!-- //banner 2 -->
<!-- page details -->
<div class="breadcrumb-agile">
    <div aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
        </ol>
    </div>
</div>
<!-- //page details -->

  <!-- blog -->
    <section class="banner-bottom-w3layouts">
        <div class="container">
            <div class="inner-sec-w3ls py-3">
                <h3 class="tittle-wthree text-center mb-lg-5 mb-3">
                    <span>Nuestro</span> Blog</h3>
                <div class="row mt-lg-5 mt-md-4 mt-4">
                    <!--left-->
                    <div class="col-lg-8 left-blog-info text-left">
                        <div class="row mb-4">
                            <div class="col-md-6 card">
                                <a href="{{ route('blog.post') }}">
								<img src="images/g1.jpg" class="img-fluid" alt="">
							</a>
                                <div class="card-body">
                                    <ul class="blog-icons my-4">
                                        <li>
                                            <a href="#">
											<i class="far fa-calendar-alt"></i> Feb 20 .2018</a>
                                        </li>
                                        <li class="mx-2">
                                            <a href="#">
											<i class="far fa-comment"></i> 21</a>
                                        </li>
                                        <li>
                                            <a href="#">
											<i class="fas fa-eye"></i> 2000</a>
                                        </li>

                                    </ul>
                                    <h5 class="card-title ">
                                        <a href="{{ route('blog.post') }}">Blog Post Title</a>
                                    </h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
                                    <div class="read inner mt-4">
                                        <a href="{{ route('blog.post') }}" class="btn btn-sm animated-button victoria-two">Read More</a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 card">
                                <a href="{{ route('blog.post') }}">
								<img src="images/g3.jpg" class="img-fluid" alt="">
							</a>
                                <div class="card-body">
                                    <ul class="blog-icons my-4">
                                        <li>
                                            <a href="#">
											<i class="far fa-calendar-alt"></i> Feb 22 .2018</a>
                                        </li>
                                        <li class="mx-2">
                                            <a href="#">
											<i class="far fa-comment"></i> 21</a>
                                        </li>
                                        <li>
                                            <a href="#">
											<i class="fas fa-eye"></i> 2000</a>
                                        </li>

                                    </ul>
                                    <h5 class="card-title ">
                                        <a href="{{ route('blog.post') }}">Blog Post Title</a>
                                    </h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
                                    <div class="read inner mt-4">
                                        <a href="{{ route('blog.post') }}" class="btn btn-sm animated-button victoria-two">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 card my-4">
                                <a href="{{ route('blog.post') }}">
								<img src="images/g3.jpg" class="img-fluid" alt="">
							</a>
                                <div class="card-body">
                                    <ul class="blog-icons my-4">
                                        <li>
                                            <a href="#">
											<i class="far fa-calendar-alt"></i> Feb 23 .2018</a>
                                        </li>
                                        <li class="mx-2">
                                            <a href="#">
											<i class="far fa-comment"></i> 21</a>
                                        </li>
                                        <li>
                                            <a href="#">
											<i class="fas fa-eye"></i> 2000</a>
                                        </li>

                                    </ul>
                                    <h5 class="card-title ">
                                        <a href="{{ route('blog.post') }}">Blog Post Title</a>
                                    </h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
                                    <div class="read inner mt-4">
                                        <a href="{{ route('blog.post') }}" class="btn btn-sm animated-button victoria-two">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 card my-4">
                                <a href="{{ route('blog.post') }}">
								<img src="images/g4.jpg" class="img-fluid" alt="">
							</a>
                                <div class="card-body">
                                    <ul class="blog-icons my-4">
                                        <li>
                                            <a href="#">
											<i class="far fa-calendar-alt"></i> Mar 20 .2018</a>
                                        </li>
                                        <li class="mx-2">
                                            <a href="#">
											<i class="far fa-comment"></i> 21</a>
                                        </li>
                                        <li>
                                            <a href="#">
											<i class="fas fa-eye"></i> 2000</a>
                                        </li>

                                    </ul>
                                    <h5 class="card-title ">
                                        <a href="{{ route('blog.post') }}">Blog Post Title</a>
                                    </h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
                                    <div class="read inner mt-4">
                                        <a href="{{ route('blog.post') }}" class="btn btn-sm animated-button victoria-two">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 card">
                                <a href="{{ route('blog.post') }}">
								<img src="images/g5.jpg" class="img-fluid" alt="">
							</a>
                                <div class="card-body">
                                    <ul class="blog-icons my-4">
                                        <li>
                                            <a href="#">
											<i class="far fa-calendar-alt"></i> Mar 25 .2018</a>
                                        </li>
                                        <li class="mx-2">
                                            <a href="#">
											<i class="far fa-comment"></i> 21</a>
                                        </li>
                                        <li>
                                            <a href="#">
											<i class="fas fa-eye"></i> 2000</a>
                                        </li>

                                    </ul>
                                    <h5 class="card-title ">
                                        <a href="{{ route('blog.post') }}">Blog Post Title</a>
                                    </h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
                                    <div class="read inner mt-4">
                                        <a href="{{ route('blog.post') }}" class="btn btn-sm animated-button victoria-two">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 card">
                                <a href="{{ route('blog.post') }}">
								<img src="images/g6.jpg" class="img-fluid" alt="">
							</a>
                                <div class="card-body">
                                    <ul class="blog-icons my-4">
                                        <li>
                                            <a href="#">
											<i class="far fa-calendar-alt"></i> Feb 30 .2018</a>
                                        </li>
                                        <li class="mx-2">
                                            <a href="#">
											<i class="far fa-comment"></i> 21</a>
                                        </li>
                                        <li>
                                            <a href="#">
											<i class="fas fa-eye"></i> 2000</a>
                                        </li>

                                    </ul>
                                    <h5 class="card-title ">
                                        <a href="{{ route('blog.post') }}">Blog Post Title</a>
                                    </h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
                                    <div class="read inner mt-4">
                                        <a href="{{ route('blog.post') }}" class="btn btn-sm animated-button victoria-two">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-left mt-4">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav> --}}
                    </div>
                    <!--//left-->
                    <!--right-->
                    <aside class="col-lg-4 right-blog-con text-left">
                        <div class="right-blog-info text-left">
                            <div class="tech-btm">
                                <img src="images/g5.jpg" class="img-fluid" alt="">
                            </div>
                            {{-- <div class="tech-btm">
                                <h4>Sign up to our newsletter</h4>
                                <p>Pellentesque dui, non felis. Maecenas male </p>
                                <form action="#" method="post">
                                    <input class="form-control" type="email" placeholder="Email" required="">
                                    <input class="form-control" type="submit" value="Subscribe">
                                </form>

                            </div> --}}
                            <div class="tech-btm">
                                <h4>Categorias</h4>
                                <ul class="list-group single">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Cras justo odio
                                        <span class="badge badge-primary badge-pill">14</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Dapibus ac facilisis in
                                        <span class="badge badge-primary badge-pill">2</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Morbi leo risus
                                        <span class="badge badge-primary badge-pill">1</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="tech-btm">
                                <h4>Principales Historias de esta semana</h4>

                                <div class="blog-grids row mb-3">
                                    <div class="col-md-5 blog-grid-left">
                                        <a href="{{ route('blog.post') }}">
										<img src="images/g6.jpg" class="img-fluid" alt="">
									</a>
                                    </div>
                                    <div class="col-md-7 blog-grid-right">

                                        <h5>
                                            <a href="{{ route('blog.post') }}">Pellentesque dui, non felis. Maecenas male non felis </a>
                                        </h5>
                                        <div class="sub-meta">
                                            <span>
											<i class="far fa-clock"></i> 20 May, 2018</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="blog-grids row mb-3">
                                    <div class="col-md-5 blog-grid-left">
                                        <a href="{{ route('blog.post') }}">
										<img src="images/g4.jpg" class="img-fluid" alt="">
									</a>
                                    </div>
                                    <div class="col-md-7 blog-grid-right">
                                        <h5>
                                            <a href="{{ route('blog.post') }}">Pellentesque dui, non felis. Maecenas male non felis </a>
                                        </h5>
                                        <div class="sub-meta">
                                            <span>
											<i class="far fa-clock"></i> 20 June, 2018</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tech-btm widget_social text-left">
                                <h4>Estemos Conectados</h4>
                                <ul>

                                    <li>
                                        <a class="facebook" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <span class="count">Siguenos</span> en Facebook</a>
                                    </li>
                                    <li>
                                        <a class="twitter" href="#">
										<i class="fab fa-twitter"></i>
										<span class="count">Siguenos</span> en Twitter</a>
                                    </li>
                                    {{-- <li>
                                        <a class="google-plus-g" href="#">
										<i class="fab fa-google-plus-g"></i>

										<span class="count">Siguenos</span> en Google+</a>
                                    </li> --}}
                                    <li>
                                        <a class="instagram" href="#">
										<i class="fab fa-instagram"></i>
										<span class="count">Siguenos</span> en Instagran</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="tech-btm">
                                <h4>Publicaciones Recientes</h4>

                                <div class="blog-grids row mb-3 text-left">
                                    <div class="col-md-5 blog-grid-left">
                                        <a href="{{ route('blog.post') }}">
										<img src="images/g1.jpg" class="img-fluid" alt="">
									</a>
                                    </div>
                                    <div class="col-md-7 blog-grid-right">

                                        <h5>
                                            <a href="{{ route('blog.post') }}">Pellentesque dui, non felis. Maecenas male non felis </a>
                                        </h5>
                                        <div class="sub-meta">
                                            <span>
											<i class="far fa-clock"></i> 20 May, 2018</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="blog-grids row mb-3 text-left">
                                    <div class="col-md-5 blog-grid-left">
                                        <a href="{{ route('blog.post') }}">
										<img src="images/g2.jpg" class="img-fluid" alt="">
									</a>
                                    </div>
                                    <div class="col-md-7 blog-grid-right">

                                        <h5>
                                            <a href="{{ route('blog.post') }}">Pellentesque dui, non felis. Maecenas male non felis </a>
                                        </h5>
                                        <div class="sub-meta">
                                            <span>
											<i class="far fa-clock"></i> 20 May, 2018</span>
                                        </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="blog-grids row mb-3 text-left">
                                    <div class="col-md-5 blog-grid-left">
                                        <a href="{{ route('blog.post') }}">
										<img src="images/g3.jpg" class="img-fluid" alt="">
									</a>
                                    </div>
                                    <div class="col-md-7 blog-grid-right">
                                        <h5>
                                            <a href="{{ route('blog.post') }}">Pellentesque dui, non felis. Maecenas male non felis </a>
                                        </h5>
                                        <div class="sub-meta">
                                            <span>
											<i class="far fa-clock"></i> 20 June, 2018</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </aside>
                    <!--//right-->

                </div>
            </div>
        </div>
    </section>
    <!-- //blog-->
@endsection