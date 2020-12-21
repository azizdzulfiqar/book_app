<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthorModel;

class AuthorController extends Controller
{
    public function __construct()
    {
        $this->AuthorModel = new AuthorModel;
    }

    public function author()
    {
        $data = [
            'author' => $this->AuthorModel->allData(),
        ];
        return view('author', $data);
    }

    public function add()
    {
        return view('addauthor');
    }

    public function insert()
    {   
        $data = [
            'name' => Request()->name,
            'age' => Request()->age,
            'gender' => Request()->gender
        ];
        $this->AuthorModel->addData($data);
        return redirect('/author')->with('pesan','Data Berhasil Di Tambahkan !');
    }

    public function edit($id_author)
    {
        if (!$this->AuthorModel->detailData($id_author)){
            abort(404);
        }

        $data=[
            'author' => $this->AuthorModel->detailData($id_author)
        ];
        return view('editauthor', $data);
    }

    public function update($id_author)
    {   
        $data = [
            'name' => Request()->name,
            'age' => Request()->age,
            'gender' => Request()->gender
        ];
        $this->AuthorModel->editData($id_author,$data);
        return redirect('/author')->with('pesan','Data Berhasil Di Edit !');
    }

    public function hapus($id_author)
    {
        $this->AuthorModel->hapusData($id_author);
        return redirect('/author')->with('pesan','Data Berhasil Di Hapus !');
    }
}