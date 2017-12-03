@extends('layouts.app')
       
@section('content')

    @include('partials._configure')
    @include('partials._authenticate')
    @include('partials._header')
    @include('partials._nav')

    <div class="ms-hero-page-override ms-hero-img-team ms-hero-bg-primary">
        <div class="container">
          <div class="text-center">
            <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Contact Us</h1>
            <p class="lead lead-lg color-light text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">Do you need a boost in your project?
              <br>Contact us we will help you to finish your dream.</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="card card-hero animated fadeInUp animation-delay-7">
          <div class="card-block">
            <form class="form-horizontal">
              <fieldset class="container">
                <div class="form-group row is-empty">
                  <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Name</label>
                  <div class="col-lg-9">
                    <input type="text" class="form-control" id="inputName" placeholder="Name"> </div>
                </div>
                <div class="form-group row is-empty">
                  <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Email</label>
                  <div class="col-lg-9">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email"> </div>
                </div>
                <div class="form-group row is-empty">
                  <label for="inputEmail" autocomplete="false" class="col-lg-2 control-label">Subject</label>
                  <div class="col-lg-9">
                    <input type="text" class="form-control" id="inputSubject" placeholder="Subject"> </div>
                </div>
                <div class="form-group row is-empty">
                  <label for="textArea" class="col-lg-2 control-label">Message</label>
                  <div class="col-lg-9">
                    <textarea class="form-control" rows="3" id="textArea" placeholder="Yout message..."></textarea>
                  </div>
                </div>
                <div class="form-group row justify-content-end">
                  <div class="col-lg-10">
                    <button type="submit" class="btn btn-raised btn-primary">Submit</button>
                    <button type="button" class="btn btn-danger">Cancel</button>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
        <div class="card card-primary">
          <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-5">
              <div class="card-block wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="mb-2">
                  <span class="ms-logo ms-logo-sm mr-1">M</span>
                  <h3 class="no-m ms-site-title">Material
                    <span>Style</span>
                  </h3>
                </div>
                <address class="no-mb">
                  <p>
                    <i class="color-danger-light zmdi zmdi-pin mr-1"></i> 795 Folsom Ave, Suite 600</p>
                  <p>
                    <i class="color-warning-light zmdi zmdi-map mr-1"></i> San Francisco, CA 94107</p>
                  <p>
                    <i class="color-info-light zmdi zmdi-email mr-1"></i>
                    <a href="mailto:joe@example.com">example@domain.com</a>
                  </p>
                  <p>
                    <i class="color-royal-light zmdi zmdi-phone mr-1"></i>+34 123 456 7890 </p>
                  <p>
                    <i class="color-success-light fa fa-fax mr-1"></i>+34 123 456 7890 </p>
                </address>
              </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-7">
              <iframe width="100%" height="340" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48342.06480344582!2d-73.980069429762!3d40.775680208459505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2589a018531e3%3A0xb9df1f7387a94119!2sCentral+Park!5e0!3m2!1sen!2sus!4v1491233314840"></iframe>
            </div>
          </div>
        </div>
      </div>

    @include('partials._footer')
    @include('partials._copyrights')
    @include('partials._mobnav')

@endsection