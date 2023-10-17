<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request){
        // Lấy danh sách tất cả các sách.
        $books = Book::all();

        // Sắp xếp danh sách sách theo rating, giảm dần.
        $books = $books->sortByDesc('rating');

        // Lấy top 10 sách có rating cao nhất.
        $top10Books = $books->take(10);

        // Thêm dữ liệu từ bảng category và bảng author producer.
        foreach ($top10Books as $book) {
            $book->category = $book->category()->first();
            $book->author = $book->author()->first();
            $book->producer = $book->producer()->first();
        }
        // Trả về danh sách top 10 sách theo rating.
        return view('home',  compact('top10Books'));
    }


    public function detail(Request $request, $id){
        $detailBook = Book::findOrFail($id);
        $categories = Category::all();
        $similarBook = Book::select('*')
        ->where('cate_id', $detailBook->cate_id)
        ->get();
        return view('detail', compact('detailBook','similarBook','categories'));
    }

    public function cart(Request $request){
        $bookID = $request->bookID_hidden;
        $quantity = $request->quantityBook;
        $data = DB::table('books')->where('id', $bookID)->get();
      
        return view('cart');
    }
}
