<div class="col-lg-4">
  <div class="row">
    <div class="col-lg-12 col-md-6 order-md-1">
      <div class="card animated fadeInUp animation-delay-7">
        <div class="ms-hero-bg-primary ms-hero-img-coffee">
          <h4 class="color-white index-1 text-center no-m pt-4">Hello,</h4>
          <h3 class="color-white index-1 text-center no-m pt-4">{{Auth::user()->name}}</h3>
          <img src="{{ Voyager::image( Auth::user()->avatar ) }}" alt="..." class="img-avatar-circle"> </div>
      </div>
    </div>
    <div class="col-lg-12 col-md-12 order-md-3 order-lg-2 pt-4">
      <a href="{{route('account.edit')}}" class="btn btn-warning btn-raised btn-block animated fadeInUp animation-delay-12">
        <i class="zmdi zmdi-edit"></i> Edit Profile</a>
      <a href="javascript:void(0)" class="btn btn-danger btn-raised btn-block animated fadeInUp animation-delay-12">
        <i class="zmdi zmdi-delete"></i> Delete Account</a>
    </div>

  </div>
</div>
