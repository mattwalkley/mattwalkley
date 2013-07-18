<?php
	date_default_timezone_set('America/New_York');
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <meta name="apple-mobile-web-app-capable" content="yes">
   <link rel="shortcut icon" href="favicon.png">

   <title><?php echo $title; ?> | Web creator. Designer. Front-end developer.</title>
  
   <!-- CSS -->
   <link rel="stylesheet" href="assets/css/style.css">
   
   <!-- FONTS -->
   <link href='http://fonts.googleapis.com/css?family=Droid+Serif|Montserrat' rel='stylesheet' type='text/css'>

   <script src="assets/js/modernizr-2.6.1.min.js"></script>

   <!-- IE Fix for HTML5 Tags -->
   <!--[if lt IE 9]>
	   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <![endif]-->

</head>
<body>

	<div class="wrapper">
		<a href="#" id="hamburgers">
			<div class="small-logo"><img src="assets/images/layout/icon-matt-walkley-small.png"></div><span class="name">Matt Walkley</span> <span class="icon-menu"></span>
		</a>
		<div id="sidebar"></div>
		<header id="header">
			<a href="index" id="logo"><img src="assets/images/layout/logo-matt-walkley.png" alt="logo-matt-walkley" /></a>
			<nav>
				<ul class="navigation">
					<li<?php if ($page == 'home') { echo ' class="active"'; } ?> id="home"><a href="index">Home</a></li>
					<li<?php if ($page == 'about') { echo ' class="active"'; } ?>><a href="about">About Me</a></li>
					<li<?php if ($page == 'portfolio') { echo ' class="active"'; } ?>><a href="portfolio">Portfolio</a></li>
					<li<?php if ($page == 'resume') { echo ' class="active"'; } ?>><a href="resume">Resumé</a></li>
					<li<?php if ($page == 'contact') { echo ' class="active"'; } ?>><a href="contact">Contact</a></li>
				</ul>
			</nav>
			<aside>I'm a web creator looking to join a talented team in the Nashville area. Over the past 8 years I've learned a lot and I’m excited for new opportunities to make amazing products for the web. <br /><a href="contact">Let's work together</a></aside>
			
			<ul class="beheaded-folk">
				<li><img src="assets/images/layout/headshot-1.jpg"></li>
			</ul>
		</header>