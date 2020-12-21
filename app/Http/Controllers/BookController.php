<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookModel;

class BookController extends Controller
{
    public function __construct()
    {
        $this->BookModel = new BookModel;
    }

    public function book()
    {
        $data = [
            'book' => $this->BookModel->allData(),
        ];
        return view('book', $data);
    }

    public function add()
    {
        return view('addbook');
    }
}