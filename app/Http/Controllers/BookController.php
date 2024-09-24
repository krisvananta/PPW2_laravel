<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $book_data = Book::all()->sortByDesc('id');
        $book_quantity = $book_data->count();
        $total_price = $book_data->sum('price');

        return view('book.index', compact('book_data', 'book_quantity', 'total_price'));
    }

    public function create()
    {
        return view('book.create');
    }

    public function store(Request $request)
    {
        $book = new Book();
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->price = $request->input('price');
        $book->date_published = $request->input('date_published');
        $book->save();
        return redirect('/book')->with('success', 'Book added successfully');
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect('/book')->with('success', 'data deleted successfully');
    }

    public function edit($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return redirect('/book')->with('error', 'Book not found');
        }
        return view('book.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id); // Mencari buku berdasarkan ID
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->price = $request->input('price');
        $book->date_published = $request->input('date_published');
        $book->save();
        return redirect('/book')->with('success', 'Book updated successfully');
    }
}
