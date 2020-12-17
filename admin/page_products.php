<?php
session_start(); 
include('../db/conn.php');
if(isset($_SESSION["username"] ))
{

    if(isset($_POST['btnaddproduct']))
    {
        require_once('../db/conn.php'); 
        $prod_title = $_POST['prod_title'];
        $prod_desc = $_POST['prod_desc'];

        $actualImg=PATHINFO($_FILES["prod_img"]["name"]);
        $newActualImg=$actualImg['filename'] ."_". time() . "." . $actualImg['extension'];
        
        if(move_uploaded_file($_FILES["prod_img"]["tmp_name"],"../uploads/" . $newActualImg))
        {
            //echo $newActualImg;

            $sql = "INSERT INTO `page_product`(`id`, `prod_title`, `prod_desc`, `prod_img`, `status`) VALUES (NULL, '$prod_title', '$prod_desc', '$newActualImg', '1')";
            $query = $conn->query($sql);

            if($query == TRUE)
            {
                echo "<script type='text/javascript'>
                    alert('New Product has been saved!');
                    window.location='page_products.php';
                  </script>";
            }else{
                echo "<script type='text/javascript'>
                    alert('Unexpected Error!');
                    window.location='page_products.php';
                  </script>";
            }

             

        }else{
            echo "<script type='text/javascript'>
                    alert('Unexpected Error!');
                    window.location='page_products.php';
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
    <title>CA Systems of Gilroy - Products</title>

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
                                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-boxes"></i> Products</h6>

                                    <button data-toggle="modal" data-target="#modalAddProduct" class="btn btn-outline-dark rounded-0"><i class="fas fa-plus"></i> Add Product</button>
                                </div>
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-md-12 table">
                                            <table style="width:100%;" class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>Description</th>
                                                        <th>Image</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $sql = "SELECT * FROM `page_product` WHERE 1";
                                                    $query = $conn->query($sql);

                                                    while($row = $query->fetch_array())
                                                    {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $row[1];?></td>
                                                        <td><?php echo $row[2];?></td>
                                                        <td><img src="../uploads/<?php echo $row[3];?>" style="max-width:100px;"></td>
                                                        <td>
                                                            
                                    <div class="dropdown">
                                        <button class="btn btn-outline-dark rounded-0 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-cog"></i> Action
                                          </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" data-toggle="modal" data-target="#modalEdit<?php echo $row[0]?>" href="#"><i class="fas fa-pen"></i> Edit</a>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#modalDelete<?php echo $row[0]?>" href="#"><i class="fas fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                                        </td>
                                                    </tr>
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
                      

                    </div>


                    <div class="modal fade" id="modalAddProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content rounded-0">
                            <form method="post" action="page_products.php" enctype="multipart/form-data">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i> Add Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input type="text" class="form-control" name="prod_title" value="" />
                            </div>

                            <div class="form-group">
                                <label>Product Description</label>
                                <textarea class="form-control" name="prod_desc"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="prod_img" class="form-control" />
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal">Close</button>
                            <button type="submit" name="btnaddproduct" class="btn btn-primary rounded-0"><i class="fas fa-save"></i> Save</button>
                          </div>

                        </div>
                      </div>
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