@extends('layouts.app')

@section('content')

@include('partials._configure')
@include('partials._header')
@include('partials._nav')

<div class="ms-hero-page mb-6 ms-hero-bg-primary ms-hero-img-coffee">
    <h2 class="text-center no-m pt-4 pb-4 color-white index-1">{{ $portfolio->title }}</h2>
    <p class="lead color-white index-1 text-center">{{ $portfolio->excerpt }}</p>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div id="carousel-example-generic" class="ms-carousel carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{ $portfolio->image1 }}" alt="...">
                            <div class="carousel-caption">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{ $portfolio->image2 }}" alt="...">
                            <div class="carousel-caption">
                                <h3>{{ $portfolio->title }}</h3>
                                <p>{{ $portfolio->excerpt }}</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{ $portfolio->image3 }}" alt="...">
                            <div class="carousel-caption">
                                <h3>Lorem ipsum dolor</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a href="#carousel-example-generic" class="btn-circle btn-circle-xs btn-circle-raised btn-circle-primary left carousel-control-prev" role="button" data-slide="prev">
                        <i class="zmdi zmdi-chevron-left"></i>
                    </a>
                    <a href="#carousel-example-generic" class="btn-circle btn-circle-xs btn-circle-raised btn-circle-primary right carousel-control-next" role="button" data-slide="next">
                        <i class="zmdi zmdi-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="ms-hero-bg-primary ms-hero-img-mountain">
                    <h2 class="text-center no-m pt-4 pb-4 color-white index-1">Item Info</h2>
                </div>
                <div class="card-block">
                    <h3 class="color-primary no-mt">Data</h3>
                    <ul class="list-unstyled">
                        <li>
                            <strong>Title:</strong> {{ $portfolio->title }}</li>
                        <li>
                            <strong>Categories:</strong> {{ $portfolio->category->name }}.</li>
                        <li>
                            <strong>Author:</strong> {{ $portfolio->authorId->name }}</li>
                        <li>
                            <strong>Year:</strong> {{ date('Y', strtotime($portfolio->created_at)) }}</li>
                    </ul>
                    <h3 class="color-primary">Description</h3>
                    <p>{!! $portfolio->body !!}</p>
                    <p class="text-center">
                        <a href="#" class="btn btn-raised btn-primary">
                            <i class="fa fa-desktop"></i> Live Preview</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <h2 class="right-line mt-6">Related Works</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <a href="javascript:void(0)">
                    <img src="assets/img/demo/port4.jpg" alt="..." class="img-fluid"> </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <a href="javascript:void(0)">
                    <img src="assets/img/demo/port7.jpg" alt="..." class="img-fluid"> </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <a href="javascript:void(0)">
                    <img src="assets/img/demo/port9.jpg" alt="..." class="img-fluid"> </a>
            </div>
        </div>
    </div>
</div>
@include('partials._footer')
@include('partials._copyrights')
@include('partials._mobnav')

@endsection