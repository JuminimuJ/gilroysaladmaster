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
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

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
                            	<form method="post" action="php/update_page.php">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-address-card"></i> About</h6>

                                    <div class="dropdown">
                                        <button type="submit" name="btnupdabout" class="btn btn-outline-info rounded-0"><i class="fas fa-save"></i> Save Changes</button>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"><i class="fas fa-pen"></i> Edit</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-md-12">
                                            <?php
                                            $sql = "SELECT * FROM `page_about` WHERE 1";
                                            $query = $conn->query($sql);

                                            $content = '';
                                            if($query->num_rows == 0)
                                            {
                                                $content = 'No Content...';
                                            }else{
                                                $row = $query->fetch_array();
                                                $content = $row[1];
                                            }
                                            ?>
                                            <textarea name="content_about" id="editor1" rows="10" cols="80">
                                               <?php echo $content;?>
                                            </textarea>
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

    <!-- WYSIWYG EDITOR -->

    <script>
       CKEDITOR.replace( 'editor1' );
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