<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <!-- Tell the browser to be responsive to screen width -->
        <title><?= $title; ?></title>
        <!-- Favicon icon -->
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="<?php echo base_url('public/images/favicon.png'); ?>"/>
        <!-- Custom CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
            rel="stylesheet"/>
        <link rel="stylesheet" href="<?php echo base_url('public/css/style.min.css'); ?>"/>
    </head>

    <body>
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div
            id="main-wrapper"
            data-layout="vertical"
            data-navbarbg="skin5"
            data-sidebartype="full"
            data-sidebar-position="absolute"
            data-header-position="absolute"
            data-boxed-layout="full">
            <header class="topbar" data-navbarbg="skin5">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <div class="navbar-header" data-logobg="skin6">
                        <a class="navbar-brand" href="dashboard">
                            <span class="logo-text">
                                <img src="<?php echo base_url('public/images/logo-text.png'); ?>" alt="homepage"/>
                            </span>
                        </a>
                        <a
                            class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                            href="javascript:void(0)">
                            <i class="ti-menu ti-close"></i >
                        </a>
                    </div>
                    <div
                        class="navbar-collapse collapse"
                        id="navbarSupportedContent"
                        data-navbarbg="skin5">
                        <ul class="navbar-nav ms-auto d-flex align-items-center">
                            <li>
                                <div class="profile-pic" href="/"><img
                                    src="<?php echo base_url('public/images/varun.jpg'); ?>"
                                    alt="user-img"
                                    width="36"
                                    class="img-circle"/>
                                    <span class="text-white font-medium">Steave</span>
                                </div >
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <?= $this->include('includes/sidebar') ?>
            <?= $this->renderSection('userarea') ?>

            <footer class="footer text-center">
                2021 © Ample Admin brought to you by wrappixel.com</a>
            </footer>

        </div>
        <script src="<?php echo base_url('public/js/jquery.min.js'); ?>"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="<?php echo base_url('public/js/bootstrap.bundle.js'); ?>"></script>
        <script src="<?php echo base_url('public/js/bootstrap.min.js'); ?>"></script>
        <!--Custom JavaScript -->
        <script src="<?php echo base_url('public/js/custom.js'); ?>"></script>
    </body>
</html>