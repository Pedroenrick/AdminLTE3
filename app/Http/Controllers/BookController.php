<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Redirect;

class BookController extends Controller
{
    public function index(){
        $books = Book::get();

        return view('books.list',['books' => $books]);
    }

    public function new(){
        return view('books.form');
    }


    public function add(Request $request){
        $book = new Book;
        $book = $book->create($request->all());
        return Redirect::to('/books');
    }

    public function edit($id){
        $book = Book::findOrFail($id);
        return view('books.form', ['book' => $book]);
    }

    public function update($id, Request $request){
        $book = Book::findOrFail($id);
        $book->update($request->all());
        return Redirect::to('/books');
    }

    public function delete($id){
        $book = Book::findOrFail($id);
        $book->delete();
        return Redirect::to('/books');
    }
}
