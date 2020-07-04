@extends('admin.layouts.app', ['title' => __('Editar')])

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" integrity="sha256-jKV9n9bkk/CTP8zbtEtnKaKf+ehRovOYeKoyfthwbC8=" crossorigin="anonymous" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css">
    <link rel="stylesheet" href="{{ asset('argon/css/custom_select.css') }}">
@endpush

@section('content')
    @include('admin.layouts.headers.header', [
        'title' => $products->name,
        'description' => __($manual->content ),
        'class' => 'col-lg-12'
    ])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Editar</h3>
                            </div>
                            <div class="col-4 text-right">
                                {{-- <a href="{{ route('ae.produtos.create') }}" class="btn btn-sm btn-danger">Adiconar</a> --}}
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12"></div>


                    <div class="card-body">
                        <form action="{{ route('ae.produtos.update', $products->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- Input groups with icon -->
                            <div class="row">
                                <div class="col-12 col-md-7">
                                    <div class="form-row">

                                        <div class="form-group col-12 @error('name') has-danger @enderror">
                                            <label for="products">Nome do Produto<em>*</em></label>
                                            <input class="form-control @error('name')is-invalid @enderror" placeholder="Nome do produto" type="text" name="name" value="{{ $products->name }}">
                                            @error('name') <div class="invalid-feedback d-block"> {!! $message !!} </div>  @enderror
                                        </div>

                                        <div class="form-group col-12 col-m-12 col-lg-12 @error('type') has-danger @enderror">
                                            <label for="categorys">Categoria</label>
                                            <div class="input-group input-group-merge">
                                                <select name="type" class="form-control js-example-basic-single @error('type')is-invalid @enderror" id="">
                                                    <option value="">Selecione</option>
                                                    @foreach ($type as $item)
                                                        <option value="{{ $item->id }}" {{  $products->types->id == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <input type="text" name="type_product" class="form-control" placeholder="Tipo de produto" id="category" style="display: none">
                                                @error('type') <div class="invalid-feedback d-block"> {!! $message !!} </div>  @enderror
                                           </div>
                                        </div>

                                        <div class="form-group col-12 col-m-6 col-lg-6 @error('pryce') has-danger @enderror">
                                            <label for="value">Valor</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">R$</span>
                                                </div>
                                                <input class="form-control pryce  @error('pryce')is-invalid @enderror" placeholder="Nome do produto" type="tel" name="pryce" value="{{ $products->pryce }}">
                                                @error('pryce') <div class="invalid-feedback d-block"> {!! $message !!} </div>  @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-12 col-m-6 col-lg-6">
                                            <label for="ativo">Ativo?</label>
                                            <select name="active" class="form-control">
                                                <option value="0" {{ $products->active == 0 ? 'selected' : '' }}>Não</option>
                                                <option value="1" {{ $products->active == 1 ? 'selected' : '' }}>Sim</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-12 @error('term') has-danger @enderror">
                                            <label for="products">Termos e observações</label>
                                            <textarea name="term" placeholder="ou em 10x de R$ 0,00" class="form-control @error('term')is-invalid @enderror" rows="3">{{ $products->term }}</textarea>
                                             @error('term') <div class="invalid-feedback d-block"> {!! $message !!} </div>  @enderror
                                        </div>
                                        <div class="col-sm-12 @error('description') has-danger @enderror">
                                            <label for="exampleInputPassword1">Apresentação<em>*</em></label>
                                            <textarea rows="5" cols="10" class="form-control @error('description')is-invalid @enderror" placeholder="Apresentação do produto" name="description">{{ $products->description }}</textarea>
                                            @error('description') <div class="invalid-feedback d-block"> {!! $message !!} </div>  @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-5">
                                    <div class="form-group @error('image') has-danger @enderror">
                                        <label class="form-control-label" for="input-img">{{ __('Imagem') }}</label>
                                        <div class="custom-file">                                    
                                            <input type="file" name="image" id="input-image" class="custom-file-input @error('image')is-invalid @enderror" lang="pt-br">
                                            <label class="custom-file-label" for="customFileLang">Selecione uma Imagem</label>
                                        </div>
                                        @error('image') <div class="invalid-feedback d-block"> {!! $message !!} </div>  @enderror
                                        <img  id="imagem" class="img-fluid w-100 pt-2" src="{{ Storage::url($products->files->filename) }}">
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 pt-4 @error('datasheet') has-danger @enderror">
                                    <label for="products">Ficha Técnica<em>*</em></label>
                                    <textarea name="datasheet" class="@error('datasheet')is-invalid @enderror" id="content" cols="30" rows="10">{{ $products->datasheet }}</textarea>
                                     @error('datasheet') <div class="invalid-feedback d-block"> {!! $message !!} </div>  @enderror
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

    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha256-Kg2zTcFO9LXOc7IwcBx1YeUBJmekycsnTsq2RuFHSZU=" crossorigin="anonymous"></script>
    <script src="//cdn.ckeditor.com/4.14.1/basic/ckeditor.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
            $('.pryce').mask('000.000,00', {reverse: true});

            // function button(){
            //     document.getElementById('type').style.display = 'none'
            //     document.getElementById('more').style.display = 'none'
            //     document.getElementById('input_more').style.width = '100%'
            //     document.getElementById('category').style.display = 'block'
        
            
            //         $('.select2').css("display","none"); 
            
            // }
        });

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