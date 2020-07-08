<section class="four{{ $key == 4 ? ' five' : '' }}">
    <div class="row">
        <div class="col-12 col-lg-6 {{ $key == 4 ? 'order-2 order-lg-2' : 'order-2 order-lg-1' }}">
            <div class="container">
                <div class="three-right">
                    <div class="nav">
                        {!! $item->content !!}
                        <button class="btn btn-pink position-absolute d-lg-none"></button>
                    </div>
                </div>
            </div>
        </div>
         <div class="col-12 col-lg-6  {{ $key == 4 ? 'order-1 order-lg-1' : 'order-1 order-lg-2' }}">
            <div class="bg-{{ $key == 4 ? 'indigo' : 'pink' }}">
                <div class="container">
                    <div class="three-left">
                        <h1 class="three-left-text">{{ $item->title }} <span>{{ $item->subtitle }}</span></h1>
                        <div class="four-image position-absolute d-flex justify-content-center">
                            <img src="{{ asset($item->files->filename) }}" class="img-fluid mb-2">
                            <button class="btn btn-pink position-absolute d-none d-lg-block"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>