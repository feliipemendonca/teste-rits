<section class="six">
    <div class="row">
        <div class="col-12 col-lg-6 ">
           <h1 class="three-left-text">{{ $item->title }}</h1>
        </div>
        <div class="col-12 col-lg-6 bg-grey">
            <div class="container">
                <div class="three-left">
                    <div class="six-image d-flex justify-content-center">
                        <img src="{{ asset($item->files->filename) }}" class="img-fluid mb-2">
                    </div>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center position-relative table">
            <div class="table-content d-flex ">
                {!! $item->content !!}
            </div>
        </div>
    </div>
</section>