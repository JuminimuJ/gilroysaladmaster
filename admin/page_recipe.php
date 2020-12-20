<?php
session_start(); 
include('../db/conn.php');
if(isset($_SESSION["username"] ))
{
    if(isset($_POST['btnaddrecipe']))
    {

        $rec_title = $_POST['rec_title'];
        $rec_desc = $_POST['rec_desc'];
        $rec_link = $_POST['rec_link'];

        $actualImg=PATHINFO($_FILES["rec_thumb"]["name"]);
        $newActualImg=$actualImg['filename'] ."_". time() . "." . $actualImg['extension'];

        if(move_uploaded_file($_FILES["rec_thumb"]["tmp_name"],"../uploads/recipe/thumb/" . $newActualImg))
        {
            $sql = "INSERT INTO `page_recipe`(`rec_title`, `rec_desc`, `link`, `img_thumb`, `status`) VALUES ('$rec_title', '$rec_desc', '$rec_link', '$newActualImg', '1')";
            $query = $conn->query($sql) or die(mysqli_error($conn));

            if($query)
            {
                echo "<script type='text/javascript'>
                        alert('New Recipe has been Posted!');
                        window.location='page_recipe.php';
                      </script>";
            }else{
                echo "<script type='text/javascript'>
                        alert('Unexpected Error!');
                        window.location='page_recipe.php';
                      </script>";
            }
        }else{
            echo "<script type='text/javascript'>
                    alert('Unexpected Error!');
                    window.location='page_recipe.php';
                  </script>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CA Systems of Gilroy - Recipe</title>

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
                            	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-clipboard-list"></i> Recipe</h6>

                                    <button data-toggle="modal" data-target="#addnewrecipe" class="btn btn-outline-dark rounded-0"><i class="fas fa-plus"></i> Add New Tab</button>
                                </div>
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-md-12 table">
                                            <table style="width:100%;" class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

            <?php
                $recipe_sql = "SELECT * FROM `page_recipe` WHERE 1";
                $recipe_query = $conn->query($recipe_sql);

                while($row = $recipe_query->fetch_array())
                {
            ?>
            <tr>
                <td>
                    <img style="max-width:200px;" src="../uploads/recipe/thumb/<?php echo $row[4];?>" />
                </td>            
                <td><?php echo $row[1];?></td>            
                <td>
        <textarea class="form-control" readonly="" id="editor0055<?php echo $row[0];?>"><?php echo $row[2];?></textarea>
                </td>            
                <td>
                    <div class="dropdown">
                        <button class="btn btn-outline-dark dropdown-toggle rounded-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#"><i class="fas fa-pen"></i> Edit</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-trash"></i> Delete</a>
                        </div>
                    </div>
                </td>
            </tr>

            <script>
               CKEDITOR.replace( 'editor0055<?php echo $row[0];?>' );
            </script>
            <?php
                }//end while
            ?>

                                
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
<div class="modal fade" id="addnewrecipe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content rounded-0">
      <form method="post" action="page_recipe.php" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i> Add new Recipe</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Title:</label>
            <input type="text" name="rec_title" class="form-control">
        </div>

        <div class="form-group">
            <label>Description:</label>
            <textarea name="rec_desc" id="editor1"></textarea>
        </div>

        <div class="form-group">
            <label>Image Thumbnail:</label>
            <input type="file" name="rec_thumb" accept="image/x-png,image/gif,image/jpeg" class="form-control">
        </div>

        <div class="form-group">
            <label>Link / Embedded Code (Optional)</label><a href="#" data-toggle="tooltip" title="Right click on a Youtube video and click 'Copy Embed code' and paste the code below. "><i class="fa fa-question-circle"></i></a>
            <textarea class="form-control" style="resize:none;" name="rec_link"></textarea>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        <button type="submit" name="btnaddrecipe" class="btn btn-primary rounded-0"><i class="fas fa-save"></i> Post Recipe</button>
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