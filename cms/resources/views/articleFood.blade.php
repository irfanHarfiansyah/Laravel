@extends('layouts.Master')

@section('title', 'Resep-Food')
    


@section('content')
<section class="articCake mt-5">
        <div class="container d-flex">
            <div class="artic card " style="width: 45rem;" >
                <img src="{{asset('storage/'.$food->featured_image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 style="color: rgb(240, 148, 27);">{{$food->title}}</h3>
                <p class="card-text">{{$food->content}}</p>
                </div>
            </div>
           @include('layouts.komposisi')
        </div>
        <div class="container">
            @include('layouts.Proses')
        </div>

        
@include('layouts.Caraousel')
</section>

@include('layouts.Footer')

@endsection
