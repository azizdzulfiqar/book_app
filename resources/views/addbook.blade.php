@extends('layout.template')
@section('title','ADD BOOK')

@section('content')
<h3>Add Book</h3>
   <form action="/book/insert" method="POST" enctype="multipart/form-data">
        <div class="content">
            <div class="row">

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Title Book</label>
                        <input type="text" name="title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="date" class="form-control">
                    </div>
                </div>
                
            </div>
        </div>
   </form>
@endsection