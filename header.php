<?php 
	header('Content-Type: text/html; charset=ISO-8859-1');
?>

<!DOCTYPE html>
<html>
<head>
	<title>National Voluntary Blood Services Program (Version 2.0)</title>
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="countdown/countdown.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {

		  
		  var active1 = false;
		  var active2 = false;
		  var active3 = false;
		  var active4 = false;

		    $('.parent2').on('mousedown touchstart', function() {
		    
		    if (!active1) $(this).find('.test1').css({'background-color': 'gray', 'transform': 'translate(0px,125px)'});
		    else $(this).find('.test1').css({'background-color': 'dimGray', 'transform': 'none'}); 
		     if (!active2) $(this).find('.test2').css({'background-color': 'gray', 'transform': 'translate(60px,105px)'});
		    else $(this).find('.test2').css({'background-color': 'darkGray', 'transform': 'none'});
		      if (!active3) $(this).find('.test3').css({'background-color': 'gray', 'transform': 'translate(105px,60px)'});
		    else $(this).find('.test3').css({'background-color': 'silver', 'transform': 'none'});
		      if (!active4) $(this).find('.test4').css({'background-color': 'gray', 'transform': 'translate(125px,0px)'});
		    else $(this).find('.test4').css({'background-color': 'silver', 'transform': 'none'});
		    
		   
		    active1 = !active1;
		    active2 = !active2;
		    active3 = !active3;
		    active4 = !active4;
		      
		    });
		});
	</script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
		
	<style type="text/css">
	    body{
	        background: url("images/nvbsp_bg_img.png") no-repeat;
	        
	        background-position: center;
	        background-attachment: fixed;
	        background-size: cover;
	        background-color: #feebeb;
	    }
	</style>
</head>
<body>


<div class="parent2">
  <div class="test1"><a href="contact.php"><i class="fa fw fa-user fa-2x"></i></a></div>
  <div class="test2"><a href="download.php"><i class="fa fw fa-gift fa-2x"></i></a></div>
  <div class="test3"><a href="news.php"><i class="fa fw fa-bullhorn fa-2x"></i></a></div>
  <div class="test4"><a href="designs.php"><i class="fa fw fa-certificate fa-2x"></i></a></div>
  <div class="mask2"><i class="fa fa-flag fa-3x"></i></div>
</div>


<div class="fix-nav">
	<div class='nav_con'>	
		<span class='links'>
			<li><a href='http://www.doh.gov.ph' target='_blank' title='Visit Department of Health'>
				<i class="fa fa-fw fa-paper-plane"></i>&nbsp;DOH</a></li>
			<li><a href='http://www.nbbnets.net/' target='_blank' title='Visit NBBNetS website'>
				<i class="fa fa-fw fa-paper-plane"></i>&nbsp;NBBNETS</a></li>
			<li><a href='/bsi/public' target='_blank' title='Visit Blood Safety Indicator webssite'>
				<i class="fa fa-fw fa-paper-plane"></i>&nbsp;BSI</a></li>
			<li><a href='page-redirrect' target='_blank' title='Visit BSF Mapping'>
				<i class="fa fa-fw fa-paper-plane"></i>&nbsp;BSF MAPPING</a></li>
			<li><a href='privacy-policy.php' title='Visit Privacy Policy'>
				<i class="fa fa-fw fa-paper-plane"></i>&nbsp;PRIVACY POLICY</a></li>		
		</span>
	</div>	
</div>


<!-- top nav -->
<!-- <navbar class="navbar" style="background: url(images/nvbsp_text.png) no-repeat; !important">
	<div class="container container-fluid">
		<a href="index.php" class="navbar-brand"><img src="images/logos/NVBSP_LOGO.png" width="150" height="120"></a>
	</div>
</navbar> -->

<div class="top_logo" style="background: url(images/nvbsp_text.png) no-repeat; !important">
	<div class="col-md-12">
		<a href="index.php"><img src="images/logos/NVBSP_LOGO.png" width="150" height="120"></a>	
	</div>
</div>
<!-- top nav -->