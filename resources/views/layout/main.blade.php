<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/morvin-django/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 02:07:42 GMT -->
<head>


    <meta charset="utf-8" />
    <title>Classroom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/template/morvin-django/layouts/assets/images/classroom.jfif') }}">

    <!-- plugin css -->
    <link href="{{ asset('admin/template/morvin-django/layouts/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/template/morvin-django/layouts/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin/template/morvin-django/layouts/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin/template/morvin-django/layouts/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <link href="{{ asset('admin/template/morvin-django/layouts/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/template/morvin-django/layouts/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/template/morvin-django/layouts/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />


</head>


<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">

                       <!-- LOGO -->
                 <div class="navbar-brand-box">
                    <a href="/" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('https://www.teq.com/wp-content/uploads/2020/04/GC_Header.jpg') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('https://www.teq.com/wp-content/uploads/2020/04/GC_Header.jpg') }}" alt="" height="60">
                        </span>
                    </a>

                    <a href="/" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset('admin/template/morvin-django/layouts/assets/images/logo-sm.png') }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('admin/template/morvin-django/layouts/assets/images/logo-light.png') }}" alt="" height="20">
                        </span>
                    </a>
                </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>

        <div>
            <p class="info">
                <h5>
                    <a href="/" class="d-block" style="color:black; align-item:center; display:flex; margin-top: 12px; padding:11px;">
                    Alooo {{ Auth::user()->name }} :D
                    </a>
                </h5>
            </p>
        </div>
                    <div class="topbar-social-icon me-3 d-none d-md-block">
                        <ul class="list-inline title-tooltip m-0">
                            <li class="list-inline-item">
                                <a href="email-inbox.html" data-bs-toggle="tooltip" data-placement="top" title="Email">
                                 {{-- <i class="mdi mdi-email-outline"></i> --}}
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="chat.html" data-bs-toggle="tooltip" data-placement="top" title="Chat">
                                 {{-- <i class="mdi mdi-tooltip-outline"></i> --}}
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="calendar.html" data-bs-toggle="tooltip" data-placement="top" title="Calendar">
                                 {{-- <i class="mdi mdi-calendar"></i> --}}
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="pages-invoice.html" data-bs-toggle="tooltip" data-placement="top" title="Printer">
                                 {{-- <i class="mdi mdi-printer"></i> --}}
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

                 <!-- Search input -->
                 <div class="search-wrap" id="search-wrap">
                    <div class="search-bar">
                        <input class="search-input form-control" placeholder="Search" />
                        <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                            {{-- <i class="mdi mdi-close-circle"></i> --}}
                        </a>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="dropdown d-none d-lg-inline-block">
                        <button type="button" class="btn header-item toggle-search noti-icon waves-effect" data-target="#search-wrap">
                            {{-- <i class="mdi mdi-magnify"></i> --}}
                        </button>
                    </div>

                    <div class="dropdown d-none d-md-block ms-2">
                        <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{-- <img class="me-2" src="{{ asset('admin/template/morvin-django/layouts/assets/images/flags/us.jpg') }}" alt="Header Language" height="16"> English <span class="mdi mdi-chevron-down"></span> --}}
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{ asset('admin/template/morvin-django/layouts/assets/images/flags/germany.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> German </span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{ asset('admin/template/morvin-django/layouts/assets/images/flags/italy.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Italian </span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{ asset('admin/template/morvin-django/layouts/assets/images/flags/french.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> French </span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{ asset('admin/template/morvin-django/layouts/assets/images/flags/spain.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Spanish </span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{ asset('admin/template/morvin-django/layouts/assets/images/flags/russia.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Russian </span>
                            </a>
                        </div>
                    </div>






                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            {{-- <i class="mdi mdi-fullscreen"></i> --}}
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{-- <i class="mdi mdi-bell-outline bx-tada"></i> --}}
                            {{-- <span class="badge bg-danger rounded-pill">3</span> --}}
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0"> Notifications </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small"> View All</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="#" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="mdi mdi-cart text-white"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Your order is placed</h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="text-reset notification-item">
                                    <div class="media">
                                        <img src="{{ asset('admin/template/morvin-django/layouts/assets/images/users/avatar-3.jpg') }}"
                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">James Lemire</h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">It will seem like simplified English.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title bg-success rounded-circle font-size-16">
                                                <i class="mdi mdi-check text-white"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Your item is shipped</h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">If several languages coalesce the grammar</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="text-reset notification-item">
                                    <div class="media">
                                        <img src="{{ asset('admin/template/morvin-django/layouts/assets/images/users/avatar-4.jpg') }}"
                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top">
                                <a class="btn btn-sm btn-link font-size-14 w-100 text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="{{ asset('admin/template/morvin-django/layouts/assets/images/users/avatar-7.jpg') }}"
                                alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1">{{ Auth::user()->name }}</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->

                            <a class="dropdown-item text-danger" href="/logout"><i class="mdi mdi-power font-size-16 align-middle me-1 text-danger"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            @include('layout.sidebar')
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            @yield('content')
            <!-- End Page-content -->
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Plugins js-->
    <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>

    <script src="{{ asset('admin/template/morvin-django/layouts/assets/js/pages/dashboard.init.js') }}"></script>


    <script src="{{ asset('admin/template/morvin-django/layouts/assets/js/app.js') }}"></script>


    <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
         <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
         <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('admin/template/morvin-django/layouts/assets/js/pages/datatables.init.js') }}"></script>
        <script src="assets/js/app.js"></script>


</body>


<!-- Mirrored from themesdesign.in/morvin-django/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 02:08:38 GMT -->
</html>
