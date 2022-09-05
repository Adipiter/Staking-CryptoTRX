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
        
        <!-- Content -->
        <?= $this->renderSection('content') ?>
        <!-- /.Content -->

        <!-- jQuery 3 -->
        <script src="assets/js/jquery.min.js"></script>

        <!-- v4.0.0-alpha.6 -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>

        <!-- template -->
        <script src="assets/js/niche.html"></script>
    </body>
</html>
