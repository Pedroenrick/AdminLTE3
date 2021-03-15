@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-8" >
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card-header">
                <h1>Autores</h1>
                    <a class="btn btn-primary ml-lg-3 mb mb-lg-4" href="{{url('authors/new')}}"> Adicionar autor</a>
                </div>
                @foreach($authors as $author)

                    <div class="col">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <p><b>Nome:</b> {{$author->name}}</p>
                                    <p class="card-text"><b>Idade: </b>{{$author->age}}</p>
                                    <p class="card-text"><b>País:</b> {{$author->country}}</p>
                                    <p><b>Livros Publicados:</b> </p>
                                    <ul>
                                        <li>
                                            {{$author->books}}
                                        </li>
                                    </ul>
                                    <table>
                                        <td class="ml-4"><a href="authors/{{$author->id}}/edit" class="btn btn-info row ml-8">Editar</a></td>

                                        <td>
                                            <form action="authors/delete/{{$author->id}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Deletar</button>
                                            </form>
                                        </td>
                                    </table>

                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
</div>

@endsection
