<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<!-- Mirrored from themeselection.com/demo/chameleon-admin-template/html/ltr/vertical-menu-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jan 2022 03:49:59 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords"
        content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard Analytics - Chameleon Admin - Modern Bootstrap 4 WebApp & Dashboard HTML Template + UI Kit</title>
    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon"
        href="https://themeselection.com/demo/chameleon-admin-template/app-assets/images/ico/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
        rel="stylesheet">

    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />



    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/forms/toggle/switchery.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/switch.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-switch.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/chartist.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/charts/chartist-plugin-tooltip.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.min.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/chat-application.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/dashboard-analytics.min.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar bg-light" data-open="click" data-menu="vertical-menu"
    data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="collapse navbar-collapse show" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item mobile-menu d-md-none mr-auto"><a
                                class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                    class="ft-menu font-large-1"></i></a></li>
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                                    class="ficon ft-maximize"></i></a></li>
                        <li class="dropdown nav-item mega-dropdown d-none d-md-block"><a
                                class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Mega</a>
                            <ul class="mega-dropdown-menu dropdown-menu row">
                                <li class="col-md-2">
                                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="ft-link"></i>
                                        Quick Links</h6>
                                    <ul>
                                        <li><a class="my-1" href="chat-application.html"><i
                                                    class="ft-home"></i> Chat</a></li>
                                        <li><a class="my-1" href="table-bootstrap.html"><i
                                                    class="ft-grid"></i> Tables</a></li>
                                        <li><a class="my-1" href="chartist-charts.html"><i
                                                    class="ft-bar-chart"></i> Charts</a></li>
                                        <li><a class="my-1" href="gallery-grid.html"><i
                                                    class="ft-sidebar"></i> Gallery</a></li>
                                    </ul>
                                </li>
                                <li class="col-md-3">
                                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="ft-star"></i>
                                        My Bookmarks</h6>
                                    <ul class="ml-2">
                                        <li class="list-style-circle"><a class="my-1"
                                                href="card-bootstrap.html">
                                                Cards</a></li>
                                        <li class="list-style-circle"><a class="my-1"
                                                href="full-calender.html"> Calender</a></li>
                                        <li class="list-style-circle"><a class="my-1"
                                                href="invoice-template.html"> Invoice</a></li>
                                        <li class="list-style-circle"><a class="my-1"
                                                href="users-contacts.html"> Contact</a></li>
                                    </ul>
                                </li>
                                <li class="col-md-3">
                                    <h6 class="dropdown-menu-header text-uppercase"><i class="ft-layers"></i>
                                        Recent Products</h6>
                                    <div class="carousel slide pt-1" id="carousel-example" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active"><img class="d-block w-100"
                                                    src="{{ asset('app-assets/images/carousel/08.jpg') }}"
                                                    alt="First slide"></div>
                                            <div class="carousel-item"><img class="d-block w-100"
                                                    src="{{ asset('app-assets/images/carousel/03.jpg') }}"
                                                    alt="Second slide"></div>
                                            <div class="carousel-item"><img class="d-block w-100"
                                                    src="{{ asset('app-assets/images/carousel/01.jpg') }}"
                                                    alt="Third slide"></div>
                                        </div><a class="carousel-control-prev" href="#carousel-example" role="button"
                                            data-slide="prev"><span class="la la-angle-left"
                                                aria-hidden="true"></span><span
                                                class="sr-only">Previous</span></a><a
                                            class="carousel-control-next" href="#carousel-example" role="button"
                                            data-slide="next"><span class="la la-angle-right icon-next"
                                                aria-hidden="true"></span><span class="sr-only">Next</span></a>
                                        <h5 class="pt-1">Special title treatment</h5>
                                        <p>Jelly beans sugar plum.</p>
                                    </div>
                                </li>
                                <li class="col-md-4">
                                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="ft-thumbs-up"></i>
                                        Get in touch</h6>
                                    <form class="form form-horizontal pt-1">
                                        <div class="form-body">
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label" for="inputName1">Name</label>
                                                <div class="col-sm-9">
                                                    <div class="position-relative has-icon-left">
                                                        <input class="form-control" id="inputName1" type="text"
                                                            placeholder="John Doe">
                                                        <div class="form-control-position pl-1"><i
                                                                class="ft-user"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label"
                                                    for="inputContact1">Contact</label>
                                                <div class="col-sm-9">
                                                    <div class="position-relative has-icon-left">
                                                        <input class="form-control" id="inputContact1" type="text"
                                                            placeholder="(123)-456-7890">
                                                        <div class="form-control-position pl-1"><i
                                                                class="ft-smartphone"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label"
                                                    for="inputEmail1">Email</label>
                                                <div class="col-sm-9">
                                                    <div class="position-relative has-icon-left">
                                                        <input class="form-control" id="inputEmail1" type="email"
                                                            placeholder="john@example.com">
                                                        <div class="form-control-position pl-1"><i
                                                                class="ft-mail"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 form-control-label"
                                                    for="inputMessage1">Message</label>
                                                <div class="col-sm-9">
                                                    <div class="position-relative has-icon-left">
                                                        <textarea class="form-control" id="inputMessage1" rows="2"
                                                            placeholder="Simple Textarea"></textarea>
                                                        <div class="form-control-position pl-1"><i
                                                                class="ft-message-circle"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 mb-1">
                                                    <button class="btn btn-danger float-right" type="button"><i
                                                            class="ft-arrow-right"></i> Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown d-none d-md-block mr-1"><a class="dropdown-toggle nav-link"
                                id="apps-navbar-links" href="#" data-toggle="dropdown">
                                Apps</a>
                            <div class="dropdown-menu">
                                <div class="arrow_box"><a class="dropdown-item" href="email-application.html"><i
                                            class="ft-user"></i> Email</a><a class="dropdown-item"
                                        href="chat-application.html"><i class="ft-mail"></i> Chat</a><a
                                        class="dropdown-item" href="project-summary.html"><i
                                            class="ft-briefcase"></i> Project Summary </a><a class="dropdown-item"
                                        href="full-calender.html"><i class="ft-calendar"></i> Calendar </a></div>
                            </div>
                        </li>
                        <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide"
                                data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                            <ul class="dropdown-menu">
                                <li class="arrow_box">
                                    <form>
                                        <div class="input-group search-box">
                                            <div class="position-relative has-icon-right full-width">
                                                <input class="form-control" id="search" type="text"
                                                    placeholder="Search here...">
                                                <div class="form-control-position navbar-search-close"><i
                                                        class="ft-x"></i></div>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="dropdown dropdown-user nav-item"><a
                                    class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                    <span class="avatar avatar-online"> {{ Auth::user()->name }}</span></a>
                                <div class="dropdown-menu dropdown-menu-right">

                                </div>
                            </li>
                        @endguest

                    </ul>
                    <div class="arrow_box_right">
                        <div class="dropdown-divider"></div>
                        <div class="dropdown-divider"></div><a class="dropdown-item"
                            href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="ft-power"></i>
                            {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true"
        data-img="{{ asset('app-assets/images/backgrounds/02.jpg') }}">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ url('/dashboard') }}"><img
                            class="brand-logo" alt="Chameleon admin logo"
                            src="{{ asset('app-assets/images/logo/logo.png') }}" />
                        <h3 class="brand-text">Chameleon</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a>
                </li>
            </ul>
        </div>
        <div class="navigation-background"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="#"><i class="ft-edit"></i><span class="menu-title"
                            data-i18n="">Category</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{ url('menu') }}">Main Category</a>
                        </li>
                        <li><a class="menu-item" href="{{ url('submenu') }}">Sub Category</a>
                        </li>

                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="ft-edit"></i><span class="menu-title"
                    data-i18n="">Product</span></a>
            <ul class="menu-content">
                <li><a class="menu-item" href="{{ url('addproduct') }}">Add products</a>
                </li>
                <li><a class="menu-item" href="{{ url('/showproduct') }}">Show Product</a>
                </li>

            </ul>
        </li>
                <li class=" nav-item"><a href="#"><i class="ft-grid"></i><span class="menu-title"
                            data-i18n="">Tables</span></a>
                    <ul class="menu-content">
                        {{-- <li><a class="menu-item" href="{{ url('/table') }}">Products Tables</a>
                        </li> --}}
                        <li><a class="menu-item" href="{{ url('/usertable') }}">User Tables</a>
                        </li>

                        {{-- <li><a class="menu-item" href="{{ url('/orderitemtable') }}">Order Item Tables</a>
                        </li> --}}


                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="ft-grid"></i><span class="menu-title"
                    data-i18n="">Orders</span></a>
            <ul class="menu-content">
                <li><a class="menu-item" href="{{ url('/ordertable') }}">Order</a>
                </li>
                <li><a class="menu-item" href="{{ url('/pending-order') }}">Pending Orders</a>
                </li>
                <li><a class="menu-item" href="{{ url('/complete-order') }}">Compelete Orders</a>
                </li>
            </ul>
        </li>
                <li class=" nav-item"><a href="#"><i class="ft-bar-chart-2"></i><span class="menu-title"
                            data-i18n="">Charts</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="chartist-charts.html">Chartist</a>
                        </li>
                        <li><a class="menu-item" href="chartjs-charts.html">Chartjs</a>
                        </li>
                        <li><a class="menu-item" href="#">Maps</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="google-maps.html">Google Maps</a>
                                </li>
                                <li><a class="menu-item" href="jvector-maps.html">jVector Map</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
