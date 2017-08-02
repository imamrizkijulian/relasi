<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::all();
        return view('book.index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // compact fungsinya adalah untuk memparsing data berdasarkan model yang di panggil
        $author = Author::all();
        return view('book.create', compact('author'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book;
        $book->title = $request->title;
        $book->author_id = $request->author;
        $book->amount = $request->amount;

        if ($request->hasFile('cover')) {
            $books = $request->file('cover');
            $extension = $books->getClientOriginalExtension();
            $filename = str_random(6). '.' . $extension;
            $destinationPath = public_path() .DIRECTORY_SEPARATOR . 'img';
            $books->move($destinationPath, $filename);
            $book->cover = $filename;
        }
        $book->save();
        return redirect('book');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        $author = Author::all();
        return view('book.edit', compact('book','author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->title = $request->title;
        $book->author_id = $request->author;
        $book->amount = $request->amount;

        if ($request->hasFile('cover')) {
            $books = $request->file('cover');
            $extension = $books->getClientOriginalExtension();
            $filename = str_random(6). '.' . $extension;
            $destinationPath = public_path() .DIRECTORY_SEPARATOR . 'img';
            $books->move($destinationPath, $filename);
            $book->cover = $filename;
        }
        $book->save();
        return redirect('book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect('book');
    }
}
