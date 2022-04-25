<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link href="/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/libs/css/style.css">
    <link rel="stylesheet" href="/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background: linear-gradient(180deg, rgba(87, 53, 125, 0.79) 30.68%, #B582EE 52.11%, rgba(87, 53, 125, 0.79) 76.21%);
        }

        .card {
            border-radius: 7px;
        }

        .splash-description {
            margin-top: 25px;
        }

        .logo-img {
            height: 50px;
        }

        .btn-lg {
            border-radius: 5px;
            background-color: #B173F9;
            border-color: #B173F9;
        }

        .btn-primary {
            background-color: #B173F9;
            border-color: #B173F9;
        }

        .btn-primary:hover {
            background-color: #955AD9;
            border-color: #955AD9;
        }

        .btn-primary:not(:disabled):not(.disabled):active {
            background-color: #955AD9;
            border-color: #955AD9;
        }

        .form-control {
            background-color: rgba(196, 196, 196, 0.6);
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="#"><img class="logo-img" src="/images/Logo_low.svg" alt="logo"></a><span class="splash-description">Silahkan Login</span></div>
            <div class="card-body">
                <form action="/admins/login" method="POST">
                    @csrf
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="email" name="email" type="email" placeholder="Email" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" name="password" type="password" placeholder="Password">
                    </div>
                    <!-- <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div> -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Masuk</button>
                </form>
            </div>
            <!-- <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div> -->
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>