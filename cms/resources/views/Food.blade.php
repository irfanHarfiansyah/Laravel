@extends('layouts.Master')

@section('title', 'Home')
    
@section('content')
    

<!-- Page Content -->
<section class="cake">
  <div class="container">
    <div class="text2">
      <p>FOOD</p>
      <p>Temukan menu favoritmu di <span>CookingKuy <i class="fas fa-utensils"></i></span></p>
    </div>
  </div>


  <div class="container">
@foreach ($food as $fo)  
            <div class="card">
              <a href="#"><img class="card-img" src="{{ $fo->featured_image }}" alt=""></a>
              <div class="card-body ">
                <h4 class="card-title">
                 {{ $fo->title }}
                </h4>
                <p class="card-text">{{ Str::limit($fo->content, 100, '...') }}</p>
              </div>
              <a href="{{ './articleFood/'.$fo->id }}"><button class="ml-3 mb-3" style="outline: none";>Resep <i class="fas fa-arrow-right"></i></button></a>
              <div class="card-footer" style="background-color: #e0b65b;">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
   

@endforeach
    </div>
</section>
@include('layouts.Footer')
@endsection