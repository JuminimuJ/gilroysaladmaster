<!doctype html>
<html lang="zxx">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php 
include('render/css.php');
?>

<title>Gilroy Saladmaster® - Products</title>
</head>
<body>

<div class="preloader">
<div class="spinner">
<div class="double-bounce1"></div>
<div class="double-bounce2"></div>
</div>
</div>

<?php include('render/nav.php');?>
<?php include('render/sidebar-modal.php');?>

<div class="page-title-area item-bg-7">
<div class="container">
<div class="page-title-content">
<h2><?php foreach ( $_GET as $key => $value ) {echo str_replace("_"," ",$key);}?></h2>
<ul>
<li>
<a href="index.php">
Home
<i class="fa fa-chevron-right"></i>
</a>
</li>
<li>Products</li>
</ul>
</div>
</div>
</div>


<section class="suitable-menu-shape ptb-100">
	<div class="container">
		<div class="row">
			
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="single-menu-item">

						<img src="uploads/products/Roasters/10-qt-95l-roaster-with-cover.jpg" alt="Shop">
					
					<div class="item-text">
						<h3>
							<a href="#">Broduos Grenti menso</a>
						</h3>
						<p>Lorem ipsum dolor siamonsectetur adipiscing elit, sed do </p>
						<ul>
							<li>
								<a class="default-btn" href="#"><i class="fa fa-eye"></i> View More</a>
							</li>
						</ul>
					</div>
				</div>
			</div>


		</div><!-- row -->
	</div><!-- container -->
</section>


<?php include('render/footer.php');?>

<div class="go-top-area">
<div class="go-top-wrap">
<div class="go-top-btn-wrap">
<div class="go-top go-top-btn">
<i class="flaticon-arrows"></i>
<i class="flaticon-arrows"></i>
</div>
</div>
</div>
</div>


<?php include('render/js.php');?>
<script type="text/javascript">
$(function() {
  $('#products').addClass('active');
});
</script>
</body>

<!-- Mirrored from templates.envytheme.com/asahi/default/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Dec 2020 12:36:04 GMT -->
</html>