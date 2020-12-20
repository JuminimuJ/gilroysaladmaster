<?php
date_default_timezone_set('Asia/Manila');

include('db/conn.php');


$blog_sql = "SELECT * FROM `page_blog` WHERE `id`='$_GET[blog_id]'";
$blog_query = $conn->query($blog_sql);

$row = $blog_query->fetch_array();
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
<?php echo $row[4];?>
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

<p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quia non numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur adipisicing.</p>
<ul class="wp-block-gallery columns-3">
<li class="blocks-gallery-item">
<figure>
<img src="assets/img/blog-details/7.jpg" alt="image">
</figure>
</li>
<li class="blocks-gallery-item">
<figure>
<img src="assets/img/blog-details/8.jpg" alt="image">
</figure>
</li>
<li class="blocks-gallery-item">
<figure>
<img src="assets/img/blog-details/9.jpg" alt="image">
</figure>
</li>
</ul>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
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
<div class="comments-area">
<h3 class="comments-title">2 Comments:</h3>
<ol class="comment-list">
<li class="comment">
<div class="comment-body">
<footer class="comment-meta">
<div class="comment-author vcard">
<img src="assets/img/blog-details/11.jpg" class="avatar" alt="image">
<b class="fn">John Jones</b>
<span class="says">says:</span>
</div>
<div class="comment-metadata">
<a href="#">
<span>April 24, 2020 at 10:59 am</span>
</a>
</div>
</footer>
<div class="comment-content">
<p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
</div>
<div class="reply">
<a href="#" class="comment-reply-link">Reply</a>
</div>
</div>
<ol class="children">
<li class="comment">
<div class="comment-body">
<footer class="comment-meta">
<div class="comment-author vcard">
<img src="assets/img/blog-details/10.jpg" class="avatar" alt="image">
<b class="fn">Steven Smith</b>
<span class="says">says:</span>
</div>
<div class="comment-metadata">
<a href="#">
<span>April 24, 2020 at 10:59 am</span>
</a>
</div>
</footer>
<div class="comment-content">
<p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
</div>
<div class="reply">
<a href="#" class="comment-reply-link">Reply</a>
</div>
</div>
</li>
</ol>
</li>
<li class="comment">
<div class="comment-body">
<footer class="comment-meta">
<div class="comment-author vcard">
<img src="assets/img/blog-details/12.jpg" class="avatar" alt="image">
<b class="fn">John Doe</b>
<span class="says">says:</span>
</div>
<div class="comment-metadata">
<a href="#">
<span>April 24, 2020 at 10:59 am</span>
</a>
</div>
</footer>
<div class="comment-content">
<p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
</div>
<div class="reply">
<a href="#" class="comment-reply-link">Reply</a>
</div>
</div>
</li>
</ol>
<div class="comment-respond">
<h3 class="comment-reply-title">Leave a Reply</h3>
<form class="comment-form">
<p class="comment-notes">
<span id="email-notes">Your email address will not be published.</span>
Required fields are marked
<span class="required">*</span>
</p>
<p class="comment-form-comment">
<label>Comment</label>
<textarea name="comment" id="comment" cols="45" rows="5" maxlength="65525" required="required"></textarea>
</p>
<p class="comment-form-author">
<label>Name <span class="required">*</span></label>
<input type="text" id="author" name="author" required="required">
</p>
<p class="comment-form-email">
<label>Email <span class="required">*</span></label>
<input type="email" id="email" name="email" required="required">
</p>

<p class="form-submit">
<input type="submit" name="submit" id="submit" class="submit" value="Post A Comment">
</p>
</form>
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
<h3 class="widget-title">Popular Posts</h3>
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
<section class="widget widget_categories">
<h3 class="widget-title">Archives</h3>
<ul>
<li><a href="#">May 2020</a></li>
<li><a href="#">April 2020</a></li>
<li><a href="#">June 2020</a></li>
<li><a href="#">julay 2020</a></li>
</ul>
</section>
<section class="widget widget_categories">
<h3 class="widget-title">Categories</h3>
<ul>
<li><a href="#">Pizza (10)</a></li>
<li><a href="#">Pasty (20)</a></li>
<li><a href="#">Shawarma (10)</a></li>
<li><a href="#">Pasta (12)</a></li>
<li><a href="#">Noodles (16)</a></li>
<li><a href="#">Coffee (17)</a></li>
</ul>
</section>
<section class="widget widget_categories">
<h3 class="widget-title">Meta</h3>
<ul>
<li><a href="log-in.html">Log in</a></li>
<li><a href="#">Entries RSS</a></li>
<li><a href="#">Comments RSS</a></li>
<li><a href="#">WordPress.org</a></li>
</ul>
</section>
<section class="widget widget_tag_cloud">
<h3 class="widget-title">Tags</h3>
<div class="tagcloud">
<a href="#">Pizza</a>
<a href="#">Pasty</a>
<a href="#">Shawarma</a>
<a href="#">Pasta</a>
<a href="#">Noodles</a>
<a href="#">Desert</a>
<a href="#">Coffee</a>
<a href="#">Shawarma</a>
</div>
</section>
</aside>
</div>
</div>
</div>
</section>


