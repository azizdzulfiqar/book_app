@extends('layout.template')
@section('title','BOOK')

@section('content')
@if (session('pesan'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> Alert!</h5>
    Success alert preview. This alert is dismissable.
  </div>
@endif
<h3>Data Author</h3><br>
<a href="/author/add" class="btn btn-primary btn-sm mb-3">Add Author</a>
   <table class="table table-hover table-bordered"><br>
      <thead>
         <tr>
            <th>NO</th>
            <th>NAME</th>
            <th>AGE</th>
            <th>GENDER</th>
            <th>ACTION</th>
         </tr>
      </thead>
      <tbody>
         <?php $no=1; ?>
         @foreach ($author as $a)
             <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $a->name }}</td>
                <td>{{ $a->age }}</td>
                <td>{{ $a->gender }}</td>
                <td>
                   <a href="/author/edit/{{ $a->id_author }}" class="btn btn-sm btn-warning">Edit</a>
                   <a href="/author/hapus/{{ $a->id_author }}" class="btn btn-sm btn-danger">Delete</a>
                </td>
             </tr>
         @endforeach
      </tbody>
   </table>
@endsection