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
    <title>CA Systems of Gilroy - Social Networks</title>
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

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">

                                <form method="post" action="manage_socila.php">
                            	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-address-book"></i> Contact</h6>

                                    <button class="btn btn-outline-success rounded-0"><i class="fas fa-save"></i> Save Changes</button>
                                </div>
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-md-12 table">
                                            <table style="width:100%;" class="table">
                                                <thead>
                                                    <tr>
                                                        
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $sql = "SELECT * FROM `page_contact` WHERE 1";
                                                    $query = $conn->query($sql);
                                                    while($row = $query->fetch_array())
                                                    {
                                                    ?>
                <tr>
                    <th>Address:</th><th><textarea name="address" class="form-control"><?php echo $row[1]?></textarea></th>
                </tr>
                <tr>
                    <th>Phone Number:</th><th><input type="text" name="pnum" value="<?php echo $row[2]?>" class="form-control"></th>
                </tr>
                <tr>
                    <th>Mobile Number:</th><th><input type="text" name="mnum1" value="<?php echo $row[3]?>" class="form-control"></th>
                </tr>
                <tr>
                    <th>Mobile Number (Alt):</th><th><input type="text" name="mnum2" value="<?php echo $row[4]?>" class="form-control"></th>
                </tr>
                <tr>
                    <th>Primary Email :</th><th><input type="email" name="email1" value="<?php echo $row[5]?>" class="form-control"></th>
                </tr>
                <tr>
                    <th>Secondary Email (Staff):</th><th><input type="email" name="email2" value="<?php echo $row[6]?>" class="form-control"></th>
                </tr>                                        
                                                    
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                </form>

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