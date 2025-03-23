<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // Menampilkan semua post
    public function index()
    {
        return response()->json(Book::all(), 200);
    }

    // menyimpan post baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'status' => 'required',
        ]);

        $book = Book::create($validated);
        return response()->json($book, 200);


        //
    }

    // menampilkan satu book berdasarkan id
    public function show($id)
    {
    $book = Book::find($id);
    if (!$book) {
    return response()->json(['message' => 'Book not found'], 404);
    }
    return response()->json($book, 200);
    }

    // Memperbarui book
    public function update(Request $request, $id)
    {
    $book = Book::find($id);
    if (!$book) {
    return response()->json(['message' => 'Book not found'], 404);
    }
    $book->update($request->all());
    return response()->json($book, 200);
    }

        // Menghapus book
    public function destroy($id)
    {
    $book = Book::find($id);
    if (!$book) {
    return response()->json(['message' => 'Book not found'], 404);
    }
    $book->delete();
    return response()->json(['message' => 'Book deleted'], 200);
    }
}
