<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/morvin-django/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 02:09:52 GMT -->
<head>


    <meta charset="utf-8" />
    <title>Register page | Classroom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/template/morvin-django/layouts/assets/images/classroom.jfif') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/template/morvin-django/layouts/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin/template/morvin-django/layouts/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin/template/morvin-django/layouts/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />


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
                                        {{-- <a href="{{ asset('admin/template/morvin-django/layouts/index.html') }}"> --}}
                                            {{-- <img src="{{ asset('admin/template/morvin-django/layouts/assets/images/logo-dark.png') }}" height="22" alt="logo"> --}}
                                        </a>

                                        <h5 class="text-primary mb-2 mt-4">Free Register</h5>
                                        <p class="text-muted">Get your free account now.</p>
                                    </div>


                                    <form class="form-horizontal" action="/registeruser" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="useremail">Name</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="username">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                        </div>

                                        <div class="mb-3">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" id="userpassword" name="password" placeholder="Enter password">
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Register</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div class="mt-5 text-center text-white">
                            <p>Already have an account ? <a href="/login" class="fw-bold text-white"> Login </a> </p>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        <!-- End Log In page -->
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/template/morvin-django/layouts/assets/libs/node-waves/waves.min.js') }}"></script>

    <script src="{{ asset('admin/template/morvin-django/layouts/assets/js/app.js') }}"></script>

</body>


<!-- Mirrored from themesdesign.in/morvin-django/layouts/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 02:09:52 GMT -->
</html>
