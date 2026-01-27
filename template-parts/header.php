<?php 
include("init/database.php");
include("init/main-functions.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
	<script src="assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<script src="assets/js/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">



	<link rel="stylesheet" href="assets/style.css" />
	<!-- <link href="assets/main.css" rel="stylesheet" crossorigin="anonymous"> -->



	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<meta name="description" content="<?=$description;?>" />
	<meta name="author" content="<?=$author;?>" />
	<title><?=$pagetitle;?></title>



  
</head>
<body>

<header class="navbar">
  


  <nav class="navbar navbar-expand-lg navbar-dark blog-navbar">
	  <div class="container">
	    <a class="navbar-brand fw-bold" href="#">
	      <div class="logo">
			    <img src="assets/img/logoipsum-410.png" class="site-logo" alt="Virtual Dominance Logo">
			  </div>
	    </a>

	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#blogNav">
	      <span class="navbar-toggler-icon"></span>
	    </button>

	    <div class="collapse navbar-collapse" id="blogNav">
	      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-lg-3">
	        <li class="nav-item">
	          <a class="nav-link " href="<?php echo $base_url; ?>">
	            <i class="fa-solid fa-house me-1"></i> Home
	          </a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="<?php echo $base_url; ?>/blog.php">
	            <i class="fa-regular fa-newspaper me-1"></i> Blogs
	          </a>
	        </li>


	        <li class="nav-item nav-cta">
					  <a class="nav-link cta-link" href="<?php echo $base_url; ?>#contactForm">
					    Contact Us
					  </a>
					</li>




	      </ul>
	    </div>
	  </div>
	</nav>
  
</header>