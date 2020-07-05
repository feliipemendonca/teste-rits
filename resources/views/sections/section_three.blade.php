<section class="three">
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="bg-green">
                <div class="container d-flex justify-content-end">
                    <div class="three-left">
                        <img src="{{ asset($item->files->filename) }}" class="img-fluid position-absolute">
                        <h1 class="three-left-text">{{ $item->title }} <span>{{ $item->subtitle }}</span></h1>
                        <button class="btn btn-pink"></button>
                    </div>
                </div>
            </div>
        </div>
         <div class="col-12 col-lg-6 ">
            <div class="container">
                <div class="three-right">
                    <div class="nav">
                        {!! $item->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>