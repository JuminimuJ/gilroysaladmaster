<?php
session_start(); 
include('../db/conn.php');
if(isset($_SESSION["username"] ))
{

    if(isset($_POST['btnaddblog']))
    {
        $blog_title = $_POST['blog_title'];
        $blog_desc = $_POST['blog_desc'];
        $blog_link = $_POST['blog_link'];

        $actualImg=PATHINFO($_FILES["blog_thumb"]["name"]);
        $newActualImg=$actualImg['filename'] ."_". time() . "." . $actualImg['extension'];

        if(move_uploaded_file($_FILES["blog_thumb"]["tmp_name"],"../uploads/blog/thumb/" . $newActualImg))
        {
            $sql = "INSERT INTO `page_blog`(`blog_title`, `blog_desc`, `blog_thumb`, `link`, `status`) VALUES ('$blog_title','$blog_desc','$newActualImg','$blog_link','1')";
            $query = $conn->query($sql) or die(mysqli_error($conn));

            if($query)
            {
                echo "<script type='text/javascript'>
                        alert('New blog has been Posted!');
                        window.location='page_blog.php';
                      </script>";
            }else{
                echo "<script type='text/javascript'>
                        alert('Unexpected Error!');
                        window.location='page_blog.php';
                      </script>";
            }
        }else{
            echo "<script type='text/javascript'>
                    alert('Unexpected Error!');
                    window.location='page_blog.php';
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

    <title>CA Systems of Gilroy - Blog</title>

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

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                            	<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-blog"></i> Blog</h6>

                                    <button data-toggle="modal" data-target="#addnewBlog" class="btn btn-outline-dark rounded-0"><i class="fas fa-plus"></i> Add New Blog</button>
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
                                                        <th>Link</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $blog_sql = "SELECT * FROM `page_blog` WHERE 1";
                                                    $blog_query = $conn->query($blog_sql);

                                                    while($row = $blog_query->fetch_array())
                                                    {
                                                    ?>
        <tr>
            <td><img style="max-width:200px;" src="../uploads/blog/thumb/<?php echo $row[3];?>" /></td>
            <td><?php echo $row[1];?></td>
            <td>
                <textarea id="editor0054<?php echo $row[0];?>" readonly="" style="max-width:200px;height:200px;resize:none;"><?php echo $row[2];?></textarea>
            </td>
            <td>
                <textarea style="" width="400" height="600" rows="15" class="form-control"><?php echo $row[4];?></textarea>
            </td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-outline-dark rounded-0 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
       CKEDITOR.replace( 'editor0054<?php echo $row[0];?>' );
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

<div class="modal fade" id="addnewBlog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <input type="text" name="blog_title" class="form-control">
        </div>

        <div class="form-group">
            <label>Description:</label>
            <textarea name="blog_desc" id="editor1"></textarea>
        </div>

        <div class="form-group">
            <label>Image Thumbnail:</label>
            <input type="file" name="blog_thumb" class="form-control">
        </div>

        <div class="form-group">
            <label>Link / Embedded Code (iframe)</label><a href="#" data-toggle="tooltip" title="Right click on a Youtube video and click 'Copy Embed code' and paste the code below. "><i class="fa fa-question-circle"></i></a>
            <textarea class="form-control" style="resize:   none;" name="blog_link"></textarea>
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
    <script>
       CKEDITOR.replace( 'editor1' );
    </script>
    <script type="text/javascript">
        $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
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