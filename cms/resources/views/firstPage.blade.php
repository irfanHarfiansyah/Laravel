@extends('layouts.Master')

@section('title', 'First-Page')
    
@section('content')

<section class="konten">
  <div class="container">
      <div class="all ">
          <div class="text1">
              <p>Selamat Datang Di <span> <br> CookingKuy <i class="fas fa-utensils ml-2"></i> </span> </p>
              <p>Disini tempat resep yang paling tepat</p>
          </div>
          <div class="ilus">
              <img src="/img/cooking.svg" alt="">
          </div>
      </div>
      <div class="gambar">
          <img src="/img/chicke.png" alt="">
      </div>
      <div class="line">
          <img src="img/Line1.png" alt="">
          <img src="img/Line2.png" alt="">
      </div>
  </div>
</section>
@endsection