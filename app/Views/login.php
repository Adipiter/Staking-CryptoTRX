<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title><?= $title; ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- v4.0.0-alpha.6 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" />
        <link rel="stylesheet" href="theme/assets/css/auth-style.css" />
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-box-body">
                <h3 class="login-box-msg">Sign In</h3>
                <?= form_open('login'); ?>
                <div class="form-group has-feedback">
                    <input type="text" name="email" class="form-control sty1" placeholder="Input email" />
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control sty1" placeholder="Password" />
                </div>
                <div>
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" />
                                Remember Me
                            </label>
                            <a href="forgot-password" class="pull-right"><i class="fa fa-lock"></i> Forgot password?</a>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4 m-t-1">
                        <button onclick="location.href='dashboard';" type="submit" class="btn btn-primary btn-block btn-flat">
                            Sign In
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
                <?= form_close(); ?>
                <div class="m-t-2">
                    Don't have an account?
                    <a href="register" class="text-center">Sign Up</a>
                </div>
            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery 3 -->
        <script src="assets/js/jquery.min.js"></script>

        <!-- v4.0.0-alpha.6 -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>

        <!-- template -->
        <script src="assets/js/niche.html"></script>
    </body>
</html>
