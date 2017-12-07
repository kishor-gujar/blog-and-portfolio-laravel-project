@extends('layouts.app')

@section('content')

@include('partials._configure')
@include('partials._header')
@include('partials._nav')

<div class="container">
    <div class="row">

        <div class="col-lg-8">
            @if ($posts->count())
            @foreach($posts as $post)
            @include('blog._postblock')
            @endforeach       
            @else
            <h3>No Posts yet in this category</h3>
            @endif       
            @include('blog.pagination', ['paginator' => $posts])
        </div>

        @include('blog._aboutme')

    </div>
</div>
</div>

@include('partials._footer')
@include('partials._copyrights')
@include('partials._mobnav')

@endsection