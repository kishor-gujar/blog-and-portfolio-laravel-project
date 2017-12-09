@extends('layouts.app')

@section('content')

@include('partials._configure')
@include('partials._header')
@include('partials._nav')

<div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="row">
              <div class="col-lg-12 col-md-6 order-md-1">
                <div class="card animated fadeInUp animation-delay-7">
                  <div class="ms-hero-bg-primary ms-hero-img-coffee">
                    <h3 class="color-white index-1 text-center no-m pt-4">Victoria Smith</h3>
                    <div class="color-medium index-1 text-center np-m">@vic_smith</div>
                    <img src="assets/img/demo/avatar1.jpg" alt="..." class="img-avatar-circle"> </div>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 order-md-3 order-lg-2">
                <a href="javascript:void(0)" class="btn btn-warning btn-raised btn-block animated fadeInUp animation-delay-12">
                  <i class="zmdi zmdi-edit"></i> Edit Profile</a>
                <a href="javascript:void(0)" class="btn btn-danger btn-raised btn-block animated fadeInUp animation-delay-12">
                  <i class="zmdi zmdi-delete"></i> Delete User</a>
              </div>

            </div>
          </div>
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
                  <td>vic_smith</td>
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
                    <a href="#">mail@example.com</a>
                  </td>
                </tr>
                <tr>
                  <th>
                    <i class="zmdi zmdi-link mr-1 color-info"></i> Website</th>
                  <td>
                    <a href="#">www.example.com</a>
                  </td>
                </tr>
                <tr>
                  <th>
                    <i class="zmdi zmdi-calendar mr-1 color-royal"></i> Member Since</th>
                  <td>12/11/2015</td>
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
