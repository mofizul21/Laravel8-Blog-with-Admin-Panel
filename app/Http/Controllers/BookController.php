<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function manageBook()
    {
        $books = Book::where('parent_id', '=', 0)->get();

        $allBooks = Book::all();

        return view('book.bookTreeview', compact('books', 'allBooks'));
    }

    public function addBook(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $input = $request->all();
        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];

        Book::create($input);
        return back()->with('success', 'New Book added successfully.');
    }
}
