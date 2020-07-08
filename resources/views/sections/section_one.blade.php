<section class="one bg-default">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                <h1 class="one-text">{{ $item->title }}</h1>
                <img src="{{ asset($item->files->filename) }}" class="img-fluid d-lg-none" alt="Imagem 1">
                <div class="one-content">
                    {!! $item->content !!}
                </div>
                <div class="one-btn w-100">
                    <button class="btn btn-pink"></button>
                </div>
            </div>
            <div class="img-fluid d-none d-lg-block position-absolute">
                <img src="{{ asset($item->files->filename) }}" alt="Imagem 1">
                <img src="{{ asset('images/min/img-top.png') }}" class="img-top pos">
            </div>
        </div>
    </div>
    <div class="green w-100"></div>
</section>