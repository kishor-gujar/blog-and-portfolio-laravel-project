@extends('layouts.app')

@section('content')

@include('partials._configure')
@include('partials._header')
@include('partials._nav')

<div class="container">
  <div class="row">
      @include('account._profile')
      <div class="col-lg-8">
        <form enctype="multipart/form-data" class="form-horizontal" autocomplete="off" method="post" action="{{route('account.post')}}">
              {{ csrf_field() }}
            <fieldset>
              <legend class="text-center">Edit Profile</legend>
              <div class="form-group row is-empty">
                <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Username</label>
                <div class="col-lg-10">
                  <input value="{{Auth::user()->name}}" name="name" type="text" class="form-control" id="inputName" placeholder="Username">
                  @if ($errors->has('name'))
                  <small class="has-error color-danger">{{ $errors->first('name') }}</small>
                  @endif
                  </div>
              </div>
              <div class="form-group row is-empty">
                <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                  <input value="{{Auth::user()->email}}" name="email" type="email" class="form-control" id="inputEmail" placeholder="Email">
                  @if ($errors->has('email'))
                  <small class="has-error color-danger">{{ $errors->first('email') }}</small>
                  @endif
                  </div>
              </div>

              <div class="form-group row justify-content-end is-empty is-fileinput">
                <label for="inputFile" class="col-lg-2 control-label">Avatar</label>
                <div class="col-lg-10">
                  <input type="text" readonly="" class="form-control" placeholder="Browse...">
                  <input name="avatar" type="file" id="inputFile">
                  @if ($errors->has('avatar'))
                  <small class="has-error color-danger">{{ $errors->first('avatar') }}</small>
                  @endif
                  </div>
              </div>
              <div class="form-group row justify-content-end">
                <div class="col-lg-10">
                  <button type="submit" class="btn btn-raised btn-primary">Submit<div class="ripple-container"></div></button>
                </div>
                </div>
              </fieldset>
              </form>
      </div>
  </div>
</div>

@include('partials._footer')
@include('partials._copyrights')
@include('partials._mobnav')
@endsection
