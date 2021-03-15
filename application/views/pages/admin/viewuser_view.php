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
                      <li> <a href="<?=base_url()?>admin/manageusers">
                            <i class="fa fa-home"></i><span>Go Back</span>
                        </a>
                               </li>          <!--     <li>
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
                  

                </div>
 
                <section class="content">
<h3>View Team Information </h3>
  <div class="row">

                                      <form method="POST" action="<?= site_url('/admin/viewuser/editeams/')?>"> 
                        <!-- content left-->
                        <div class="col-lg-12 my-content">

                            <div class="col-lg-4 my-resume-content box box-info">
                                       <div style="margin-left: 10%; margin-top: 7%; margin-right: 10%;"> <h1 style="margin-left:3%;">Information
                                                                </h1><hr>  


                          <?php

                                                if($datas){
                                            foreach($datas as $dats){
                    // for loop para sa pagkuha ng data
                                            //
                                     ?>   
                                     <div class="row">
                                        <div class="col-sm-6">
                                     <h5>ID:   </h5><input type="text" value="<?php echo  $dats['contestantID']; ?>" name="id"  class="form-control" >
                                     <h5>Team Name:   </h5><input type="text" value="<?php echo  $dats['teamname']; ?>" class="form-control" disabled>
                                     </div>
                                       <div class="col-sm-6">
                                     <h5>Team Username: </h5>  <input type="text" class="form-control" name="username" value="<?php echo  $dats['username']; ?>">
                                      <h5>Password: </h5>  <input type="text" class="form-control"  name="password"  value="<?php echo  $dats['password']; ?>" >
                                 </div>
                                       <div class="col-sm-4">
                                    

                                 </div>
                             </div>
                             <br>
                             <h4>Members Information</h4>
                             <hr>   <h4>Member 1</h4>
                            <div class="row">
                                        <div class="col-sm-4">
                          
                                      <h5>Fist Name: </h5>  <input type="text" class="form-control" name="tmfn1" value="<?php echo  $dats['tmfn1']; ?>" >
                                        <h5>Contact Number: </h5>  <input type="text" class="form-control" name="contactno1" value="<?php echo  $dats['contactno1']; ?>" >
                                        </div>
                                        <div class="col-sm-4">
                                      <h5>Last Name: </h5>  <input type="text" class="form-control" name="tmln1" value="<?php echo  $dats['tmln1']; ?>" >
                                        <h5>Position: </h5>  <input type="text" class="form-control" name="pos" value="<?php echo  $dats['pos']; ?>" >
                                        </div>
                                        <div class="col-sm-4">
                                      <h5>Verified Email: </h5>  <input type="text" class="form-control" name="tme1" value="<?php echo  $dats['tme1']; ?>" >
                                        <h5>Organization/Affiliation: </h5>  <input type="text"  name="org" class="form-control" value="<?php echo  $dats['org']; ?>" >
                                        </div>
                                
                                        </div>
                                        <br>
                             <h4>Member 2</h4>

                                  <div class="row">
                                        <div class="col-sm-3"> 

                                          <h5>Fist Name: </h5>  <input type="text" class="form-control" name="tmfn2" value="<?php echo  $dats['tmfn2']; ?>" >
                                       
                                        </div>    
                                        <div class="col-sm-3">
                                          <h5>Last Name: </h5>  <input type="text" class="form-control" name="tmln2" value="<?php echo  $dats['tmln2']; ?>" >
                                        
                                        </div>    
                                        <div class="col-sm-3"> 
                                          <h5>Email: </h5>  <input type="text" class="form-control"  name="tme2" value="<?php echo  $dats['tme2']; ?>" >
                                       
                                        </div>    
                                        <div class="col-sm-3">
                                          <h5>Contact Number: </h5>  <input type="text" class="form-control" name="contactno2" value="<?php echo  $dats['contactno2']; ?>" >
                                        
                                        </div>    
                                    </div>
                                    <br><h4>Member 3</h4>

                                  <div class="row">
                                        <div class="col-sm-3"> 

                                          <h5>Fist Name: </h5>  <input type="text" class="form-control" name="tmfn3" value="<?php echo  $dats['tmfn3']; ?>" >
                                       
                                        </div>    
                                        <div class="col-sm-3">
                                          <h5>Last Name: </h5>  <input type="text" class="form-control" name="tmln3" value="<?php echo  $dats['tmln3']; ?>" >
                                        
                                        </div>    
                                        <div class="col-sm-3"> 
                                          <h5>Email: </h5>  <input type="text" class="form-control"  name="tme3" value="<?php echo  $dats['tme3']; ?>" >
                                       
                                        </div>    
                                        <div class="col-sm-3">
                                          <h5>Contact Number: </h5>  <input type="text" class="form-control" name="contactno3"  value="<?php echo  $dats['contactno3']; ?>" >
                                        
                                        </div>    
                                    </div>
                                    <br><h4>Member 4</h4>

                                  <div class="row">
                                        <div class="col-sm-3"> 

                                          <h5>Fist Name: </h5>  <input type="text" class="form-control" name="tmfn4" value="<?php echo  $dats['tmfn4']; ?>" >
                                       
                                        </div>    
                                        <div class="col-sm-3">
                                          <h5>Last Name: </h5>  <input type="text" class="form-control" name="tmln4" value="<?php echo  $dats['tmln4']; ?>" >
                                        
                                        </div>    
                                        <div class="col-sm-3"> 
                                          <h5>Email: </h5>  <input type="text" class="form-control" name="tme4" value="<?php echo  $dats['tme4']; ?>" >
                                       
                                        </div>    
                                        <div class="col-sm-3">
                                          <h5>Contact Number: </h5>  <input type="text" class="form-control" name="contactno4" value="<?php echo  $dats['contactno4']; ?>" >
                                        
                                        </div>    
                                    </div> 
                                    <br><h4>Member 5</h4>

                                  <div class="row">
                                        <div class="col-sm-3"> 

                                          <h5>Fist Name: </h5>  <input type="text" class="form-control"  name="tmfn5" value="<?php echo  $dats['tmfn5']; ?>" >
                                       
                                        </div>    
                                        <div class="col-sm-3">
                                          <h5>Last Name: </h5>  <input type="text" class="form-control"   name="tmln5" value="<?php echo  $dats['tmln5']; ?>" >
                                        
                                        </div>    
                                        <div class="col-sm-3"> 
                                          <h5>Email: </h5>  <input type="text" class="form-control"  name="tme5" value="<?php echo  $dats['tme5']; ?>" >
                                       
                                        </div>    
                                        <div class="col-sm-3">
                                          <h5>Contact Number: </h5>  <input type="text" class="form-control"  name="contactno5" value="<?php echo  $dats['contactno5']; ?>" >
                                        <br>
                                        <input type="submit" value="Edit Values" class="btn btn-primary">
                                        <br><br></div>    
                                    </div>
                                      
                                        
                                        <?php } } ?>
</div>

                               </div>
                           </div>
                       </div>

</form>
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

       <!-- jQuery 3 -->
        <script src="<?= base_url() ?>bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?= base_url() ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="<?= base_url() ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="<?= base_url() ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="<?= base_url() ?>bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url() ?>dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?= base_url() ?>dist/js/demo.js"></script>

        <script type="text/javascript">
    var table;

            $(document).ready(function () {
                //datatables
                table = $('#table').DataTable({
                    "columnDefs": [
                        {
                            "targets": [-1], //first column / numbering column
                            "orderable": false, //set not orderable
                        },
                    ]
                });
            });
        </script>

    </body>
</html>