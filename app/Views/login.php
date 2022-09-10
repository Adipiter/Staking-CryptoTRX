<?= $this->extend('includes/auth') ?>

<?= $this->section('content') ?>

<div class="login-box">
    <div class="login-box-body">
        <h3 class="login-box-msg">Sign In</h3>

        <form class="" action="login" method="post">
            <div class="form-group has-feedback">
                <input type="text" name="email" class="form-control sty1" placeholder="Input email"/>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control sty1" placeholder="Password"/>
            </div>
            <div>
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label><input type="checkbox"/>Remember Me</label>
                        <a href="forgot-password" class="pull-right">
                            <i class="fa fa-lock"></i>
                            Forgot password?</a>
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
        </form>
        <div class="m-t-2">
            Don't have an account?
            <a href="register" class="text-center">Sign Up</a>
        </div>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<?= $this->endSection() ?>