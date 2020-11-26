<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<div class="container" style="padding-top: 90px" >
    <div class="textCake" style="padding-top: 10px">
        <p>MASUKKAN DATA</p>
      </div>
    <form action="/manageUser/create" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control"
            required="required" name="name"></br>
        </div>
    <hr style="background-color: orangered">   
        <h6>E-mail</h6>
        <textarea name="email" id="" cols="80" rows="9" style="margin-bottom: 30px"></textarea>
    <hr style="background-color: orangered">
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control"
            required="required" name="password"></br>
        </div>
        <hr style="background-color: orangered">
        <div class="form-group">
            <label for="roles" name="roles" >Roles</label>
            <select id="roles" class="form-control" name="roles" >
                <option>- Pilih Roles</option>
                <option name="roles" value="Administrator">Admin</option>
                <option name="roles" value="User">User</option>
            </select>
        </div>
        <hr style="background-color: orangered">
        <div class="form-group">
            <label for="image">Feature Image</label>
            <input type="file" class="form-control" required="required" name="image"></br>
        </div> 
        
        
        <button type="submit" name="add" class="btn btn-dark float-right" style="margin-bottom: 90px">Tambah Data</button>
    </form>
</div>