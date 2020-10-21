@extends('layouts.Master')

@section('title', 'Manage')
    
@section('content')
<div class="container" style="padding-top: 90px" >
    <div class="textCake" style="padding-top: 10px">
        <p>MASUKKAN DATA</p>
      </div>
    <form action="/manageFood/create" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control"
            required="required" name="title"></br>
        </div>
    <hr style="background-color: orangered">   
        <h6>Content</h6>
        <textarea name="content" id="" cols="80" rows="9" style="margin-bottom: 30px"></textarea>
    <hr style="background-color: orangered">
        <div class="form-group">
            <label for="image">Feature Image</label>
            <input type="text" class="form-control"
            required="required" name="image"></br>
        </div>
        
        <button type="submit" name="add" class="btn btn-dark float-right" style="margin-bottom: 90px">Tambah Data</button>
    </form>
</div>
@endsection