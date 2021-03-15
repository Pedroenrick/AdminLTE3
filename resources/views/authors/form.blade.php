@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="form-group card-header">Autores</h1>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Request::is('*/edit'))
                    <form action="{{url('authors/update')}}/{{$author->id}}" method ="POST">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputName">Nome: </label>
                            <input type="text" name="name" class="form-control" value="{{$author->name}}">
                        </div>
                        <div class="form-group">
                            <label for="age">Idade:</label>
                            <input type="age" name="age" class="form-control" value="{{$author->age}}">
                        </div>
                        <div class="form-group">
                            <label for="country">País:</label>
                            <input type="country" name="country" class="form-control" value="{{$author->country}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                    @else

                    <form action="{{url('authors/add')}}" method ="POST">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputName">Nome: </label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="age">Idade:</label>
                            <input type="age" name="age" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="country">País:</label>
                            <input type="country" name="country" class="form-control">
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
