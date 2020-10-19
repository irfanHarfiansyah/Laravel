@extends('layouts.Master')

@section('title', 'Manage-Cake')
    
@section('content')

<div class="container" style="padding-top: 90px">
    <div class="textCake" style="padding-top: 10px">
        <p>EDIT TABEL</p>
      </div>
    <form action="/manage/update/{{$article->id}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$article->id}}"><br>
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" required="required" name="title" value="{{$article->title}}"><br>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text"  class="form-control" required="required" name="content" style="height:90px;" value="{{$article->content}}"></br>
        </div>
        <div class="form-group">
            <label for="image">Feature Image</label>
            <input type="text" class="form-control" required="required" name="image" value="{{$article->featured_image}}"></br>
        </div>
        <button type="submit" name="edit" class="btn btn-dark float-right">Ubah Data</button>
    </form>
</div>
@endsection