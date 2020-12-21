@extends('layout.template')
@section('title','BOOK')

@section('content')
<h3>Data Buku</h3><br>
<a href="/book/add" class="btn btn-primary btn-sm mb-3">Add BooK</a>
   <table class="table table-hover table-bordered"><br>
      <thead>
         <tr>
            <th>NO</th>
            <th>TITLE</th>
            <th>PRICE</th>
            <th>DATE RELEASE</th>
            <th>ACTION</th>
         </tr>
      </thead>
      <tbody>
         <?php $no=1; ?>
         @foreach ($book as $b)
             <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $b->title }}</td>
                <td>Rp {{ number_format($b->price,2,',','.') }}</td>
                <td>{{ $b->date}}</td>
                <td>
                   <a href="/guru/detail/{{ $b->id_book }}" class="btn btn-sm btn-primary">Detail</a>
                   <a href="" class="btn btn-sm btn-warning">Edit</a>
                   <a href="" class="btn btn-sm btn-danger">Delete</a>
                </td>
             </tr>
         @endforeach
      </tbody>
   </table>
@endsection