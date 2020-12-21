<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AuthorModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_author')->get();
    }

    public function detailData($id_author)
    {
        return DB::table('tbl_author')->where('id_author', $id_author)->first();
    }

    public function addData($data)
    {
        DB::table('tbl_author')->insert($data);
    }

    public function editData($id_author, $data)
    {
        DB::table('tbl_author')->where('id_author',$id_author)->update($data);
    }

    public function hapusData($id_author)
    {
        DB::table('tbl_author')->where('id_author',$id_author)->delete();
    }

}