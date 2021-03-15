  <html>  
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Welcome Admin!!!</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="<?= base_url() ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= base_url() ?>bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?= base_url() ?>bower_components/Ionicons/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?= base_url() ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>mystyle/css/wickedpicker.min.css" >
        <link rel="stylesheet" href="<?= base_url() ?>mystyle/css/wickedpicker.css">
        <link rel="stylesheet" href="<?= base_url() ?>mystyle/css/jquery-ui.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>mystyle/css/jquery-ui.structure.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/AdminLTE.css">
      
      <link rel="icon" href="<?=base_url()?>img/">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
       <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/skins/_all-skins.css">
        <link rel="stylesheet" href="<?= base_url() ?>mystyle/custom.css">
  
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Simonetta:400,900|Balthazar">

  
   
    </head>
    <body class="hold-transition skin-black sidebar-mini" onload="checkStatus()">
        <div class="wrapper">
            <header class="main-header">
            <a class="logo">
                <span class="logo-mini"><b>5</b>G</span>
                <span class="logo-lg"><small>P O R T A L</small> </span>
            </a>
            <!-- NAVBAR -->
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" >
                                <span class="hidden-xs"><?php echo $fname;  ?></span>
                                <!-- name in navbar   saan talaga tinatawag to? controller model?-->
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="pull-right">

                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown user user-menu">
                            <a href="<?= site_url('Login')?>" title="logout">
                                <!--  logout symbol-->
                                <i class="fa fa-sign-out" ></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--  side bar starts here-->
           <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu" data-widget="tree">
                     <li> <a href="<?=base_url()?>manage">
                            <i class="fa fa-pencil-square-o"></i><span>View Teams</span>
                        </a>
                               </li>      <li>
                        <a href="<?=base_url()?>AppMonitor">
                            <i class="fa fa fa-desktop"></i><span>Judge Event Monitoring</span>
                        </a>
                    </li>           <!--     <li>
                        <a href="<?=base_url()?>conm/AppDepartment">
                            <i class="fa fa-calendar-check-o"></i><span>Endorsed Applicants</span>
                        </a>
                    </li>
                     </li>               <li>
                        <a href="<?=base_url()?>conm/HireApplicant">
                            <i class="fa fa-caret-square-o-down"></i><span>Hired Applicants</span>
                        </a>
                    </li> -->  
                </ul>
            </section>
        </aside>
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->

                <div class="content-header" style="height: 40px;">
                   <h3 id="resume-header">Welcome! <?php echo $fname." ".$lname;?>! </h3>
                </div>

                <section class="content">
judge
</section>
</div>
</div>


        <!-- jQuery 3 -->
        <script src="<?= base_url() ?>bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?= base_url() ?>mystyle/js/jquery-ui.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?= base_url() ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Datatables -->
        <script src="<?= base_url() ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <!-- Wicked Picker -->
        <script type="text/javascript" src="<?= base_url() ?>mystyle/js/wickedpicker.min.js"></script>
        <!-- SlimScroll -->
        <script src="<?= base_url() ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="<?= base_url() ?>bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url() ?>dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?= base_url() ?>dist/js/demo.js"></script>
        <script src="<?= base_url() ?>bower_components/moment/min/moment.min.js"></script>

        <script>
                                $('.timepicker').wickedpicker({
                                    timeSeparator: ':'
                                });
                                $('.datepicker').datepicker();
        </script>
    
    </body>
</html>