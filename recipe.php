<?php
include('render/_php_init.php');
?>
<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/asahi/default/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Dec 2020 12:36:07 GMT -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php 
include('render/css.php');
?>

<title>Gilroy Saladmaster® - Recipes</title>
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


<div class="page-title-area item-bg-4">
<div class="container">
<div class="page-title-content">
<h2>Recipes</h2>
<ul>
<li>
<a href="index.php">
Home
<i class="fa fa-chevron-right"></i>
</a>
</li>
<li>Recipes</li>
</ul>
</div>
</div>
</div>


<section class="blog-area ptb-100">
	<div class="container">
		<div class="row">

			<?php 

			$recipe_sql = "SELECT * FROM `page_recipe` WHERE 1";
            $recipe_query = $conn->query($recipe_sql);

                while($row = $recipe_query->fetch_array())
                {
			?>
			<div class="col-lg-3 col-sm-6 col-md-6">
				<div class="single-speacial-Offers">
					<div class="menu-img">
						<img src="uploads/recipe/thumb/<?php echo $row[4];?>" alt="Recipe">
					</div>
					<div class="item-text">
						<h3>
							<a href="recipe-details.php?recipe_id=<?php echo $row[0];?>"><?php echo $row[1];?></a>
						</h3>
						<p><?php echo $row[2];?></p>
						<a class="read-more" href="recipe-details.php?recipe_id=<?php echo $row[0];?>">Read More <i class="flaticon-right-arrow-forward"></i></a>
					</div>
				</div>
			</div>
			<?php
				}//end while
			?>
		


		<!-- Pagination -->
		<div class="col-lg-12">
			<div class="pagenavigation-area">
				<nav aria-label="Page navigation example text-center">
					<ul class="pagination">
						<li class="page-item">
							<a class="page-link page-links" href="#">
								<i class="flaticon-left-arrow"></i>
							</a>
						</li>
						<li class="page-item active">
							<a class="page-link" href="#">1</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">2</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#">3</a>
						</li>
						<li class="page-item">
							<a class="page-link" href="#"><i class="flaticon-right-arrow"></i></a>
						</li>
					</ul>
				</nav>
			</div>
		</div>


		</div>
	</div>
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
  $('#recipe').addClass('active');
});
</script>
</body>
</html>