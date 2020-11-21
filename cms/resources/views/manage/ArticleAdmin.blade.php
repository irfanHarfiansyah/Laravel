@extends('layouts.admin')

@section('title', 'Manage')
    
@section('content')
<style>
    .card{
        border: 5px solid rgb(233, 223, 137)
    }
    #layoutSidenav_content{
        background-image: url(https://weddinginvitations.nz/wp-content/uploads/2019/03/background-batik-putih-2.png);
    }
</style>
<div id="layoutSidenav_content">
    <main> 
        <div class="container-fluid"> 
            <div class="row" style="margin-top:40px;">
                <div class="card col-xl-3 col-md-6 mr-4 ml-5 bg-dark" style="width: 18rem;">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/12/48/15/d7/nachos-tacos-kimchi-fries.jpg" class="card-img-top mt-3" alt="...">
                    <div class="card-body text-center">
                    <h5 class="card-title" style="color: rgb(243, 243, 183)">FOOD</h5>
                    @can('manage')
                    <a href="manageFood" class="btn btn-warning">MANAGE</a>
                    @endcan
                    </div>
                </div>
                <div class="card col-xl-3 col-md-6 mr-5 ml-5 bg-dark" style="width: 18rem;">
                    <img src="https://cook.fnr.sndimg.com/content/dam/images/cook/fullset/2012/11/12/0/CCTLC104_Tsunami-Cocktail-recipe_s4x3.jpg.rend.hgtvcom.826.620.suffix/1357270825109.jpeg" class="card-img-top mt-3" alt="..." style="max-height: 170px">
                    <div class="card-body text-center">
                    @can('manage')
                    <h5 class="card-title" style="color: rgb(243, 243, 183)">DRINK</h5>
                    <a href="manageDrink" class="btn btn-warning">MANAGE</a>
                    @endcan
                    </div>
                </div>
                <div class="card col-xl-3 col-md-6 mr-5 ml-5 bg-dark" style="width: 18rem;">
                    <img src="https://images.immediate.co.uk/production/volatile/sites/30/2020/08/coffee-cake-4d37cac.jpg" class="card-img-top mt-3" alt="..." style="max-height: 170px">
                    <div class="card-body text-center">
                    <h5 class="card-title" style="color: rgb(243, 243, 183)">CAKE</h5>
                    <a href="manage" class="btn btn-warning">MANAGE</a>
                    </div>
                </div>
            </div>
            
        </div>
</div>
@endsection