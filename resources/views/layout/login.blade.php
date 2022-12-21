<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/morvin-django/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 02:08:56 GMT -->

<head>


    <meta charset="utf-8" />
    <title>Login page | Classroom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/template/morvin-django/layouts/assets/images/classroom.jfif') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/template/morvin-django/layouts/assets/css/bootstrap.min.css') }}" id="bootstrap-style"
        rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin/template/morvin-django/layouts/assets/css/icons.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin/template/morvin-django/layouts/assets/css/app.min.css') }}" id="app-style"
        rel="stylesheet" type="text/css" />


</head>


<body class="authentication-bg bg-primary">
    <div class="home-center">
        <div class="home-desc-center">

            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="px-2 py-3">


                                    <div class="text-center">
                                        <a href="{{ asset('admin/template/morvin-django/layouts/index.html') }}">
                                            {{-- <img src="{{ asset('admin/template/morvin-django/layouts/assets/images/logo-dark.png') }}" height="22" alt="logo"> --}}
                                        </a>

                                        <h5 class="text-primary mb-2 mt-4">Welcome Back !</h5>
                                        <p class="text-muted">Sign in to login.</p>
                                    </div>


                                    <form class="form-horizontal mt-4 pt-2" action="/loginproses" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="username">Name</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Enter Name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password"
                                                id="userpassword" placeholder="Enter password">
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input"
                                                    id="customControlInline">
                                                <label class="form-label" for="customControlInline">Remember me</label>
                                            </div>
                                        </div>

                                        <div>
                                            <button class="btn btn-primary w-100 waves-effect waves-light"
                                                type="submit">Log In</button>
                                        </div>

                                        {{-- <div class="mt-4 text-center">
                                            <a href="{{ asset('admin/template/morvin-django/layouts/auth-recoverpw.html') }}"
                                                class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your
                                                password?</a>
                                        </div> --}}


                                    </form>


                                </div>
                            </div>
                        </div>

                        <div class="mt-5 text-center text-white">
                            <p>Don't have an account ?<a href="/register" class="fw-bold text-white"> Register</a> </p>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        <!-- End Log In page -->
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
    <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/node-waves/waves.min.js') }}"></script>

    <script src="{{ asset('admin/template/morvin-django/layouts/assets/js/app.js') }}"></script>

</body>


<!-- Mirrored from themesdesign.in/morvin-django/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 02:08:56 GMT -->

</html>
