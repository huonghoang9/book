<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        // truy vấn bằng model
        $book = new Book();
        $listBook = $book::all();
        if ($request->post() && $request->searchBook) {
            $listBook = $book::where('book_name', 'like', '%' . $request->searchBook . '%')->get();
        }
        return view('categories.list', compact('listBook'));


    }
}
