@extends('layouts.blog')

@section('content')
    <div class="col-lg-8 left-blog-info text-left">
        <div class="card">
            <a href="#">
                <img src="/images/{{ $post->photo }}" class="img-fluid" alt="">                
            </a>
            <div class="card-body">
                <ul class="blog-icons my-4">
                    <li>
                        <a href="#">
                            <i class="far fa-calendar-alt"></i> {{ $post->published_at->format('d M Y')}}</a>
                    </li>
                    <li class="mx-2">
                        <a href="#">
                            <i class="far fa-comment"></i> 21</a>
                    </li>
                </ul>
                <h5 class="card-title ">
                    <a href="#">{{ $post->title }}</a>
                </h5>
                <p class="card-text">{!! $post->body !!}</p>

            </div>
        </div>
        <div class="comment-top">
            <h4>Comments</h4>
            <div class="media">
                <img src="/images/t2.jpg" alt="" class="img-fluid">
                <div class="media-body">
                    <h5 class="mt-0">Joseph Goh</h5>
                    <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac cursus eros. Cras a ornare elit.</p>

                    <div class="media mt-3">
                        <a class="d-flex pr-3" href="#">
                            <img src="/images/t2.jpg" alt="" class="img-fluid">
                        </a>
                        <div class="media-body">
                            <h5 class="mt-0">Richard Spark</h5>
                            <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac cursus eros. Cras a ornare elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="comment-top">
            <h4>Leave a Comment</h4>
            <div class="comment-bottom">
                <form action="#" method="post">
                    <input class="form-control" type="text" name="Name" placeholder="Name" required="">
                    <input class="form-control" type="email" name="Email" placeholder="Email" required="">

                    <input class="form-control" type="text" name="Subject" placeholder="Subject" required="">

                    <textarea class="form-control" name="Message" placeholder="Message..." required=""></textarea>
                    <button type="submit" class="btn btn-primary submit">Submit</button>
                </form>
            </div>
        </div>

    </div>
@endsection