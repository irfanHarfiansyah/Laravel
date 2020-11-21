<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<div class="container" style="padding-top: 90px">
    <div class="textCake" style="padding-top: 10px">
        <p>EDIT TABEL</p>
      </div>
    <form action="/manageDrink/update/{{$drink->id}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$drink->id}}"><br>
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
            <input type="file" class="form-control" required="required" name="image" value="{{$drink->featured_image}}"></br>
            <img width="150px" src="{{asset('storage/'.$drink->featured_image)}}">
        </div>
        <button type="submit" name="edit" class="btn btn-dark float-right mb-5">Ubah Data</button>
    </form>
</div>