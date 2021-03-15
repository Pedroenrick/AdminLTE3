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
                <h1>Livros</h1>
                    <a class="btn btn-primary ml-lg-3 mb mb-lg-4" href="{{url('books/new')}}"> Adicionar Livro</a>
                </div>
                @foreach($books as $book)

                    <div class="col">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <p><b>Titulo:</b> {{$book->title}}</p>
                                    <p class="card-text"><b>Gênero: </b>{{$book->gender}}</p>
                                    <p class="card-text"><b>Idioma:</b> {{$book->language}}</p>
                                    <p class="card-text"><b>Data de Publicação:</b> {{$book->publication}}</p>
                                    <p class="card-text"><b>Autor:</b> {{$book->author}}</p>
                                    <table>
                                        <td class="ml-4"><a href="books/{{$book->id}}/edit" class="btn btn-info row ml-8">Editar</a></td>

                                        <td>
                                            <form action="books/delete/{{$book->id}}" method="post">
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
