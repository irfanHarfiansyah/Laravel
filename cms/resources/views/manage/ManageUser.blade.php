@extends('layouts.admin')

@section('title', 'Manage')
    
@section('content')

<style>
    .textCake{
        margin-left: 190px;
    }
    td.f{
        vertical-align: middle
    }
</style>

<div class="container" style="padding-top: 90px">
 <div class="textCake" style="padding-top: 10px">
        <p style="font-size: 50px">TABEL USER & ADMIN</p><a href="/manageUser/cetak_pdf" class="btn btn-warning float-left mb-4"target="_blank">CETAK PDF</a>
      
    <table class="table table-bordered table-striped" style="text-align: center" >
        <thead>
        <tr>
        <th>No</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Roles</th>      
        <th><i class="fas fa-sliders-h"></i></th>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $u)
        <tr >
            <td class="f">{{$u->id}}</td>
            <td><img height="80px" src="{{asset('/storage/'.$u->image)}}"></td>
            <td class="f">{{$u->name}}</td>
            <td class="f">{{$u->email}}</td>
            <td class="f">{{$u->roles}}</td>  
            <td class="f">
                <a href="manageUser/editUser/{{ $u->id }}" class="badge badge-warning">Edit</a>
                <a href="manageUser/delete/{{ $u->id }}" class="badge badge-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
        </tbody>
        </table>
    <a href="manageUser/addUser" class="btn btn-dark float-right mb-5">Tambah Data</a>
 </div>
</div>
@endsection