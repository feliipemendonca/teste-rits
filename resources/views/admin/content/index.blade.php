@extends('admin.layouts.app', ['title' => __('Conteúdos')])

@section('content')
    @include('admin.layouts.headers.header', [
        'title' => 'Conteúdos',
        'description' => __('cadastro de conteúdo'),
        'class' => 'col-lg-12'
    ])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Lista</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('admin.conteudo.create') }}" class="btn btn-sm btn-danger">Adicionar</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12"></div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Imagem</th>
                                    <th scope="col">Título</th>
                                    <th scope="col">Subtítulo</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Cadastrado</th>
                                    <th scope="col">Atualizado</th>
                                    <th scope="col">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( auth()->user()->contents as $item)                                    
                                
                                <tr>
                                    <td style="padding-top: 10px; padding-bottom: 10px;">
                                        <img src="{{ asset($item->files->filename) }}" width="50px" alt="">
                                    </td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->subtitle }}</td>
                                    <td>{{ $item->slug }}</td>
                                    <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                    <td>{{ $item->updated_at->format('d-m-Y') }}</td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="{{ route('admin.conteudo.edit', $item) }}"><i class="fas fa-edit"></i>Editar</a>
                                                {{ deleteButton( route('admin.conteudo.destroy', $item->id)) }} 
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{ auth()->user()->contents()->paginate(15) }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layouts.footers.auth')
    </div>
@endsection