<div class="blog-w3ls" id="blog">
    <div class="container py-xl-5 py-lg-3">
        <div class="w3ls-titles text-center mb-5">
            <h3 class="title text-white">Notas de Interes</h3>
            <span>
                <i class="fas fa-pills text-white"></i>
            </span>
            
            <!-- <p class="mt-2 text-white">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
        </div>
        <!-- news -->
        <div class="row package-grids mt-5">
            <div class="col-md-4 pricing">
                <div class="price-top">
                    <a href="single.html">
                        <img src="images/blog1.jpg" alt="" class="img-fluid" />
                    </a>
                    <h3>13
                        <span>August</span>
                    </h3>
                </div>
                <div class="price-bottom p-4">
                    <h4 class="text-dark mb-3">Titulo Noticia 1</h4>
                    <a href="single.html">
                        <i class="fas fa-user mr-2"></i>Posted by accusantium</a>
                </div>
            </div>
            <div class="col-md-4 pricing my-md-0 my-5">
                <div class="price-top">
                    <a href="single.html">
                        <img src="images/blog2.jpg" alt="" class="img-fluid" />
                    </a>
                    <h3>24
                        <span>August</span>
                    </h3>
                </div>
                <div class="price-bottom p-4">
                    <h4 class="text-dark mb-3">Titulo Noticia 2</h4>
                    <a href="single.html">
                        <i class="fas fa-user mr-2"></i>Posted by accusantium</a>
                </div>
            </div>
            <div class="col-md-4 pricing">
                <div class="price-top">
                    <a href="single.html">
                        <img src="images/blog3.jpg" alt="" class="img-fluid" />
                    </a>
                    <h3>30
                        <span>August</span>
                    </h3>
                </div>
                <div class="price-bottom p-4">
                    <h4 class="text-dark mb-3">Noticia 1</h4>
                    <a href="single.html">
                        <i class="fas fa-user mr-2"></i>Posted by accusantium</a>
                </div>
            </div>
        </div>
        <!-- end news -->
    </div>

    <div class="container py-xl-5 py-lg-3">
        <div class="w3ls-titles text-center mb-5">
            
            <h3 class="title text-white">Blog</h3>
            
        </div>
        <!-- blog -->
        <div class="row package-grids mt-5">
            @foreach ($posts as $post)
            <div class="col-md-4 pricing">
                <div class="price-top">
                    <a href="{{ route('blog.post', $post->url) }}">
                        <img src="/images/{{ $post->photo }}" class="img-fluid" alt="">
                    </a>
                    <h3>{{ $post->published_at->format('d') }}
                        <span>{{ $post->published_at->format('F') }}</span>
                    </h3>
                </div>
                <div class="price-bottom p-4">
                    <h4 class="text-dark mb-3 text-capitalize">{{ $post->title }}</h4>                    
                    {{-- <i class="fas fa-user mr-2"></i>Posted by accusantium</a> --}}
                </div>
            </div>                
            @endforeach
            {{-- <div class="col-md-4 pricing my-md-0 my-5">
                <div class="price-top">
                    <a href="single.html">
                        <img src="images/blog2.jpg" alt="" class="img-fluid" />
                    </a>
                    <h3>24
                        <span>August</span>
                    </h3>
                </div>
                <div class="price-bottom p-4">
                    <h4 class="text-dark mb-3">Titulo Post 2</h4>
                    <a href="single.html">
                        <i class="fas fa-user mr-2"></i>Posted by accusantium</a>
                </div>
            </div>
            <div class="col-md-4 pricing">
                <div class="price-top">
                    <a href="single.html">
                        <img src="images/blog3.jpg" alt="" class="img-fluid" />
                    </a>
                    <h3>30
                        <span>August</span>
                    </h3>
                </div>
                <div class="price-bottom p-4">
                    <h4 class="text-dark mb-3">Post 3</h4>
                    <a href="single.html">
                        <i class="fas fa-user mr-2"></i>Posted by accusantium</a>
                </div>
            </div> --}}
        </div>
        <!-- end blog -->
    </div>
</div>