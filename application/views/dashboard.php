<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/images/favicon.png" />
  <title>
    Material Pro Admin Template - The Most Complete & Trusted Bootstrap 4
    Admin Template
  </title>
  <!-- Bootstrap Core CSS -->
  <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <!-- chartist CSS -->
  <link href="<?php echo base_url(); ?>assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet" />
  <!--This page css - Morris CSS -->
  <link href="<?php echo base_url(); ?>assets/plugins/c3-master/c3.min.css" rel="stylesheet" />
  <!-- Custom CSS -->
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
  <!-- You can change the theme colors from here -->
  <link href="<?php echo base_url(); ?>assets/css/colors/blue.css" id="theme" rel="stylesheet" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
    </svg>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
      <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
          <a class="navbar-brand" href="Dashboard">
            <!-- Logo icon --><b>
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->

              <!-- Light Logo icon -->
              <img src="<?php echo base_url(); ?>assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
            </b>
            <!--End Logo icon -->
            <!-- Logo text --><span>
              <!-- Light Logo text -->
              <img src="<?php echo base_url(); ?>assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
            </span>
          </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav mr-auto mt-md-0">
            <!-- This is  -->
            <!-- ============================================================== -->
            <!-- Search -->
            <!-- ============================================================== -->
            <li class="nav-item hidden-sm-down search-box">
              <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
              <form class="app-search">
                <input type="text" class="form-control" placeholder="Search & enter" />
                <a class="srh-btn"><i class="ti-close"></i></a>
              </form>
            </li>
          </ul>
          <!-- ============================================================== -->
          <!-- User profile and search -->
          <!-- ============================================================== -->
          <ul class="navbar-nav my-lg-0">
            <!-- ============================================================== -->
            <!-- Profile -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <!-- jika role admin (Admin) -->
              <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="<?php echo base_url(); ?>assets/images/users/1.jpg" alt="user" class="profile-pic m-r-10" />
                <?php if ($this->session->userdata('role') == 'Admin') { ?>
                  <?php echo $this->session->userdata('name'); ?> (Admin)
                <?php } else if ($this->session->userdata('role') == 'Dosen') { ?>
                  <?php echo $this->session->userdata('name'); ?> (Dosen)
                <?php } ?>
              </a>

            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav">
            <li>
              <a class="waves-effect waves-dark active" href="<?php echo site_url('Dashboard'); ?>" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
            </li>
            <li>
              <a class="waves-effect waves-dark" href="<?php echo site_url('Account'); ?>" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Account</span></a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
      <!-- Bottom points-->
      <div class="sidebar-footer">
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- logout -->
        <a href="<?php echo base_url(); ?>/login/logout" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
      </div>
      <!-- End Bottom points-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
          <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Dashboard</h3>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">Home</a>
              </li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
          <div class="col-md-7 col-4 align-self-center">
            <a href="https://wrappixel.com/templates/materialpro/" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down">
              Upgrade to Pro</a>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
          <!-- Column -->
          <div class="col-lg-8 col-md-7">
            <div class="card">
              <div class="card-block">
                <div class="row">
                  <div class="col-12">
                    <div class="d-flex flex-wrap">
                      <div>
                        <h3 class="card-title">Total Account</h3>
                        <h6 class="card-subtitle">
                          Total Account Admin & Dosen
                        </h6>
                      </div>
                      <div class="ml-auto">

                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Description</th>
                          <th>Total</th>
                          <th>Percentage</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Admin</td>
                          <td><?php echo $totaladmin;  ?></td>
                          <?php
                          //itung persentase
                          $total = $totaladmin + $totaldosen;
                          $persentase = ($totaladmin / $total) * 100;
                          echo "<td>" . round($persentase, 1) . "%</td>";
                          ?>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Dosen</td>
                          <td><?php echo $totaldosen  ?> </td>
                          <?php
                          //itung persentase
                          $persentase = ($totaldosen / $total) * 100;
                          echo "<td>" . round($persentase, 1) . "%</td>";
                          ?>
                        </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="2">Total</td>
                          <td><?php
                              $total = $totaladmin + $totaldosen;
                              echo $total;
                              ?></td>
                          <td>100%</td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-5">
            <div class="card">
              <div class="card-block">
                <h3 class="card-title">Data Account</h3>
                <h6 class="card-subtitle">Total Account</h6>
                <div id="visitor" style="height: 290px; width: 100%"></div>
              </div>
              <div>
                <hr class="m-t-0 m-b-0" />
              </div>
              <div class="card-block text-center">
                <ul class="list-inline m-b-0">
                  <li>
                    <h6 class="text-muted text-info">
                      <i class="fa fa-circle font-10 m-r-10"></i>Admin
                    </h6>
                  </li>
                  <li>
                    <h6 class="text-muted text-primary">
                      <i class="fa fa-circle font-10 m-r-10"></i>Dosen
                    </h6>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Row -->
        <!-- Row -->
        <div class="row">
          <!-- Column -->
          <div class="col-lg-4 col-xlg-3 col-md-5">
            <!-- Column -->
            <div class="card">
              <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/background/profile-bg.jpg" alt="Card image cap" />
              <div class="card-block little-profile text-center">
                <div class="pro-img">
                  <img src="<?php echo base_url(); ?>assets/images/users/4.jpg" alt="user" />
                </div>
                <h3 class="m-b-0">Angela Dominic</h3>
                <p>Web Designer &amp; Developer</p>
                <a href="javascript:void(0)" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Follow</a>
                <div class="row text-center m-t-20">
                  <div class="col-lg-4 col-md-4 m-t-20">
                    <h3 class="m-b-0 font-light">1099</h3>
                    <small>Articles</small>
                  </div>
                  <div class="col-lg-4 col-md-4 m-t-20">
                    <h3 class="m-b-0 font-light">23,469</h3>
                    <small>Followers</small>
                  </div>
                  <div class="col-lg-4 col-md-4 m-t-20">
                    <h3 class="m-b-0 font-light">6035</h3>
                    <small>Following</small>
                  </div>
                </div>
              </div>
            </div>
            <!-- Column -->
            <div class="card">
              <div class="card-block bg-info">
                <h4 class="text-white card-title">My Contacts</h4>
                <h6 class="card-subtitle text-white m-b-0 op-5">
                  Checkout my contacts here
                </h6>
              </div>
              <div class="card-block">
                <div class="message-box contact-box">
                  <h2 class="add-ct-btn">
                    <button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark">
                      +
                    </button>
                  </h2>
                  <div class="message-widget contact-widget">
                    <!-- Message -->
                    <a href="#">
                      <div class="user-img">
                        <img src="<?php echo base_url(); ?>assets/images/users/1.jpg" alt="user" class="img-circle" />
                        <span class="profile-status online pull-right"></span>
                      </div>
                      <div class="mail-contnet">
                        <h5>Pavan kumar</h5>
                        <span class="mail-desc">info@wrappixel.com</span>
                      </div>
                    </a>
                    <!-- Message -->
                    <a href="#">
                      <div class="user-img">
                        <img src="<?php echo base_url(); ?>assets/images/users/2.jpg" alt="user" class="img-circle" />
                        <span class="profile-status busy pull-right"></span>
                      </div>
                      <div class="mail-contnet">
                        <h5>Sonu Nigam</h5>
                        <span class="mail-desc">pamela1987@gmail.com</span>
                      </div>
                    </a>
                    <!-- Message -->
                    <a href="#">
                      <div class="user-img">
                        <span class="round">A</span>
                        <span class="profile-status away pull-right"></span>
                      </div>
                      <div class="mail-contnet">
                        <h5>Arijit Sinh</h5>
                        <span class="mail-desc">cruise1298.fiplip@gmail.com</span>
                      </div>
                    </a>
                    <!-- Message -->
                    <a href="#">
                      <div class="user-img">
                        <img src="<?php echo base_url(); ?>assets/images/users/4.jpg" alt="user" class="img-circle" />
                        <span class="profile-status offline pull-right"></span>
                      </div>
                      <div class="mail-contnet">
                        <h5>Pavan kumar</h5>
                        <span class="mail-desc">kat@gmail.com</span>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Activity</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a>
                </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel">
                  <div class="card-block">
                    <div class="profiletimeline">
                      <div class="sl-item">
                        <div class="sl-left">
                          <img src="<?php echo base_url(); ?>assets/images/users/1.jpg" alt="user" class="img-circle" />
                        </div>
                        <div class="sl-right">
                          <div>
                            <a href="#" class="link">John Doe</a>
                            <span class="sl-date">5 minutes ago</span>
                            <p>
                              assign a new task
                              <a href="#"> Design weblayout</a>
                            </p>
                            <div class="row">
                              <div class="col-lg-3 col-md-6 m-b-20">
                                <img src="<?php echo base_url(); ?>assets/images/big/img1.jpg" alt="user" class="img-responsive radius" />
                              </div>
                              <div class="col-lg-3 col-md-6 m-b-20">
                                <img src="<?php echo base_url(); ?>assets/images/big/img2.jpg" alt="user" class="img-responsive radius" />
                              </div>
                              <div class="col-lg-3 col-md-6 m-b-20">
                                <img src="<?php echo base_url(); ?>assets/images/big/img3.jpg" alt="user" class="img-responsive radius" />
                              </div>
                              <div class="col-lg-3 col-md-6 m-b-20">
                                <img src="<?php echo base_url(); ?>assets/images/big/img4.jpg" alt="user" class="img-responsive radius" />
                              </div>
                            </div>
                            <div class="like-comm">
                              <a href="javascript:void(0)" class="link m-r-10">2 comment</a>
                              <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5
                                Love</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr />
                      <div class="sl-item">
                        <div class="sl-left">
                          <img src="<?php echo base_url(); ?>assets/images/users/2.jpg" alt="user" class="img-circle" />
                        </div>
                        <div class="sl-right">
                          <div>
                            <a href="#" class="link">John Doe</a>
                            <span class="sl-date">5 minutes ago</span>
                            <div class="m-t-20 row">
                              <div class="col-md-3 col-xs-12">
                                <img src="<?php echo base_url(); ?>assets/images/big/img1.jpg" alt="user" class="img-responsive radius" />
                              </div>
                              <div class="col-md-9 col-xs-12">
                                <p>
                                  Lorem ipsum dolor sit amet, consectetur
                                  adipiscing elit. Integer nec odio. Praesent
                                  libero. Sed cursus ante dapibus diam.
                                </p>
                                <a href="#" class="btn btn-success">
                                  Design weblayout</a>
                              </div>
                            </div>
                            <div class="like-comm m-t-20">
                              <a href="javascript:void(0)" class="link m-r-10">2 comment</a>
                              <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5
                                Love</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <hr />
                      <div class="sl-item">
                        <div class="sl-left">
                          <img src="<?php echo base_url(); ?>assets/images/users/3.jpg" alt="user" class="img-circle" />
                        </div>
                        <div class="sl-right">
                          <div>
                            <a href="#" class="link">John Doe</a>
                            <span class="sl-date">5 minutes ago</span>
                            <p class="m-t-10">
                              Lorem ipsum dolor sit amet, consectetur
                              adipiscing elit. Integer nec odio. Praesent
                              libero. Sed cursus ante dapibus diam. Sed nisi.
                              Nulla quis sem at nibh elementum imperdiet. Duis
                              sagittis ipsum. Praesent mauris. Fusce nec
                              tellus sed augue semper
                            </p>
                          </div>
                          <div class="like-comm m-t-20">
                            <a href="javascript:void(0)" class="link m-r-10">2 comment</a>
                            <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5
                              Love</a>
                          </div>
                        </div>
                      </div>
                      <hr />
                      <div class="sl-item">
                        <div class="sl-left">
                          <img src="<?php echo base_url(); ?>assets/images/users/4.jpg" alt="user" class="img-circle" />
                        </div>
                        <div class="sl-right">
                          <div>
                            <a href="#" class="link">John Doe</a>
                            <span class="sl-date">5 minutes ago</span>
                            <blockquote class="m-t-10">
                              Lorem ipsum dolor sit amet, consectetur
                              adipisicing elit, sed do eiusmod tempor
                              incididunt
                            </blockquote>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--second tab-->
                <div class="tab-pane" id="profile" role="tabpanel">
                  <div class="card-block">
                    <div class="row">
                      <div class="col-md-3 col-xs-6 b-r">
                        <strong>Full Name</strong>
                        <br />
                        <p class="text-muted">Johnathan Deo</p>
                      </div>
                      <div class="col-md-3 col-xs-6 b-r">
                        <strong>Mobile</strong>
                        <br />
                        <p class="text-muted">(123) 456 7890</p>
                      </div>
                      <div class="col-md-3 col-xs-6 b-r">
                        <strong>Email</strong>
                        <br />
                        <p class="text-muted">johnathan@admin.com</p>
                      </div>
                      <div class="col-md-3 col-xs-6">
                        <strong>Location</strong>
                        <br />
                        <p class="text-muted">London</p>
                      </div>
                    </div>
                    <hr />
                    <p class="m-t-30">
                      Donec pede justo, fringilla vel, aliquet nec, vulputate
                      eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                      venenatis vitae, justo. Nullam dictum felis eu pede
                      mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                      elementum semper nisi. Aenean vulputate eleifend tellus.
                      Aenean leo ligula, porttitor eu, consequat vitae,
                      eleifend ac, enim.
                    </p>
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry. Lorem Ipsum has been the
                      industry's standard dummy text ever since the 1500s,
                      when an unknown printer took a galley of type and
                      scrambled it to make a type specimen book. It has
                      survived not only five centuries
                    </p>
                    <p>
                      It was popularised in the 1960s with the release of
                      Letraset sheets containing Lorem Ipsum passages, and
                      more recently with desktop publishing software like
                      Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                    <h4 class="font-medium m-t-30">Skill Set</h4>
                    <hr />
                    <h5 class="m-t-30">
                      Wordpress <span class="pull-right">80%</span>
                    </h5>
                    <div class="progress">
                      <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%; height: 6px">
                        <span class="sr-only">50% Complete</span>
                      </div>
                    </div>
                    <h5 class="m-t-30">
                      HTML 5 <span class="pull-right">90%</span>
                    </h5>
                    <div class="progress">
                      <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%; height: 6px">
                        <span class="sr-only">50% Complete</span>
                      </div>
                    </div>
                    <h5 class="m-t-30">
                      jQuery <span class="pull-right">50%</span>
                    </h5>
                    <div class="progress">
                      <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%; height: 6px">
                        <span class="sr-only">50% Complete</span>
                      </div>
                    </div>
                    <h5 class="m-t-30">
                      Photoshop <span class="pull-right">70%</span>
                    </h5>
                    <div class="progress">
                      <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%; height: 6px">
                        <span class="sr-only">50% Complete</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="settings" role="tabpanel">
                  <div class="card-block">
                    <form class="form-horizontal form-material">
                      <div class="form-group">
                        <label class="col-md-12">Full Name</label>
                        <div class="col-md-12">
                          <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="example-email" class="col-md-12">Email</label>
                        <div class="col-md-12">
                          <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">Password</label>
                        <div class="col-md-12">
                          <input type="password" value="password" class="form-control form-control-line" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">Phone No</label>
                        <div class="col-md-12">
                          <input type="text" placeholder="123 456 7890" class="form-control form-control-line" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-12">Message</label>
                        <div class="col-md-12">
                          <textarea rows="5" class="form-control form-control-line"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-12">Select Country</label>
                        <div class="col-sm-12">
                          <select class="form-control form-control-line">
                            <option>London</option>
                            <option>India</option>
                            <option>Usa</option>
                            <option>Canada</option>
                            <option>Thailand</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                          <button class="btn btn-success">
                            Update Profile
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- footer -->
      <!-- ============================================================== -->
      <footer class="footer">
        © 2017 Material Pro Admin by wrappixel.com
      </footer>
      <!-- ============================================================== -->
      <!-- End footer -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
  </div>
  <!-- ============================================================== -->
  <!-- End Wrapper -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- All Jquery -->
  <!-- ============================================================== -->
  <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/tether.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
  <!--Wave Effects -->
  <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
  <!--Menu sidebar -->
  <script src="<?php echo base_url(); ?>assets/js/sidebarmenu.js"></script>
  <!--stickey kit -->
  <script src="<?php echo base_url(); ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
  <!--Custom JavaScript -->
  <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
  <!-- ============================================================== -->
  <!-- This page plugins -->
  <!-- ============================================================== -->
  <!-- chartist chart -->
  <script src="<?php echo base_url(); ?>assets/plugins/chartist-js/dist/chartist.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
  <!--c3 JavaScript -->
  <script src="<?php echo base_url(); ?>assets/plugins/d3/d3.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/c3-master/c3.min.js"></script>
  <!-- Chart JS -->
  <script src="<?php echo base_url(); ?>assets/js/dashboard.js"></script>
  <script>
    $(function() {
      var chart = c3.generate({
        bindto: "#visitor",
        data: {
          columns: [
            ["Dosen", <?php echo $totaldosen  ?>],
            ["Admin", <?php echo $totaladmin  ?>],
          ],

          type: "donut",
          onclick: function(d, i) {
            console.log("onclick", d, i);
          },
          onmouseover: function(d, i) {
            console.log("onmouseover", d, i);
          },
          onmouseout: function(d, i) {
            console.log("onmouseout", d, i);
          },
        },
        donut: {
          label: {
            show: false,
          },
          title: "Data Account",
          width: 20,
        },

        legend: {
          hide: true,
          //or hide: 'data1'
          //or hide: ['data1', 'data2']
        },
        color: {
          pattern: ["#26c6da", "#745af2"],
        },
      });
    });
  </script>
</body>

</html>