@extends('layouts.app')

@section('content')


@include('partials._configure')
@include('partials._header')
@include('partials._nav')

<div id="app">
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