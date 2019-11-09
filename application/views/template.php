<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <!-- datables -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/datatables/datatables.min.css">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">

    <!-- MAIN WRAPPER -->
    <div class="wrapper">
        <!-- START HEADER -->
        <header class="main-header">
            <a href="../../index2.html" class="logo">
                <span class="logo-mini"><b>3</b>M</span>
                <span class="logo-lg"><b>Admin</b>3M</span>
            </a>
            <!-- START NAVBAR -->
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?= base_url() ?>assets/images/user2-160x160.jpg" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?= $this->login->user_login()->username ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="<?= base_url() ?>assets/images/user2-160x160.jpg" class="img-circle" alt="User Image">
                                    <p>
                                        <?= ucfirst($this->login->user_login()->nama_admin) ?>
                                        <small>Skripsi Lagi</small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-sm btn-primary btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?= base_url('auth/logout') ?>" class="btn btn-sm btn-danger btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- AND NAVBAR -->
        </header>
        <!-- AND HEADER -->

        <!-- SIDE BAR -->
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= base_url() ?>assets/images/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?= ucfirst($this->login->user_login()->nama_admin) ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li><a href=""><i class="fa fa-book"></i> <span>Dashboard</span></a></li>
                    <li><a href=""><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                    <li><a href=""><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                </ul>
            </section>
        </aside>
        <!-- AND SIDEBAR -->

        <!-- CONTENT WRAPPER -->
        <div class="content-wrapper">
            <?= $contents ?>
        </div>
        <!-- CONTENT WRAPPER -->
        
        <!-- FOOTER -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2019 <a href="#"></a></strong> All rights reserved
        </footer>
        <!-- FOOTER -->

    </div>
    <!-- AND MAIN WRAPPER -->
    
    <!-- datatable -->
   <script src="<?= base_url() ?>assets/vendor/datatables/datatables.min.js"></script> 
   <!-- jQuery 3 -->
    <script src="<?= base_url() ?>assets/vendor/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url() ?>assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?= base_url() ?>assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url() ?>assets/vendor/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>assets/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>assets/js/demo.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.sidebar-menu').tree()
        })
    </script>

</body>
</html>