<footer class="footer-area ptb-100-70">
<div class="container">
<div class="row">
<div class="col-lg-3 col-sm-6">
<div class="single-widget">
<a href="#">
<img src="assets/img/asahi-footer-logo.png" alt="Footer Logo">
</a>
<p>Sign up to our newsletter to get the latest food item news.</p>
<form class="subscribe newsletter-form" data-toggle="validator">
<label>
<input type="email" class="input-newsletter search-field" placeholder="Your email" name="EMAIL" required autocomplete="off">
</label>
<input type="submit" class="search-submit default-btn-2" value="Sbuscribe">
<div id="validator-newsletter" class="form-result"></div>
</form>
</div>
</div>
<div class="col-lg-2 col-sm-6">
<div class="single-widget single-widget-1">
<h3>USEFUL LINKS</h3>
<ul class="footer-menu">
<li>
<a href="hone-one.html">
<i class="flaticon-right-arrow-forward"></i>
Home
</a>
</li>
<li>
<a href="#">
<i class="flaticon-right-arrow-forward"></i>
About Us
</a>
</li>
<li>
<a href="#">
<i class="flaticon-right-arrow-forward"></i>
Blog Grid
</a>
</li>
<li>
<a href="contact.html">
<i class="flaticon-right-arrow-forward"></i>
Contact Us
</a>
</li>
<li>
<a href="#">
<i class="flaticon-right-arrow-forward"></i>
Privacy Policy
</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="single-widget single-widget-2">
<h3>ADDRESS</h3>
<ul>
<li class="address-s">
44 Canal Center Plaza #200, Alexandria, VA 22314, USA
</li>
<li><a href="#">Hotline: 1900 – 123 456 78</a></li>
<li><a href="#">Email: <span class="__cf_email__" data-cfemail="066775676e6f46616b676f6a2865696b">[email&#160;protected]</span></a></li>
<li><a href="#">Email: <span class="__cf_email__" data-cfemail="274e49414867425f464a574b420944484a">[email&#160;protected]</span></a></li>
</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single-widget">
<h3>OPENING HOURS</h3>
<ul>
<li class="footer-border">
Monday: <span>9.00 AM - 22.00 PM</span>
</li>
<li class="footer-border">
Tuesday: <span>9.00 PM - 22.00 AM</span>
</li>
<li class="footer-border">
Wednesday: <span>9.00 AM - 20.00 PM</span>
</li>
<li>
Thursday: <span>8.00 AM - 22.00 PM</span>
</li>
<li>
Friday: <span>9.00 AM - 22.00 PM</span>
</li>
</ul>
</div>
</div>
</div>
</div>
</footer>


<footer class="footer-bottom">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-3">
<ul class="social-list">
<li>
<a href="#">
<i class="fa fa-facebook"></i>
</a>
</li>
<li>
<a href="#">
<i class="fa fa-twitter"></i>
</a>
</li>
<li>
<a href="#">
<i class="fa fa-instagram"></i>
</a>
</li>
<li>
<a href="#">
<i class="fa fa-linkedin"></i>
</a>
</li>
<li>
<a href="#">
<i class="fa fa-youtube-play"></i>
</a>
</li>
</ul>
</div>
<div class="col-lg-4 col-md-6">
<div class="copy-right">
<p>
© 2020 All Rights Reserved-<a href="https://envytheme.com/">EnvyTheme</a>
</p>
</div>
</div>
<div class="col-lg-4 col-md-3">
<ul class="bank-card">
<li>
<a href="#">
<img src="assets/img/payment/1.png" alt="">
</a>
</li>
<li>
<a href="#">
<img src="assets/img/payment/2.png" alt="">
</a>
</li>
<li>
<a href="#">
<img src="assets/img/payment/3.png" alt="">
</a>
</li>
<li>
<a href="#">
<img src="assets/img/payment/4.png" alt="">
</a>
</li>
</ul>
</div>
</div>
</div>
</footer>


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


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.2.1.slim.min.js"></script>

<script src="assets/js/popper.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.meanmenu.js"></script>

<script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/owl.carousel.js"></script>

<script src="assets/js/bootstrap-datepicker.min.js"></script>

<script src="assets/js/imagelightbox.min.js"></script>

<script src="assets/js/jquery.appear.js"></script>

<script src="assets/js/odometer.min.js"></script>

<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/custom.js"></script>
</body>

<!-- Mirrored from templates.envytheme.com/asahi/default/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Dec 2020 12:36:10 GMT -->
</html>