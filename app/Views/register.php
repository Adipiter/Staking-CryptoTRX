<?= $this->extend('includes/auth') ?>
<?= $this->section('content') ?>

<div class="login-box">
    <div class="login-box-body">
        <h3 class="login-box-msg">Sign Up</h3>
        <?php if (session()->getFlashdata('success')) { ?>
        <div class="alert alert-success">
            <?php echo session()->getFlashdata('success'); ?>
        </div>
        <?php } ?>

        <?php if (session()->getFlashdata('error')) { ?>
        <div class="alert alert-danger">
            <?php foreach (session()->getFlashdata('error') as $field => $error) : ?>
            <p><?= $error ?></p>
            <?php endforeach ?>
        </div>
        <?php } ?>

        <form class="" action="register" method="post">
            <div class="form-group has-feedback">
                <input type="text" name="username" value="<?= set_value('username') ?>" class="form-control sty1" placeholder="Input username"/>
            </div>
            <div class="form-group has-feedback">
                <input type="email" name="email" value="<?= set_value('email') ?>" class="form-control sty1" placeholder="Email"/>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" value="" class="form-control sty1" placeholder="Password"/>
            </div>
            <div>
                <!-- /.col -->
                <div class="col-xs-4 m-t-1">
                    <button type="submit" class="btn btn-primary btn-block btn-flat"> Sign UP </button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <div class="m-t-2">
            Already have an account?
            <a href="login" class="text-center">Sign In</a>
        </div>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<?= $this->endSection() ?>