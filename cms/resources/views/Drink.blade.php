@extends('layouts.Master')

@section('title', 'Drink')
    
@section('content')
    

<!-- Page Content -->
<section class="cake">
  <div class="container">
    <div class="text2">
      <p>DRINK</p>
      <p>Temukan menu favoritmu di <span>CookingKuy <i class="fas fa-utensils"></i></span></p>
    </div>
  </div>


  <div class="container">
@foreach ($drink as $dr)  
            <div class="card">
              <a href="#"><img class="card-img" src="{{ $dr->featured_image }}" alt=""></a>
              <div class="card-body ">
                <h4 class="card-title">
                 {{ $dr->title }}
                </h4>
                <p class="card-text">{{ Str::limit($dr->content, 100, '...') }}</p>
              </div>
              <a href="{{ './articleDrink/'.$dr->id }}"><button class="ml-3 mb-3" style="outline: none";>Resep <i class="fas fa-arrow-right"></i></button></a>
              <div class="card-footer" style="background-color: #e0b65b;;">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734; </small>
              </div>
            </div>
   

@endforeach
<div class="next">
   
</div>
    </div>
</section>
@include('layouts.Footer')
@endsection

