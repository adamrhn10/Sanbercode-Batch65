<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Books;
use Illuminate\Support\Facades\File;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;
use App\Http\Middleware\IsAdmin;

class BooksController extends Controller implements HasMiddleware
{
    /**
     * Display a listing of the resource.
     */

    public static function middleware(): array
    {
        return [
            new Middleware(['auth', IsAdmin::class], except: ['index', 'show'])
        ];
    }
    public function index()
    {
        $books = Books::all();

        return view('books.tampil', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genre = Genre::all();

        return view('books.tambah', ['genre' => $genre]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'summary' => 'required',
            'stok' => 'required',
            'genre_id' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:2048',
        ]);

        // buat nama gambar menjadi uniq
        $imageUniqName = time() . '.' . $request->image->extension();

        // tempat penyimpanan data
        $request->image->move(public_path('image'), $imageUniqName);

        // insert data
        $books = new Books;

        $books->title = $request->input('title');
        $books->summary = $request->input('summary');
        $books->stok = $request->input('stok');
        $books->genre_id = $request->input('genre_id');
        $books->image = $imageUniqName;

        $books->save();

        return redirect('/books');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $books = Books::find($id);

        return view('books.detail', ['books' => $books]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $books = Books::find($id);

        $genre = Genre::all();

        return view('books.edit', ['books' => $books, 'genre' => $genre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'title' => 'required',
            'summary' => 'required',
            'stok' => 'required',
            'genre_id' => 'required',
            'image' => 'mimes:jpg,png,jpeg|max:2048',
        ]);

        $books = Books::find($id);

        if ($request->has('image')) {
            // Hapus Data Lama
            File::delete('image/' . $books->image);

            // buat nama gambar uniq
            $newimageUniqName = time() . '.' . $request->image->extension();

            // tempat penyimpanan gambar
            $request->image->move(public_path('image'), $newimageUniqName);

            $books->image = $newimageUniqName;
        }

        $books->title = $request->input('title');
        $books->summary = $request->input('summary');
        $books->stok = $request->input('stok');
        $books->genre_id = $request->input('genre_id');

        $books->save();

        return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $books = Books::find($id);

        // Hapus image
        File::delete('image/' . $books->image);

        $books->delete();

        return redirect('/books');
    }
}
