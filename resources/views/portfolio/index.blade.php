@extends('layouts.app')

@section('content')


@include('partials._configure')
@include('partials._header')
@include('partials._nav')

<div class="ms-hero-page ms-hero-img-coffee ms-hero-bg-success mb-6">
    <div class="container">
        <div class="text-center">
            <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Portfolio</h1>
            <p class="lead lead-lg color-white text-center center-block mt-2 mb-4 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">Discover our projects and the
                <span class="color-warning">rigorous process</span> of creation. Our principles are creativity, design, experience and knowledge.</p>
            <a href="javascript:void(0)" class="btn btn-raised btn-warning animated fadeInUp animation-delay-10">
                <i class="zmdi zmdi-accounts"></i> Our Services</a>
            <a href="javascript:void(0)" class="btn btn-raised btn-info animated fadeInUp animation-delay-10">
                <i class="zmdi zmdi-email"></i> Concact us</a>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-lg-3 d-none d-lg-block">
            <div class="panel panel-dark panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-list-alt "></i> Categories</h3>
                </div>
                @foreach($categorys as $category)
                <a href="{{ route('portfolio.category',[$category->id, $category->slug]) }}" class="list-group-item list-group-item-action withripple">{{ $category->name }}
                    <span class="pull-right badge-pill bg-success">{{$category->portfolios->count()}}</span></a>  
                @endforeach 

            </div>
        </div>

        <div class="col-lg-9">
            <div class="row" id="Container">
                @foreach($portfolios as $portfolio)
                @include('portfolio._portfolio')
                @endforeach 

                @include('blog.pagination', ['paginator' => $portfolios])
            </div>
        </div>
    </div>
</div>
@include('partials._footer')
@include('partials._copyrights')
@include('partials._mobnav')

@endsection
@section('script')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection