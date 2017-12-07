@extends('layouts.app')

@section('content')

@include('partials._configure')
@include('partials._header')
@include('partials._nav')

<div class="ms-hero-page-override ms-hero-img-city ms-hero-bg-primary">
    <div class="container">
        <div class="text-center">
            <span class="ms-logo ms-logo-lg ms-logo-white center-block mb-2 mt-2 animated zoomInDown animation-delay-5">M</span>
            <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Material
                <span>Style</span>
            </h1>
            <p class="lead lead-lg color-white text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">Discover our projects and the
                <span class="color-warning">rigorous process</span> of creation. Our principles are creativity, design, experience and knowledge.</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="card card-hero animated slideInUp animation-delay-8 mb-6">
        <div class="card-block">
            <h2 class="color-primary">About Us</h2>
            <div class="row">
                <div class="col-lg-6 text-justify">
                    <p class="dropcaps">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam ipsa id saepe, quos ullam fugiat velit pariatur alias cumque. Architecto et vitae perferendis cumque ratione officiis? Quas quod, rerum dolores qui. Iste magnam ipsam laborum.
                        Natus quis maiores est qui maxime, consectetur ipsam esse quaerat facilis quos repudiandae eaque magni laboriosam amet.</p>
                    <p>Perferendis, blanditiis unde fugiat voluptas molestias velit asperiores rerum ipsam animi eum temporibus at numquam, nobis voluptates minus maxime cum obcaecati! Tenetur sit corporis laudantium inventore officia officiis odio repellat
                        dolore quos repudiandae voluptas ad facere, amet placeat animi voluptatem distinctio beatae.</p>
                </div>
                <div class="col-lg-6 text-justify">
                    <p>Non sequi adipisci nostrum natus rem accusamus itaque repellendus illum neque! Voluptate, error commodi a quaerat eveniet tenetur reiciendis nulla doloremque iusto repellat quis asperiores, quibusdam architecto culpa facere aliquam placeat
                        eaque amet, optio nobis alias maiores. Nulla perferendis impedit hic placeat veniam distinctio error.</p>
                    <p>Tenetur numquam a, nesciunt neque odit amet, qui quibusdam natus assumenda quas omnis, aspernatur quisquam nobis illum ea distinctio tempora quaerat. Aperiam cumque, eveniet similique praesentium, temporibus, id quis labore aspernatur
                        quod placeat ducimus fuga consequuntur numquam autem. Voluptates repellat.</p>
                </div>
            </div>
            <hr class="dotted">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card card-info card-flat">
                        <div class="card-block text-center">
                            <i class="fa fa-rocket color-info font-big"></i>
                            <h4 class="color-info">Lorem ipsum dolor</h4>
                            <p>Id quam odio voluptates porro harum ducimus non provident, dolor, modi accusantium.</p>
                            <a href="javascript:void(0)" class="btn btn-info">
                                <i class="zmdi zmdi-download"></i> Button</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-warning card-flat">
                        <div class="card-block text-center">
                            <i class="zmdi zmdi-airplane color-warning font-big"></i>
                            <h4 class="color-warning">Lorem ipsum dolor</h4>
                            <p>Id quam odio voluptates porro harum ducimus non provident, dolor, modi accusantium.</p>
                            <a href="javascript:void(0)" class="btn btn-warning">
                                <i class="zmdi zmdi-download"></i> Button</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-danger card-flat">
                        <div class="card-block text-center">
                            <i class="zmdi zmdi-coffee color-danger font-big"></i>
                            <h4 class="color-danger">Lorem ipsum dolor</h4>
                            <p>Id quam odio voluptates porro harum ducimus non provident, dolor, modi accusantium.</p>
                            <a href="javascript:void(0)" class="btn btn-danger">
                                <i class="zmdi zmdi-download"></i> Button</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-success card-flat">
                        <div class="card-block text-center">
                            <i class="zmdi zmdi-nature-people color-success font-big"></i>
                            <h4 class="color-success">Lorem ipsum dolor</h4>
                            <p>Id quam odio voluptates porro harum ducimus non provident, dolor, modi accusantium.</p>
                            <a href="javascript:void(0)" class="btn btn-success">
                                <i class="zmdi zmdi-download"></i> Button</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrap ms-hero-bg-dark-light ms-hero-img-airplane ms-bg-fixed mb-6 mt-4">
    <div class="container">
        <h2 class="text-center color-white no-mt mb-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Our Services</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                <div class="ms-icon-feature wow flipInX animation-delay-4" style="visibility: visible; animation-name: flipInX;">
                    <div class="ms-icon-feature-icon">
                        <span class="ms-icon ms-icon-lg ms-icon-inverse ms-icon-white">
                            <i class="fa fa-cloud"></i>
                        </span>
                    </div>
                    <div class="ms-icon-feature-content">
                        <h4 class="color-primary">Cloud Computing</h4>
                        <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                <div class="ms-icon-feature wow flipInX animation-delay-4" style="visibility: visible; animation-name: flipInX;">
                    <div class="ms-icon-feature-icon">
                        <span class="ms-icon ms-icon-lg ms-icon-inverse ms-icon-white">
                            <i class="fa fa-desktop"></i>
                        </span>
                    </div>
                    <div class="ms-icon-feature-content">
                        <h4 class="color-primary">Web Design and SEO</h4>
                        <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                <div class="ms-icon-feature wow flipInX animation-delay-4" style="visibility: visible; animation-name: flipInX;">
                    <div class="ms-icon-feature-icon">
                        <span class="ms-icon ms-icon-lg ms-icon-inverse ms-icon-white">
                            <i class="fa fa-tablet"></i>
                        </span>
                    </div>
                    <div class="ms-icon-feature-content">
                        <h4 class="color-primary">Mobile and Tablet Apps</h4>
                        <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                <div class="ms-icon-feature wow flipInX animation-delay-4" style="visibility: visible; animation-name: flipInX;">
                    <div class="ms-icon-feature-icon">
                        <span class="ms-icon ms-icon-lg ms-icon-inverse ms-icon-white">
                            <i class="fa fa-wordpress"></i>
                        </span>
                    </div>
                    <div class="ms-icon-feature-content">
                        <h4 class="color-primary">Wordpress Themes</h4>
                        <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                <div class="ms-icon-feature wow flipInX animation-delay-4" style="visibility: visible; animation-name: flipInX;">
                    <div class="ms-icon-feature-icon">
                        <span class="ms-icon ms-icon-lg ms-icon-inverse ms-icon-white">
                            <i class="fa fa-graduation-cap"></i>
                        </span>
                    </div>
                    <div class="ms-icon-feature-content">
                        <h4 class="color-primary">Training and development</h4>
                        <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 mb-2">
                <div class="ms-icon-feature wow flipInX animation-delay-4" style="visibility: visible; animation-name: flipInX;">
                    <div class="ms-icon-feature-icon">
                        <span class="ms-icon ms-icon-lg ms-icon-inverse ms-icon-white">
                            <i class="fa fa-send"></i>
                        </span>
                    </div>
                    <div class="ms-icon-feature-content">
                        <h4 class="color-primary">Customer service</h4>
                        <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="javascript:void(0)" class="btn btn-raised btn-info wow flipInX animation-delay-8" style="visibility: visible; animation-name: flipInX;">
                <i class="fa fa-space-shuttle"></i> I have a project</a>
            <a href="javascript:void(0)" class="btn btn-raised btn-warning wow flipInX animation-delay-9" style="visibility: visible; animation-name: flipInX;">
                <i class="fa fa-info"></i> More Info</a>
        </div>
    </div>
</div>

<div class="container">
    <h1 class="color-primary text-center wow fadeInUp animation-delay-4" style="visibility: visible; animation-name: fadeInUp;">Our Team</h1>
    <p class="lead text-center wow fadeInUp animation-delay-4" style="visibility: visible; animation-name: fadeInUp;">We are a team of professionals, our illusion is your project.</p>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-4 col-md-6">
            <div class="card card-warning wow zoomInUp animation-delay-5" style="visibility: visible; animation-name: zoomInUp;">
                <div class="withripple zoom-img">
                    <a href="javascript:void()" class="">
                        <img src="assets/img/demo/p2.jpg" alt="..." class="img-fluid">
                    </a>
                </div>
                <div class="card-block">
                    <span class="label label-warning pull-right">CEO</span>
                    <h3 class="color-warning">Antonie Smith</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates officia repudiandae beatae magni es magnam autem molestias.</p>
                    <div class="row">
                        <div class="col">
                            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook">
                                <i class="zmdi zmdi-facebook"></i>
                            </a>
                            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter">
                                <i class="zmdi zmdi-twitter"></i>
                            </a>
                            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram">
                                <i class="zmdi zmdi-instagram"></i>
                            </a>
                        </div>
                        <div class="col text-right">
                            <a href="javascript:void(0)" class="btn btn-raised btn-sm btn-warning">
                                <i class="zmdi zmdi-account"></i> Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card card-success wow zoomInUp animation-delay-7" style="visibility: visible; animation-name: zoomInUp;">
                <div class="withripple zoom-img">
                    <a href="javascript:void()" class="">
                        <img src="assets/img/demo/p1.jpg" alt="..." class="img-fluid">
                    </a>
                </div>
                <div class="card-block">
                    <span class="label label-success pull-right">Marketing</span>
                    <h3 class="color-success">Sophie Austin</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates officia repudiandae beatae magni es magnam autem molestias.</p>
                    <div class="row">
                        <div class="col">
                            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook">
                                <i class="zmdi zmdi-facebook"></i>
                            </a>
                            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter">
                                <i class="zmdi zmdi-twitter"></i>
                            </a>
                            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram">
                                <i class="zmdi zmdi-instagram"></i>
                            </a>
                        </div>
                        <div class="col text-right">
                            <a href="javascript:void(0)" class="btn btn-raised btn-sm btn-success">
                                <i class="zmdi zmdi-account"></i> Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card card-royal wow zoomInUp animation-delay-9" style="visibility: visible; animation-name: zoomInUp;">
                <div class="withripple zoom-img">
                    <a href="javascript:void()" class="">
                        <img src="assets/img/demo/p3.jpg" alt="..." class="img-fluid">
                    </a>
                </div>
                <div class="card-block">
                    <span class="label label-royal pull-right">Developer</span>
                    <h3 class="color-royal">Lyana Morgan</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates officia repudiandae beatae magni es magnam autem molestias.</p>
                    <div class="row">
                        <div class="col">
                            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook">
                                <i class="zmdi zmdi-facebook"></i>
                            </a>
                            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter">
                                <i class="zmdi zmdi-twitter"></i>
                            </a>
                            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram">
                                <i class="zmdi zmdi-instagram"></i>
                            </a>
                        </div>
                        <div class="col text-right">
                            <a href="javascript:void(0)" class="btn btn-raised btn-sm btn-royal">
                                <i class="zmdi zmdi-account"></i> Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials._footer')
@include('partials._copyrights')
@include('partials._mobnav')

@endsection