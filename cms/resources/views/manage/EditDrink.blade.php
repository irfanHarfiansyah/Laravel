@extends('layouts.Master')

@section('title', 'Manage-Drink')
    
@section('content')

<div class="container" style="padding-top: 90px">
    <div class="textCake" style="padding-top: 10px">
        <p>EDIT TABEL</p>
      </div>
    <form action="/manageDrink/update/{{$drink->id}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$food->id}}"><br>
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" required="required" name="title" value="{{$drink->title}}"><br>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text"  class="form-control" required="required" name="content" style="height:90px;" value="{{$drink->content}}"></br>
        </div>
        <div class="form-group">
            <label for="image">Feature Image</label>
            <input type="text" class="form-control" required="required" name="image" value="{{$drink->featured_image}}"></br>
        </div>
        <button type="submit" name="edit" class="btn btn-dark float-right">Ubah Data</button>
    </form>
</div>
@endsection