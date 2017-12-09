@extends('layouts.app')

@section('content')

@include('partials._configure')
@include('partials._header')
@include('partials._nav')

<div class="container">
  <div class="row">
      @include('account._profile')
    <div class="col-lg-8">
      <div class="card card-primary animated fadeInUp animation-delay-12">
        <div class="card-header">
          <h3 class="card-title">
            <i class="zmdi zmdi-account-circle"></i> General Information</h3>
        </div>
        <table class="table table-no-border table-striped">
          <tbody><tr>
            <th>
              <i class="zmdi zmdi-account mr-1 color-success"></i> User Name</th>
            <td>{{Auth::user()->name}}</td>
          </tr>
          <tr>
            <th>
              <i class="zmdi zmdi-face mr-1 color-warning"></i> Fullname</th>
            <td>Victoria Smith</td>
          </tr>
          <tr>
            <th>
              <i class="zmdi zmdi-email mr-1 color-danger"></i> Email</th>
            <td>
              <a href="#">{{Auth::user()->email}}</a>
            </td>
          </tr>
          <tr>
            <th>
              <i class="zmdi zmdi-calendar mr-1 color-royal"></i> Member Since</th>
            <td>{{date('F d, Y', strtotime(Auth::user()->created_at))}}</td>
          </tr>
        </tbody></table>
      </div>
    </div>
  </div>
</div>

@include('partials._footer')
@include('partials._copyrights')
@include('partials._mobnav')
@endsection
