<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\Http\Resources\BooksResource;

class BooksController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
        $this->authenticated_instance = new AuthenticatedController; 
    }

    protected function getCreateBooksForm(){
        return view('forms.get_create_books_form');
    }
    private function createBooks(){
        $books                      = new books;
        $books->title               = request()->title;
        $books->author              = request()->author;
        $books->publication_date    = request()->publication_date;
        $books->save();
        return redirect()->back()->with('message',"New book has been created successfuly");
    }
     // method that validates input data before saving
    protected function validateBooks(){
        if(empty(request()->title)){
            return redirect()->back()->withErrors("Please enter the book title");
        }elseif(empty(request()->author)){
            return redirect()->back()->withErrors("Please enter the book author");
        }elseif(empty(request()->publication_date)){
            return redirect()->back()->withErrors("Please enter the date of publication");
        }else{
            return $this->createBooks();
        }
    }    
    protected function getBooks(){
        $books= BooksResource::collection(Books::all());
        return view('forms.get_books',compact('books'));
    }
    protected function deleteBooks($id){
        Books::find($id)->delete();
        return redirect()->back()->with('message', "Your changes were made successfully");
    }
}
