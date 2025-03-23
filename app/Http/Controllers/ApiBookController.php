<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiBookController extends Controller
{

    public function index()
    {
        return response()->json(Book::all(),);
    }

    public function show($id)
    {
        return response()->json(Book::find($id));
    }

    public function store(Request $request)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
