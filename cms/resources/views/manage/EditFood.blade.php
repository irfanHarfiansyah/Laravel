<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<div class="container" style="padding-top: 90px">
    <div class="textCake" style="padding-top: 10px">
        <p>EDIT TABEL</p>
      </div>
    <form action="/manageFood/update/{{$food->id}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$food->id}}"><br>
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" required="required" name="title" value="{{$food->title}}"><br>
        </div>
        
       <div class="form-group">
            <label for="content">Content</label>
            <input type="text"  class="form-control" required="required" name="content" style="height:90px;" value="{{$food->content}}"></br>
        </div>
        <p>Image</p>
        <div class="card pmd-card mb-4">   
            <div class="card-body"> 
                <div class="custom-file pmd-custom-file">
                    <input type="file" class="custom-file-input" id="customFile"  name="image" value="{{$food->featured_image}}">
                <label class="custom-file-label" for="image" value="{{$food->featured_image}}">{{$food->featured_image}}</label>
                </div>
            </div>
        </div>
        <button type="submit" name="edit" class="btn btn-dark float-right">Ubah Data</button>
    </form>
</div>