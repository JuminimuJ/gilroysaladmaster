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

    <title>CA Systems of Gilroy - Update Logo</title>

    <?php include('render/css.php');?>
<style type="text/css">
            /*
 This css and associated images borrow heavily from the fantastic 
 chosen select box plugin.
 
 Copyright (c) 2011 Harvest http://getharvest.com
 MIT License, https://github.com/harvesthq/chosen/blob/master/LICENSE.md
*/

.font-select {
  font-size: 16px;
  width: 210px;
  position: relative;
  display: inline-block;
  zoom: 1;
  *display: inline;
}

.font-select .fs-drop {
  background: #fff;
  border: 1px solid #aaa;
  border-top: 0;
  position: absolute;
  top: 29px;
  left: 0;
  -webkit-box-shadow: 0 4px 5px rgba(0,0,0,.15);
  -moz-box-shadow   : 0 4px 5px rgba(0,0,0,.15);
  -o-box-shadow     : 0 4px 5px rgba(0,0,0,.15);
  box-shadow        : 0 4px 5px rgba(0,0,0,.15);
  z-index: 999;
}

.font-select > a {
  background-color: #fff;
  -webkit-border-radius: 4px;
  -moz-border-radius   : 4px;
  border-radius        : 4px;
  -moz-background-clip   : padding;
  -webkit-background-clip: padding-box;
  background-clip        : padding-box;
  border: 1px solid #ccc;
  display: block;
  overflow: hidden;
  white-space: nowrap;
  position: relative;
  height: 34px;
  line-height: 34px;
  padding: 0 0 0 8px;
  color: #444;
  text-decoration: none;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
  box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
}

.font-select > a span {
  margin-right: 26px;
  display: block;
  overflow: hidden;
  white-space: nowrap;
  line-height: 2;
  -o-text-overflow: ellipsis;
  -ms-text-overflow: ellipsis;
  text-overflow: ellipsis;
  cursor: pointer;
}

.font-select > a div {
  -webkit-border-radius: 0 4px 4px 0;
  -moz-border-radius   : 0 4px 4px 0;
  border-radius        : 0 4px 4px 0;
  -moz-background-clip   : padding;
  -webkit-background-clip: padding-box;
  background-clip        : padding-box;
  position: absolute;
  right: 0;
  top: 0;
  display: block;
  height: 100%;
  width: 14px;
}

.font-select > a div b {
  position: relative;
  display: block;
  width: 100%;
  height: 100%;
  cursor: pointer;
  font-size: 0.6em;
  color: #555;
}

.font-select > a div b:after {
  content: "\25bc";
}

.font-select .fs-drop {
  -webkit-border-radius: 0 0 4px 4px;
  -moz-border-radius   : 0 0 4px 4px;
  border-radius        : 0 0 4px 4px;
  -moz-background-clip   : padding;
  -webkit-background-clip: padding-box;
  background-clip        : padding-box;
  border: 1px solid #ccc;
  top: 34px;
  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,0.175);
  box-shadow: 0 6px 12px rgba(0,0,0,0.175);
}

.font-select .fs-results {
  margin: 0 4px 4px 0;
  max-height: 190px;
  width: 100%;
  padding: 0;
  position: relative;
  overflow-x: hidden;
  overflow-y: auto;
}

.font-select .fs-results li {
  line-height: 80%;
  padding: 7px 7px 8px;
  margin: 0;
  list-style: none;
  font-size: 18px;
}

.font-select .fs-results li.active {
  background-color: #428bca;
  color: #fff;
  cursor: pointer;
}
.font-select .fs-results li em {
  background: #feffde;
  font-style: normal;
}

.font-select .fs-results li.active em {
  background: transparent;
}

.font-select-active > a {
  -webkit-box-shadow: 0 0 5px rgba(0,0,0,.3);
  -moz-box-shadow   : 0 0 5px rgba(0,0,0,.3);
  -o-box-shadow     : 0 0 5px rgba(0,0,0,.3);
  box-shadow        : 0 0 5px rgba(0,0,0,.3);
  border: 1px solid #5897fb;
}

.font-select-active > a {
  border: 1px solid #ccc;
  -webkit-box-shadow: 0 1px 0 #fff inset;
  -moz-box-shadow   : 0 1px 0 #fff inset;
  -o-box-shadow     : 0 1px 0 #fff inset;
  box-shadow        : 0 1px 0 #fff inset;
  -webkit-border-bottom-left-radius : 0;
  -webkit-border-bottom-right-radius: 0;
  -moz-border-radius-bottomleft : 0;
  -moz-border-radius-bottomright: 0;
  border-bottom-left-radius : 0;
  border-bottom-right-radius: 0;
}

.font-select-active > a div {
  background: transparent;
  border-left: none;
}

.font-select-active > a div b:after {
  content: "\25b2";
}
</style>

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
                                    <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-cogs"></i> Other</h6>
                                <button type="button" class="btn btn-outline-success rounded-0"><i class="fas fa-save"></i> Save Changes</button>

                                </div>
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Font Family:</label>
                                                <input id="font" type="text" />
                                            </div>

                                            <div class="form-group">
                                                <label>Google Map (Paste Embedded iframe):</label>
                                                <textarea placeholder="Paste your embedded google map iframe here..." class="form-control rounded-0"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101952.87185616796!2d-121.65117154007146!3d37.00914637254441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091e3b91553cecb%3A0xaefd0c1ba527283b!2sGilroy%2C%20CA%2095020%2C%20USA!5e0!3m2!1sen!2sph!4v1608019518142!5m2!1sen!2sph" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></textarea>
                                                <code><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101952.87185616796!2d-121.65117154007146!3d37.00914637254441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091e3b91553cecb%3A0xaefd0c1ba527283b!2sGilroy%2C%20CA%2095020%2C%20USA!5e0!3m2!1sen!2sph!4v1608019518142!5m2!1sen!2sph" width="400" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></code>
                                            </div>
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
    <script src="js/jquery.fontselect.js"></script>
    <script>
      $(function(){
        $('#font').fontselect();
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