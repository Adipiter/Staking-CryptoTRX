<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <title>Admin Lite Template by WrapPixel</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="theme/assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="theme/assets/css/style.min.css" />
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
      data-boxed-layout="full"
    >
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin6">
            <a class="navbar-brand" href="dashboard">
              <span class="logo-text">
                <img src="theme/assets/images/logo-text.png" alt="homepage" />
              </span>
            </a>
            <a
              class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <ul class="navbar-nav ms-auto d-flex align-items-center">
              <li>
                <a class="profile-pic" href="#"
                  ><img
                    src="theme/assets/images/varun.jpg"
                    alt="user-img"
                    width="36"
                    class="img-circle"
                  /><span class="text-white font-medium">Steave</span></a
                >
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <!-- User Profile-->
              <li class="sidebar-item pt-2">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="dashboard"
                  aria-expanded="false"
                >
                  <i class="far fa-clock" aria-hidden="true"></i>
                  <span class="hide-menu">Dashboard</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="deposits"
                  aria-expanded="false"
                >
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span class="hide-menu">Deposit</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="history"
                  aria-expanded="false"
                >
                  <i class="fa fa-table" aria-hidden="true"></i>
                  <span class="hide-menu">History</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="reff"
                  aria-expanded="false"
                >
                  <i class="fa fa-font" aria-hidden="true"></i>
                  <span class="hide-menu">Referall</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="settings"
                  aria-expanded="false"
                >
                  <i class="fa fa-globe" aria-hidden="true"></i>
                  <span class="hide-menu">Settings</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </aside>

      <div class="page-wrapper" style="min-height: 250px">
        <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
              <h4 class="page-title">My activity</h4>
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="white-box">
                <h3 class="box-title">My activity</h3>
                <div class="table-responsive">
                  <table class="table text-nowrap">
                    <thead>
                      <tr>
                        <th class="border-top-0">#</th>
                        <th class="border-top-0">Date</th>
                        <th class="border-top-0">Category</th>
                        <th class="border-top-0">Amount</th>
                        <th class="border-top-0">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>12-09-2022</td>
                        <td>Deposit</td>
                        <td>30 TRX</td>
                        <td>
                          <span class="badge bg-success rounded">Approved</span>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>14-09-2022</td>
                        <td>Deposit</td>
                        <td>14 TRX</td>
                        <td>
                          <span class="badge bg-warning rounded"
                            >Processing</span
                          >
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>16-09-2022</td>
                        <td>Withdraw</td>
                        <td>37 TRX</td>
                        <td>
                          <span class="badge bg-success rounded">Approved</span>
                        </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>18-09-2022</td>
                        <td>Withdraw</td>
                        <td>11 TRX</td>
                        <td>
                          <span class="badge bg-success rounded"
                            >Processing</span
                          >
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer text-center">
          2021 © Ample Admin brought to you by
          <a href="https://www.wrappixel.com/">wrappixel.com</a>
        </footer>
      </div>
    </div>
    <script src="theme/assets/js/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="theme/assets/js/bootstrap.bundle.js"></script>
    <script src="theme/assets/js/bootstrap.min.js"></script>
    <!--Custom JavaScript -->
    <script src="theme/assets/js/custom.js"></script>
  </body>
</html>
