@extends('layouts.app')
       
@section('content')

    @include('partials._configure')
    @include('partials._header')
    @include('partials._nav')

	<div class="container">
        <div class="row">

        <div class="col-lg-8">
          @foreach($posts as $post)
            @include('blog._postblock')
          @endforeach              
        @include('blog.pagination', ['paginator' => $posts])
        </div>
        
          <div class="col-lg-4">
            <div class="card animated fadeInUp animation-delay-7">
              <div class="ms-hero-bg-info ms-hero-img-mountain">
                <h3 class="color-white index-1 text-center no-m pt-4">Kishor Gujar</h3>
                <div class="color-medium index-1 text-center np-m">@kishorgujar143</div>
                <img src="assets/img/kishorgujar.jpg" alt="..." class="img-avatar-circle"> </div>
              <div class="card-block pt-4 text-center">
                <h3 class="color-primary">About me</h3>
                <p>Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates officia repudiandae beatae magni es magnam autem molestias.</p>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-google">
                  <i class="zmdi zmdi-google"></i>
                </a>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook">
                  <i class="zmdi zmdi-facebook"></i>
                </a>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter">
                  <i class="zmdi zmdi-twitter"></i>
                </a>
                <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram">
                  <i class="zmdi zmdi-instagram"></i>
                </a>
              </div>
            </div>
            
          </div>
        </div>
      </div>

	@include('partials._footer')
    @include('partials._copyrights')
    @include('partials._mobnav')

@endsection