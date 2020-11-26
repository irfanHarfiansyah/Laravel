@extends('layouts.admin')

@section('title', 'Manage-Food')
    
@section('content')
<style>
    .textCake{
        margin-left: 190px;
    }
    td.f{
        vertical-align: middle;
    }
</style>
<div class="container" style="padding-top: 90px">
    <div class="textCake" style="padding-top: 10px">
        <p style="font-size: 50px">TABEL FOOD</p>
        <a href="/manageFood/cetak_pdf" class="btn btn-warning float-left mb-4"target="_blank">CETAK PDF</a>
      
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
        @foreach($food as $a)
        <tr>
            <td class="f">{{$a->id}}</td>
            <td class="f">{{$a->title}}</td>
            <td class="f">{{$a->created_at}}</td>
            <td > <img height="120px" width="190px" src="{{asset('/storage/'.$a->featured_image)}}" style="object-fit: cover"></td>
            <td class="f"><a href="manageFood/editFood/{{ $a->id }}" class="badge badge-warning">Edit</a>
                <a href="manageFood/delete/{{ $a->id }}" class="badge badge-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
 </div>
    <a href="manageFood/addFood" class="btn btn-dark float-right mb-5">Tambah Data</a>
</div>

@endsection
    