<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Log In</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('template') }}/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('template') }}/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('template') }}/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('template') }}/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('template') }}/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box" style="margin-top: -45px;">
        <div class="logo">
            <a href="javascript:void(0);"><b>FORWARD CHAINING DAN CERTAINTY FACTOR</b></a>
            {{-- <small>Admin BootStrap Based - Material Design</small> --}}
        </div>
        @include('layouts.partials.notification')
        <div class="card">
            <div class="body">
                <form  method="POST" action="{{ URL::to('login/doregister') }}">
                    @csrf
                    <div class="msg">Sign Up to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">book</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">mail</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">REGISTER</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        {{-- <div class="col-xs-6">
                            <a href="sign-up.html">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div> --}}
                    </div>
                </form>
                <div class="row">
                    <div class="col-xs-8 p-t-5" style="margin-left: 30%; margin-top: -14%;">
                        <a href="{{ URL::to('/login') }}" class="btn btn-block bg-pink waves-effect" style="width: auto; margin-top: -3%;">LOGIN</a>
                    </div>
                       
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="{{ asset('template') }}/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('template') }}/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('template') }}/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="{{ asset('template') }}/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="{{ asset('template') }}/js/admin.js"></script>
    <script src="{{ asset('template') }}/js/pages/examples/sign-in.js"></script>
</body>

</html>