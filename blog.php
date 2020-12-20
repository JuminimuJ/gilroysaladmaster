<?php
include('render/_php_init.php');
?>
<!doctype html>
<html lang="zxx">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php 
include('render/css.php');
?>

<title>Gilroy Saladmaster® - Blog</title>
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
<h2>Blog</h2>
<ul>
<li>
<a href="index.php">
Home
<i class="fa fa-chevron-right"></i>
</a>
</li>
<li>Blog</li>
</ul>
</div>
</div>
</div>


<section class="blog-area ptb-100">
	<div class="container">
		<div class="row">

			<?php 
				$blog_sql = "SELECT * FROM `page_blog` WHERE 1";
				$blog_query = $conn->query($blog_sql);
				while($row = $blog_query->fetch_array())
				{

					$date_new = date($row[6]);
					$date_c = date_create($date_new);
					$date_f = date_format($date_c, 'F d, Y');
			?>
			<div class="col-lg-4 col-md-6">
				<div class="single-blog single-blog-grid">
					<a href="blog-details.php?blog_id=<?php echo $row[0];?>">
						<img src="uploads/blog/thumb/<?php echo $row[3];?>" alt="Blog">
					</a>
					<div class="blog-text">
						<p>By <a href="#">Admin</a> / On <?php echo $date_f;?></p>
						<h3>
							<a href="blog-details.php?blog_id=<?php echo $row[0];?>"><?php echo $row[1];?></a>
						</h3>
						<a class="read-more" href="blog-details.php?blog_id=<?php echo $row[0];?>">Read More <i class="flaticon-right-arrow-forward"></i></a>
					</div>
				</div>
			</div>
			<?php
				}
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
  $('#blog').addClass('active');
});
</script>
</body>
</html>