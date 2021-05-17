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
            @foreach ($noticias as $news)
                <div class="col-md-4 pricing">
                    <div class="price-top">
                        <a href="{{ route('news.post', $news->url) }}">
                            <img src="images/{{ $news->photo }}" alt="" class="img-fluid" />
                        </a>
                        <h3>{{ $news->published_at->format('d') }}
                            <span>{{ $news->published_at->format('M') }}</span>
                        </h3>
                    </div>
                    <div class="price-bottom p-4">
                        <a href="{{ route('news.post', $news->url) }}">
                            <h4 class="text-dark mb-3"><p>{{ $news->title }}</p></h4>                        
                            <i class="fas fa-user mr-2"></i>Publicada por {{ $news->owner->name }}</a>
                        </a>
                    </div>
                </div>                
            @endforeach
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
                    <a href="{{ route('blog.post', $post->url) }}">
                        <h4 class="text-dark mb-3 text-capitalize"><p>{{ $post->title }}</p></h4>
                        <i class="fas fa-user mr-2"></i>Posteado por {{ $post->owner->name }}</a>
                    </a>
                </div>
            </div>                
            @endforeach            
        </div>
        <!-- end blog -->
    </div>
</div>