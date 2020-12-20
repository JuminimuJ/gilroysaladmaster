<?php
include('render/_php_init.php');

$recipe_sql = "SELECT * FROM `page_recipe` WHERE `id`='$_GET[recipe_id]'";
$recipe_query = $conn->query($recipe_sql);

$row = $recipe_query->fetch_array();
$date_new = date($row[6]);
$date_c = date_create($date_new);
$date_f = date_format($date_c, 'F d, Y');                                                    
?>
<!doctype html>
<html lang="zxx">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php 
include('render/css.php');
?>
<style type="text/css">
	iframe
	{
		width:720px;
		height:492px;
	}
</style>
<title>Gilroy Saladmaster® - Recipe</title>
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

<div class="page-title-area item-bg-1">
<div class="container">
<div class="page-title-content">
<h2><?php echo $row[1];?></h2>
<ul>
<li>
<a href="index.php">
Home
<i class="fa fa-chevron-right"></i>
</a>
</li>
<li><?php echo $row[1];?></li>
</ul>
</div>
</div>
</div>


<section class="blog-details-area ptb-100">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-12">

<div class="blog-details-desc">
<div class="article-image">
<img src="uploads/recipe/thumb/<?php echo $row[4];?>" style="" />
</div>
<div class="article-content">
<div class="entry-meta">
<ul>
<li><span>Posted On:</span> <a href="#"><?php echo $date_f;?></a></li>
<li><span>Posted By:</span> <a href="#">Admin</a></li>
</ul>
</div>
<h3><?php echo $row[1];?></h3>
<p><?php echo $row[2];?></p>

</div>
<div class="article-footer">
<div class="article-tags">
<span><i class="fa fa-share"></i></span>
<a href="#">Share</a>
</div>
<div class="article-share">
<ul class="social">
<li><a href="#" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
</ul>
</div>
</div>
<div class="post-navigation">
<div class="navigation-links">
<div class="nav-previous">
<a href="#"><i class="flaticon-left-chevron"></i> Prev Post</a>
</div>
<div class="nav-next">
<a href="#">Next Post <i class="flaticon-right-chevron"></i></a>
</div>
</div>
</div>

</div>
</div>
<div class="col-lg-4 col-md-12">
<aside class="widget-area" id="secondary">
<div class="widget widget_search">
<form class="search-form">
<label>
<span class="screen-reader-text">Search for:</span>
<input type="search" class="search-field" placeholder="Search...">
</label>
<button type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
<section class="widget widget_zovio_posts_thumb">
<h3 class="widget-title">Other Recipes</h3>
<article class="item">
<a href="#" class="thumb">
<span class="fullimage cover bg1" role="img"></span>
</a>
<div class="info">
<time datetime="2020-06-30">June 30, 2020</time>
<h4 class="title usmall">
<a href="#">Labour Chardonnay Godiva Noodles</a>
</h4>
</div>
<div class="clear"></div>
</article>
<article class="item">
<a href="#" class="thumb">
<span class="fullimage cover bg2" role="img"></span>
</a>
<div class="info">
<time datetime="2020-06-30">June 30, 2020</time>
<h4 class="title usmall">
<a href="#">Godiba Choclates Choclates Labour Coffee</a>
</h4>
</div>
<div class="clear"></div>
</article>
<article class="item">
<a href="#" class="thumb">
<span class="fullimage cover bg3" role="img"></span>
</a>
<div class="info">
<time datetime="2020-06-30">June 30, 2020</time>
<h4 class="title usmall">
<a href="#">Labour Chardonnay Godiva Noodles</a>
</h4>
</div>
<div class="clear"></div>
</article>
<article class="item">
<a href="#" class="thumb">
<span class="fullimage cover bg4" role="img"></span>
</a>
<div class="info">
<time datetime="2020-06-30">June 30, 2020</time>
<h4 class="title usmall">
<a href="#">Labour Chardonnay Godiva Shawarma</a>
</h4>
</div>
<div class="clear"></div>
</article>
<article class="item">
<a href="#" class="thumb">
<span class="fullimage cover bg5" role="img"></span>
</a>
<div class="info">
<time datetime="2020-06-30">June 30, 2020</time>
<h4 class="title usmall">
<a href="#">Labour Chardonnay Godiva Pizza</a>
</h4>
</div>
<div class="clear"></div>
</article>
</section>




</aside>
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

<!-- Mirrored from templates.envytheme.com/asahi/default/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Dec 2020 12:36:10 GMT -->
</html>