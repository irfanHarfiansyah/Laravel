@extends('layouts.Master')

@section('title', 'Resep-Cake')
    


@section('content')
<section class="articCake mt-5">
        <div class="container d-flex">
            <div class="artic card " style="width: 45rem;" >
                <img src="{{$article->featured_image}} " class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 style="color: rgb(240, 148, 27);">{{$article->title}}</h3>
                <p class="card-text">{{$article->content}}</p>
                </div>
            </div>
           @include('layouts.komposisi')
        </div>
        <div class="container">
            @include('layouts.Proses')
        </div>
        <div class="tes">
            @include('layouts.Caraousel')
        </div>
</section>

@include('layouts.Footer')

@endsection

