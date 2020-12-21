<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BookModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_book')->get();
    }

    public function detailData($id_book)
    {
        return DB::table('tbl_book')->where('id_book', $id_book)->first();
    }

    
}