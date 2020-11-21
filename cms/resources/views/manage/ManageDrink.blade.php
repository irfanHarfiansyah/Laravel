@extends('layouts.admin')

@section('title', 'Manage-Drink')
    
@section('content')
<style>
    .textCake{
        margin-left: 190px;
    }
</style>
<div class="container" style="padding-top: 90px">
    <div class="textCake" style="padding-top: 10px">
        <p style="font-size: 50px">TABEL DRINK</p>
        <a href="/manageDrink/cetak_pdf" class="btn btn-warning float-left mb-4"target="_blank">CETAK PDF</a>
      
    <table class="table table-bordered table-striped" style="text-align: center" >
        <thead>
        <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Tanggal</th>
        <th>Foto</th>
        <th><i class="fas fa-sliders-h"></i></th>
        </tr>
        </thead>
        <tbody>
        @foreach($drink as $a)
        <tr>
            <td>{{$a->id}}</td>
            <td>{{$a->title}}</td>
            <td>{{$a->created_at}}</td>
            <td> <img height="150px" src="{{asset('/storage/'.$a->featured_image)}}"></td>
            <td><a href="manageDrink/editDrink/{{ $a->id }}" class="badge badge-warning">Edit</a>
                <a href="manageDrink/delete/{{ $a->id }}" class="badge badge-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
 </div>
    <a href="manageDrink/addDrink" class="btn btn-dark float-right mb-5">Tambah Data</a>
</div>

@endsection
    