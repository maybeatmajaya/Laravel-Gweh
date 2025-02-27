<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // Mengambil semua data
        $books = Book::all();

        // Mengambil data dengan ID 1
        $bookById = Book::find(1);

        // Mengambil data dengan harga > 1 juta
        $expensiveBooks = Book::where('harga', '>', 1000000)->get();

        return response()->json([
            'all_books' => $books,
            'book_by_id' => $bookById,
            'expensive_books' => $expensiveBooks
        ]);
    }

    public function updateBook()
{
    $book = Book::find(1);
    $book->harga = 16000000;
    $book->save();

    return "Harga buku diperbarui!";
}

public function deleteBook($id)
{
    $book = Book::find($id);
    if ($book) {
        $book->delete();
        return "Buku dengan ID $id berhasil dihapus.";
    } else {
        return "Buku tidak ditemukan.";
    }
}


    public function __construct()
    {
        $this->middleware('auth');
        // memastikan bahwa hanya user yang terautentikasi yang dapat mengakses route ini
        $this->middleware('auth')->only(['store', 'update', 'destroy']);
        // hanya untuk metode tertentu, middleware auth akan memastikan bahwa hanya user yang terautentikasi yang dapat mengakses route ini
        $this->middleware('guest')->except(['index', 'show']);
        // kecuali metode tertentu, guest middleware akan memastikan bahwa hanya user yang belum terautentikasi yang dapat mengakses route ini
    }

    // public function index(){
    //     return "Menampilkan semua buku";
    //     //
    // }

    public function show($id){
        return "Menampilkan buku dengan id: " . $id;
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function create(){
        return "Form tambah buku";
        //
    }

    // public function store(Request $request){
    //     return "Menyimpan buku baru";
    //     //
    // }

    public function edit(string $id)
    {
        return "Menampilkan form untuk edit buku dengan id: " . $id;
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Mengupdate buku dengan id: " . $id;
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Menghapus buku dengan id: " . $id;
        //
    }
    //
}
