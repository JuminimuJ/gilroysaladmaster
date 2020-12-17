<?php
session_start(); 
include('../db/conn.php');
if(isset($_SESSION["username"] ))
{
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CA Systems of Gilroy - Dashboard</title>

    <?php include('render/css.php');?>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include('render/sidebar.php');?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('render/topnavbar.php');?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-tachometer-alt"></i> 	Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                            	<div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Frontend Preview</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle btn btn-outline-dark rounded-0 btn-sm" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-eye"></i> Change View Mode<i class="fas fa-caret-down fa-sm fa-fw"></i>
                                        </a>
      	<div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" id="webview" href="#"><i class="fa fa-desktop"></i> Web</a>
            <a class="dropdown-item" id="tabletview" href="#"><i class="fa fa-tablet-alt"></i> Tablet</a>
            <a class="dropdown-item" id="mobileview" href="#"><i class="fa fa-mobile-alt"></i> Mobile</a>
        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
         <!-- DESKTOP --> 
         <div class="col-md-12" id="frame_web" style="background-image:url('img/327-3276426_slideshow-frame-imac.png');background-size: 1100px 665.5px;padding-bottom:40px;">    
                            	
         <iframe src="../index.php" scrolling="yes" width="712" height="380" style="position:relative;left:100px;top:20px;zoom: 1.5;-moz-transform:scale(0.75);-moz-transform-origin: 0 0;-o-transform: scale(0.75);-o-transform-origin: 0 0;-webkit-transform: scale(0.75);-webkit-transform-origin: 0 0;width:726;border:#eee;"></iframe>
         

     	 </div>
         <!-- smartphone -->  

         <div class="col-md-12" id="frame_mobile" style="display:none;background-image:url('img/searchpng.com-iphone-xr-white-mockup-png-image-free-download.png');background-repeat: repeat-y;background-size: 700px 700px;padding-bottom:40px;">
 
         <iframe src="../index.php" width="295" height="637" style="position:relative;left:195px;top:30px;border-radius:40px;"></iframe>
  		 </div>
         <!-- tablet -->  
         
         <div class="col-md-12" id="frame_tablet" style="display:none;background-image:url('img/tablet-16317.png');background-repeat: repeat-y;background-size: 842px 600px;padding-bottom:40px;">
         	  
         <iframe src="../index.php" width="645" height="480" style="position:relative;left:100px;top:30px;"></iframe>
     	 </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Pending Requests Card Example -->
                      
                    </div>



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Ca Systems of Gilroy <?php echo date('Y');?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <?php include('modal/utils.php');?>
    <?php include('modal/logout.php');?>

    <?php include('render/js.php');?>

<script>
$(document).ready(function(){
  $("#webview").click(function(){
    $("#frame_mobile").hide();
    $("#frame_tablet").hide();
    $("#frame_web").show();
  });

});

$(document).ready(function(){
  $("#mobileview").click(function(){
    $("#frame_mobile").show();
    $("#frame_tablet").hide();
    $("#frame_web").hide();
  });

});

$(document).ready(function(){
  $("#tabletview").click(function(){
    $("#frame_mobile").hide();
    $("#frame_tablet").show();
    $("#frame_web").hide();
  });

});
</script>
</body>

</html>


<?php
}else{
    echo "<script type='text/javascript'>
            alert('Session expired');
            window.location='logout.php';
          </script>";
}
?>