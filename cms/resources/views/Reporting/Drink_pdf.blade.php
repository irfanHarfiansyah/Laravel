<!DOCTYPE html>
<html>
<head>
<title>Laporan Artikel Drink</title>
<style>
  table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: center;
}
    </style>
</head>
<body>
<center>
<h2>Laporan Artikel Drink</h2>
</center>
<table>
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Gambar</th>
    
    </tr>
@php $i=1 @endphp
@foreach($drink as $a)
<tr>
    <td>{{ $i++ }}</td>
    <td>{{$a->title}}</td>
    <td style="text-align: justify;">{{$a->content}}</td>
    <td><img height="120px" width="190px" src="{{public_path('storage/'.$a->featured_image)}}" style="object-fit: cover"></td>
</tr>
@endforeach
</table>
</body>
</html>
