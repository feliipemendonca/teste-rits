@extends('admin.layouts.app', ['title' => __('Adicionar')])

@section('content')
    @include('admin.layouts.headers.header', [
        'title' => 'Adicionar Conteúdo',
        'description' => __(''),
        'class' => 'col-lg-12'
    ])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Adicionar</h3>
                            </div>
                        </div>
                    </div>            
                   <div class="card-body">
                        <form action="{{ route('admin.conteudo.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-7">
                                    <div class="form-row">
                                        <div class="form-group col-12 @error('title') has-danger @enderror">
                                            <label for="products">Título</label>
                                            <input class="form-control @error('title')is-invalid @enderror" placeholder="Título" type="text" name="title" value="{{ old('title') }}">
                                            @error('title') <div class="invalid-feedback d-block"> {!! $message !!} </div>  @enderror
                                        </div>
                                        <div class="form-group col-12 @error('subtitle') has-danger @enderror">
                                            <label for="products">Subtitulo</label>
                                            <input class="form-control @error('subtitle')is-invalid @enderror" placeholder="Subititulo" type="text" name="subtitle" value="{{ old('subtitle') }}">
                                            @error('subtitle') <div class="invalid-feedback d-block"> {!! $message !!} </div>  @enderror
                                        </div>
                                        <div class="form-group col-12 @error('video') has-danger @enderror">
                                            <label for="products">Video</label>
                                            <input class="form-control @error('video')is-invalid @enderror" placeholder="Subititulo" type="text" name="video" value="{{ old('video') }}">
                                            @error('video') <div class="invalid-feedback d-block"> {!! $message !!} </div>  @enderror
                                        </div>
                                        <div class="col-12 @error('content') has-danger @enderror">
                                            <label for="products">Conteúdo</label>
                                            <textarea name="content" class="@error('content')is-invalid @enderror" id="content" cols="30" rows="10">{{ old('content') }}</textarea>
                                            @error('content') <div class="invalid-feedback d-block"> {!! $message !!} </div>  @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-5">
                                    <div class="form-group @error('image') has-danger @enderror">
                                        <label class="form-control-label" for="input-img">{{ __('Imagem') }}<em>*</em></label>
                                        <div class="custom-file">                                    
                                            <input type="file" name="image" id="input-image" class="custom-file-input @error('image')is-invalid @enderror" lang="pt-br">
                                            <label class="custom-file-label" for="customFileLang">Selecione uma Imagem</label>
                                        </div>
                                        @error('image') <div class="invalid-feedback d-block"> {!! $message !!} </div>  @enderror
                                        <img  id="imagem" class="img-fluid" src="">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer py-4">
                                <nav class="d-flex justify-content-end" aria-label="...">
                                    <div class="form-groun text-right">
                                        <button type="submit" class="btn btn-danger">Cadastrar</button>
                                    </div>
                                </nav>
                            </div>
                        </form>
                    </div>                    
                </div>
            </div>
        </div>
        @include('admin.layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">

        window.onload = function() {
            CKEDITOR.replace('content');
        };

        function readURL(input){
            if(input.files && input.files[0]){
                var reader = new FileReader()
                reader.onload = function(e) {
                    $('#imagem').attr('src', e.target.result)
                }
                reader.readAsDataURL(input.files[0])
            }
        }
        $('#input-image').change(function(){
            readURL(this)
        }) 

    </script>
@endpush