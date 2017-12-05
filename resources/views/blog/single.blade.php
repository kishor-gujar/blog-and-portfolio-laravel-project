@extends('layouts.app')
       
@section('content')

    @include('partials._configure')
    @include('partials._header')
    @include('partials._nav')

<div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="card animated fadeInLeftTiny animation-delay-5">
              <div class="card-block card-block-big">
                <h1 class="no-mt">{{ $post->title }}</h1>
                <div class="mb-4">
                  <img style="width: 80px; height: 80px;" src="{{ url('storage/'.$post->authorId->avatar) }}" alt="{{$post->authorId->name }}" class="img-circle mr-1"> by
                  <a href="javascript:void(0)">{{$post->authorId->name }}</a> in
                  <a href="{{ route('blog.category',[$post->category_id, $post->category->slug]) }}" class="ms-tag ms-tag-info">{{ $post->category->name }}</a>
                  <span class="ml-1 d-none d-sm-inline">
                    <i class="zmdi zmdi-time mr-05 color-info"></i>
                    <span class="color-medium-dark">{{ date('F d, Y', strtotime($post->created_at)) }}</span>
                  </span>
                </div>
                <img src="{{ url('storage/'.$post->image) }}" alt="{{ $post->title }}" class="img-fluid mb-4">
                {!! $post->body !!}
              </div>
            </div>
          </div>
          
          @include('blog._aboutme')

            </div>
          </div>
        </div>
      </div>

	@include('partials._footer')
    @include('partials._copyrights')
    @include('partials._mobnav')

@endsection