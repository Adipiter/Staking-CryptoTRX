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
            href="theme/assets/images/favicon.png"/>
        <!-- Custom CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
            rel="stylesheet"/>
        <link rel="stylesheet" href="theme/assets/css/style.min.css"/>
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
                                <img src="theme/assets/images/logo-text.png" alt="homepage"/>
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
                                <a class="profile-pic" href="/"><img
                                    src="theme/assets/images/varun.jpg"
                                    alt="user-img"
                                    width="36"
                                    class="img-circle"/>
                                    <span class="text-white font-medium">Steave</span></a >
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
        <script src="theme/assets/js/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="theme/assets/js/bootstrap.bundle.js"></script>
        <script src="theme/assets/js/bootstrap.min.js"></script>
        <!--Custom JavaScript -->
        <script src="theme/assets/js/custom.js"></script>
    </body>
</html>