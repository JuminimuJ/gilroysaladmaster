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

    <title>CA Systems of Gilroy - Home</title>

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
                            	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-home"></i> Home</h6>

                                    <button data-toggle="modal" data-target="#addnewSlide" class="btn btn-outline-dark rounded-0"><i class="fas fa-plus"></i> Add New Slide</button>
                                </div>
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="table">
                                            <table style="width:100%;" class="table table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Slide #</th>
                                                        <th>Image Header</th>
                                                        <th>Header</th>
                                                        <th>Description</th>
                                                        <th>Image Background</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
<div class="modal fade" id="addnewSlide" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content rounded-0">
      <form method="post" action="page_blog.php" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i> Add new Blog</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Title:</label>
            <input type="text" placeholder="Header title (h1)" name="slide_title" class="form-control">
        </div>

        <div class="form-group">
            <label>Description:</label>
            <textarea name="slide_desc" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label>Image Background:</label>
            <input type="file" name="slide_thumb" accept="image/x-png,image/gif,image/jpeg" class="form-control">
        </div>

        <div class="form-group">
            <label>Add Button Page Redirection</label>
            <input type="checkbox" name="checkbtn" class="form-control"> Add Button
            <select class="form-control" name="page_redirect">
                <option default hidden value="">-- Select a landing page for this button --</option>
                <option value="about.php">About</option>
                <option value="blog.php">Blog</option>
                <option value="contact.php">Contact</option>
                <option value="product.php">Products</option>
                <option value="recipe.php">Recipe</option>
                <option value="services.php">Services</option>
                <option value="other">Other</option>
            </select>
            <input type="text" name="other_redirect" class="form-control" placeholder="Input specific link of a landing page. Eg: product.php?Bakeware" />
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        <button type="submit" name="btnaddblog" class="btn btn-primary rounded-0"><i class="fas fa-save"></i> Post Blog</button>
      </div>
      </form>
    </div>
  </div>
</div>            
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