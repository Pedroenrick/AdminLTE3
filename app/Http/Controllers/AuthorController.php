<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Redirect;


class AuthorController extends Controller
{
    public function index(){
        $authors = Author::get();

        return view('authors.list',['authors' => $authors]);
    }

    public function new(){
        return view('authors.form');
    }


    public function add(Request $request){
        $author = new Author;
        $author = $author->create($request->all());
        return Redirect::to('/authors');
    }

    public function show($id){
        $author = Author::where('id', $id);

        return view('autor.list',['authors' => $author]);
    }

    public function edit($id){
        $author = Author::findOrFail($id);
        return view('authors.form', ['author' => $author]);
    }

    public function update($id, Request $request){
        $author = Author::findOrFail($id);
        $author->update($request->all());
        return Redirect::to('/authors');
    }

    public function delete($id){
        $author = Author::findOrFail($id);
        $author->delete();
        return Redirect::to('/authors');
    }
}










