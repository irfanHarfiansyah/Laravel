<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<div class="container" style="padding-top: 90px">
    <div class="textCake" style="padding-top: 10px">
        <p>EDIT TABEL</p>
      </div>
    <form action="/manageUser/update/{{$user->id}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$user->id}}"><br>
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" required="required" name="name" value="{{$user->name}}"><br>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text"  class="form-control" required="required" name="email" style="height:90px;" value="{{$user->email}}"></br>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" required="required" name="password" value="{{$user->password}}"></br>
        </div>
        <div class="form-group">
            <label for="roles" name="roles" value="{{$user->roles}} ">Roles</label>
            <select id="roles" class="form-control" name="roles" >
                <option value="{{$user->roles}}">- Pilih Roles</option>
                <option name="roles" value="{{$user->roles}}">Admin</option>
                <option name="roles" value="{{$user->roles}}">User</option>
            </select>
        </div>
        <p>Image</p>
        <div class="card pmd-card mb-4">   
            <div class="card-body"> 
                <div class="custom-file pmd-custom-file">
                    <input type="file" class="custom-file-input" id="customFile"  name="image" value="{{$user->image}}">
                <label class="custom-file-label" for="image" value="{{$user->image}}">{{$user->image}}</label>
                </div>
            </div>
        </div>
         <img height="120px" src="{{asset('/storage/'.$user->image)}}" style="border: 1px solid rgba(161, 161, 161, 0.582)">
        <button type="submit" name="edit" class="btn btn-dark float-right mb-5">Ubah Data</button>
    </form>
</div>