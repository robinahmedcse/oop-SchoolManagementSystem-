<?php 
ob_start();
 session_start();

///teacher class\\\\\\\\

 require './classes/teacher/teacher.php';
 $object_teacher = new teacher();

 ///class class\\\\\\\\
 require './classes/stu_class/class_file.php';
$obj_class = New class_file();

 ///Section class\\\\\\\\
require './classes/section/section.php';
$obj_section = New section();

 ///Group class\\\\\\\\
require './classes/group/group.php';
$obj_stu_group = New group();



 ///Parent class\\\\\\\\
 require './classes/parent/stu_parent.php';
 $stu_parent = New stu_parent();



// $adminId= isset($_SESSION['adminId']);
// if($adminId){
//     header('location:adminmaster.php');
// }


 


// if(isset($_POST['btn'])){
//    // var_dump($_POST);
//    include './class_file/adminLogin.php';
//    $obj_admin= new adminLogin();
//    $obj_admin ->admin_login_check($_POST);
// }





?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Admin</title>

    <!-- Bootstrap  v3.3.7 -->
    <link href="asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="asset/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="asset/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="asset/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="asset/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="asset/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="asset/build/css/custom.min.css" rel="stylesheet">
    
      <link href="asset/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap4.min.css" />


            <!--    ajax jquery-->           
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script> 
  
            
   
    <!--    jquery.dataTables.min.js -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script> 


    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

    <script src="https://www.jqueryscript.net/demo/Dialog-Modal-Dialogify/dist/dialogify.min.js"></script>
 
       
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"> <span>Admin Panel </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
         <?php include('includes/profile.php');?>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <?php include('includes/sidebar.php');?>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <?php include('includes/sidebar-footer.php');?>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <?php include('includes/top-nav.php');?>
        <!-- /top navigation -->

        <!-- page content -->
        <?php
                if (isset($pages)) {
                    
                 /************\\ Teacher start //********************/ 
                    
                    if ($pages == "view-all-teacher") {
                        include './pages/teacher/viewTeacher.php ';
                    }
                    elseif ($pages == "add-teacher") {
                      include './pages/teacher/addTeacher.php ';
                    }
                   
                  /************\\ Teacher end //********************/ 







                  /************\\ class start //********************/ 
                  elseif ($pages == "view-all-class") {
                    include './pages/class/viewClass.php ';
                  }
                  elseif ($pages == "add-class") {
                    include './pages/class/addClass.php ';
                  }
                  /************\\ class end //********************/ 







                  
                  /************\\ Section start //********************/ 
                  elseif ($pages == "view-all-section") {
                    include './pages/section/viewSection.php ';
                  }
                  elseif ($pages == "add-section") {
                    include './pages/section/addSection.php ';
                  }
                  /************\\ Section end //********************/ 


                  
                  
                  /************\\ Group start //********************/ 
                  elseif ($pages == "view-all-group") {
                    include './pages/group/viewStuGroup.php ';
                  }
                  elseif ($pages == "add-group") {
                    include './pages/group/addStuGroup.php ';
                  }
                  /************\\ Section end //********************/ 



                    
                  /************\\ parent start //********************/ 
                  elseif ($pages == "view-all-parent") {
                    include './pages/parent/viewParent.php ';
                  }
                  elseif ($pages == "add-parent") {
                    include './pages/parent/addParent.php ';
                  }
                  /************\\ Section end //********************/ 



               








                    } 
                      else {
                         include './pages/p-dashboard.php';
                     }





                ?>





                <!-- /page content -->
        <!-- /page content -->

        <!-- footer content -->
        <?php include('includes/footer.php');?>
        <!-- /footer content -->
      </div>
    </div>
 
      
    <!-- Bootstrap -->
    <script src="asset/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- FastClick -->
    <script src="asset/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="asset/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="asset/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="asset/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="asset/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="asset/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="asset/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="asset/vendors/Flot/jquery.flot.js"></script>
    <script src="asset/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="asset/vendors/Flot/jquery.flot.time.js"></script>
    <script src="asset/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="asset/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="asset/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="asset/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="asset/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="asset/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="asset/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="asset/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="asset/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="asset/vendors/moment/min/moment.min.js"></script>
    <script src="asset/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
       <script src="asset/build/js/custom.min.js"></script>
	
	


     
  </body>
</html>
