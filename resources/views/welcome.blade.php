@extends('layouts.app')
@section('title', 'Accueil')
@section('content')

<!--================ Start Home Banner Area =================-->
<section class="home_banner_area">
      <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-center">
              <div class="col-12 text-center">
              <div class="banner_content text-center">
                <p>COLLÈGE DE MAISONNEUVE</p>
                <p>Conception et programmation de sites Web (NWE.0F - 2020)</p>
                <h3 class="display-one mt-5">{{ config('app.name')}}</h3>
                <h1 class="text-uppercase mt-3 mb-5">Hamid Omranabasi - E2295313</h1>
                <div>
                <a href="{{ route('blog.index')}}" class="btn btn-outline-primary primary-btn2 mb-3 mb-sm-0">Afficher les étudients</a>
                </div>
              </div>
            </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Home Banner Area =================-->
@endsection