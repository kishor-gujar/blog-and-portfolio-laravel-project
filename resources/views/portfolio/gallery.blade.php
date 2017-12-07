@extends('layouts.app')

@section('content')

@include('partials._configure')
@include('partials._header')
@include('partials._nav')

<div class="material-background"></div>
<div class="text-center mb-6">
    <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Gallery</h1>
    <p class="lead lead-lg color-white text-center center-block mt-2 mb-4 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">Discover our projects and the
        <span class="colorStar">rigorous process</span> of creation. Our principles are creativity, design, experience and knowledge.</p>
</div>

<div class="container">
    <div class="row">
        @foreach($portfolios as $portfolio)
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                <div class="card-block p-05 ">
                    <div class="withripple zoom-img">
                        <a href="{{ route('portfolio.single',[$portfolio->id, $portfolio->slug]) }}">
                            <img src="{{$portfolio->image1}}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>   
        @endforeach
        @include('blog.pagination', ['paginator' => $portfolios])

    </div>
</div>

@include('partials._footer')
@include('partials._copyrights')
@include('partials._mobnav')

@endsection