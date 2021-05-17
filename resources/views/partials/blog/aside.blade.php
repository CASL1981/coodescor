
<aside class="col-lg-4 right-blog-con text-left">
    <div class="right-blog-info text-left">
        <div class="tech-btm">
            <img src="{{ asset('images/g5.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="tech-btm">
            <h4>Categorias</h4>
            <ul class="list-group single">
                @foreach ($categories as $category)
                    <a href="{{ route('categories.show', $category) }}">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $category->name }}                                            
                            <span class="badge badge-primary badge-pill">{{ $category->Posts()->count() }}</span>
                        </li>
                    </a>
                @endforeach                                    
            </ul>
        </div>
        <div class="tech-btm">
            <h4>Ultimas Publicaciones</h4>
            @foreach ($recentposts as $post)
                <div class="blog-grids row mb-3">
                    <div class="col-md-5 blog-grid-left">
                        <a href="#">
                        <img src="/images/{{ $post->photo }}" class="img-fluid" alt="">
                    </a>
                    </div>
                    <div class="col-md-7 blog-grid-right">
                        <h5><a href="{{ route('blog.post', $post->url) }}">{{ $post->title }}</a></h5>
                        <div class="sub-meta">
                            <span>
                            <i class="far fa-clock"></i> {{ $post->published_at->format('d M Y') }}</span>
                        </div>
                    </div>

                </div>                
            @endforeach
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
                <li>
                    <a class="dribble" href="#">
                    <i class="fab fa-instagram"></i>
                    <span class="count">Siguenos</span> en Instagran</a>
                </li>

            </ul>
        </div>                            
    </div>
</aside>