<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Book;
use App\Models\Comments;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use File;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            //new Middleware('auth', only: ['comments']),
            new Middleware(IsAdmin::class, except: ['index', 'show']),
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = Book::all();
        return view('book.tampil', ['book' => $book]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genre = Genre::all();
        return view('book.tambah', ['genre' => $genre]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png|max:2048',
            'title' => 'required',
            'summary' => 'required',
            'stock' => 'required',
            'genre_id' => 'required'
        ]);

        $newImageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('image'), $newImageName);

        $book = new Book;

        $book->title = $request->input('title');
        $book->summary = $request->input('summary');
        $book->stock = $request->input('stock');
        $book->genre_id = $request->input('genre_id');
        $book->image = $newImageName;

        $book->save();

        return redirect('/book');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);

        return view('book.detail', ['book'=>$book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $genre = Genre::all();
        $book = Book::find($id);

        return view('book.edit', ['book'=>$book, 'genre'=>$genre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'mimes:jpg,jpeg,png|max:2048',
            'title' => 'required',
            'summary' => 'required',
            'stock' => 'required',
            'genre_id' => 'required'
        ]);
        $book = Book::find($id);

        if($request->has('image')){
            File::delete('image/'.$book->image);

            $newImageName = time().'.'.$request->image->extension();

            $request->image->move(public_path('image'), $newImageName);

            $book->image= $newImageName;
        }

        $book->title = $request->input('title');
        $book->summary = $request->input('summary');
        $book->stock = $request->input('stock');
        $book->genre_id = $request->input('genre_id');

        $book->save();

        return redirect('/book');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);
        File::delete('image/'.$book->image);

        $book->delete();

        return redirect ('/book');
    }

    public function comments (Request $request, $book_id)
    {
        $request->validate([
            'content' => 'required'

        ]);

        $userId = Auth::id();

        $comment = new Comments;
        $comment->content = $request->input('content');
        $comment->book_id = $book_id;
        $comment->user_id = $userId;

        $commnet->save();

        return redirect('/book/'.$book_id);
    }
}
