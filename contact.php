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

<title>Gilroy Saladmaster® - Contact</title>
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
<h2>Contact</h2>
<ul>
<li>
<a href="index.html">
Home
<i class="fa fa-chevron-right"></i>
</a>
</li>
<li>Contact</li>
</ul>
</div>
</div>
</div>


<section class="contact-area ptb-100">
<div class="container">
<div class="section-title">
<h2>Drop us message for any query</h2>
<p>If you have an idea, we would love to hear about it.</p>
</div>
<div class="row">
<div class="col-lg-7 col-md-12">
<div class="contact-form">
<form id="contactForm">
<div class="row">
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<button type="submit" class="default-btn btn-two">
<span class="label">Send Message</span>
<i class="flaticon-right-arrow-forward"></i>
</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>
<div class="col-lg-5 col-md-12">
<div class="contact-info">
<ul>
<li>
<div class="icon">
<i class="fa fa-map-marker"></i>
</div>
<span>Address</span>
Gilroy, CA 95020
</li>
<li>
<div class="icon">
<i class="fa fa-envelope"></i>
</div>
<span>Email</span>
<a href="#">casysgilroy@gmail.com</a>

</li>
<li>
<div class="icon">
<i class="fa fa-phone"></i>
</div>
<span>Phone</span>
<a href="#">+1 408-767-2816</a>
</li>
</ul>
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
  $('#contact').addClass('active');
});
</script>
</body>
</html>