<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author')->get();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $authors = Author::all();
        return view('books.create', compact('authors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
        ]);

        Book::create([
            'title' => $request->input('title'),
            'author_id' => $request->input('author_id'),
        ]);

        return redirect()->route('books.create')->with('success', 'Book created!');
    }



    public function edit(Book $book)
    {
        $authors = Author::all();
        return view('books.edit', compact('book', 'authors'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
        ]);

        $book->update([
            'title' => $request->input('title'),
            'author_id' => $request->input('author_id'),
        ]);

        return redirect()->route('books.edit', $book)->with('success', 'Book updated successfully!');
    }


    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully!');
    }


    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }
}
