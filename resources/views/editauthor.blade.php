@extends('layout.template')
@section('title','EDIT AUTHOR')

@section('content')
<h3>Add Author</h3>
   <form action="/author/update/{{ $author->id_author }}" method="POST" enctype="multipart/form-data">
    @csrf

        <div class="content">
            <div class="row">

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $author->name }}"> 
                    </div>

                    <div class="form-group">
                        <label>Age</label>
                        <input type="text" name="age" class="form-control" value="{{ $author->age }}">
                    </div>

                    <div class="form-group">
                        <label>Gender</label>
                        <input type="text" name="gender" class="form-control" value="{{ $author->gender }}">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary mt-3">Save</button>
                    </div>
                </div>
                
            </div>
        </div>
   </form>
@endsection