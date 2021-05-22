@extends('layouts.web')

@section('page-title', 'COODESCOR | Asociados')

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
            <li class="breadcrumb-item active" aria-current="page">Asociados</li>
        </ol>
    </div>
</div>
<!-- //page details -->

<!-- gallery -->
<div class="gallery">
    <div class="container py-xl-5 py-lg-3">
        <div class="w3ls-titles text-center mb-5 welcome-left">
            <h3>Asociados</h3>
            <span>
                <i class="fas fa-pills"></i>
            </span>            
        </div>
        <section>
            <ul id="da-thumbs" class="da-thumbs">
                @foreach ($partners as $item)
                    <li>
                        <a href="#" rel="" class="b-link-stripe b-animate-go  thickbox" title="Medic">
                            <img src="/images/{{ $item->logo ? $item->logo : 'logo.png'}}" alt="{{ $item->name }}" class="img-fluid" />
                            <div>
                                <h5>{{ $item->name }}</h5>
                                <span>{{ $item->address }}</span>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
    </div>
</div>
<!-- //gallery -->
@endsection

@push('scripWeb')

<!-- Gallery-js -->
<script src="{{ asset('js/modernizr.custom.97074.js') }}"></script>
<script src="{{ asset('js/jquery.hoverdir.js') }}"></script>
<script>
    $(function () {

        $(' #da-thumbs > li ').each(function () {
            $(this).hoverdir();
        });

    });
</script>

<script src="{{ asset('js/jquery.chocolat.js') }}"></script>
<link rel="{{ asset('stylesheet" href="css/chocolat.css') }}" type="text/css">
<!--light-box-files -->
<script>
    $(function () {
        $('.da-thumbs a').Chocolat();
    });
</script>
<!-- Gallery-js -->

@endpush