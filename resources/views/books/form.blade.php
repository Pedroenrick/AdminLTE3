@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="form-group card-header">Livros</h1>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Request::is('*/edit'))
                    <form action="{{url('books/update')}}/{{$book->id}}" method ="POST">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputName">Titulo: </label>
                            <input type="text" name="title" class="form-control" value="{{$book->title}}">
                        </div>
                        <div class="form-group">
                            <label for="age">Gênero:</label>
                            <input type="texte" name="gender" class="form-control" value="{{$book->gender}}">
                        </div>
                        <div class="form-group">
                            <label for="language">Idioma:</label>
                            <input type="text" name="language" class="form-control" value="{{$book->language}}">
                        </div>
                        <div class="form-group">
                            <label for="publication">Data de Publicação:</label>
                            <input type="text" name="publication" class="form-control" value="{{$book->publication}}">
                        </div>
                        <div class="form-group">
                            <label for="author">Autor:</label>
                            <input type="text" name="author" class="form-control" value="{{$book->author}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                    @else

                    <form action="{{url('books/add')}}" method ="POST">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputName">Titulo: </label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="age">Gênero:</label>
                            <input type="texte" name="gender" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="language">Idioma:</label>
                            <input type="text" name="language" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="publication">Data de Publicação:</label>
                            <input type="text" name="publication" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="author">Autor:</label>
                            <input type="text" name="author" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
