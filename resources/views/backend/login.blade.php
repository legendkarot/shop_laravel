<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.layout.header')
</head>

<body class="hold-transition login-page">
    <div class="login-box">

        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>Admin</b>LTE</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                @include('backend.error')
                <form action="../admin/login/signup" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>
                    @csrf
                </form>

            </div>
        </div>
    </div>

    <script src="../web/backend/plugins/jquery/jquery.min.js"></script>

    <script src="../web/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <script src="../web/backend/dist/js/adminlte.min.js?v=3.2.0"></script>
</body>

</html>