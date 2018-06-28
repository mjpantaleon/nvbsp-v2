<?php 
/** Set flag that this is a parent file */
define( "MAIN", 1 );

//require connection to the database
require('conn.php');

require('header.php'); 
?>

<div class="top_nav">
	<div class="top_nav_link">
		<li><a href='index.php'><i class="fa fa-fw fa-home"></i>&nbsp;HOME</a></li>
		<li><a href='contact.php'><i class="fa fa-fw fa-user"></i>&nbsp;CONTACT US</a></li>
		<li><a href='download.php'><i class="fa fa-fw fa-gift"></i>&nbsp;DOWNLOADABLES</a></li>
		<li><a href='news.php'><i class="fa fa-fw fa-bullhorn"></i>&nbsp;NEWS & UPDATES</a></li>
		<li><a href='designs.php'><i class="fa fa-fw fa-certificate"></i>&nbsp;APPROVED PROTOTYPE DESIGNS</a></li>	
		<li><a href='events.php' class="blink"><i class="fa fa-fw fa-book"></i>&nbsp;EVENTS</a></li>	
	</div>	
</div>

<div class="crumb">&nbsp;</div>

<div class="container container-fluid mb-5">
	<div class="row">
	  <div class="col-8">
		<div class="jumbotron bg-light">
		  <h1 class="display-4 bsi_theme text-center">PRIVACY POLICY</h1><br>
		  <p class="lead" style="text-indent:50px;">
		  	This Privacy Policy descrbibes how National Voluntary Blood Services Program - 
		  	Information Management Unit (NVBSP-IMU) Protects and makes use of the information available to its 
		  	Websites and Information Systems.
		  	<br><br>
			If you are asked to provide, view, or request data for Information, Training, and Production use
			purposes, it will only be used in the ways described in this Privacy Policy.
			<br><br>
			This Policy is updated from time to time. The NVBSP websites Privacy Policy was updated on: 
			March 21, 2018. 
		  <hr>
		  <div class="text-center">
		  	<img src="images/logos/DOH_LOGO.png" width="120px" height="100px">&nbsp;
		  	<img src="images/logos/NVBSP_LOGO.png" width="120px" height="100px">
		  	<img src="images/logos/IMU_LOGO.png" width="120px" height="100px">
		  </div>
		</div>
	  </div><!-- end col 8 -->


	  <!-- ASIDE -->
	  <div class="col-4">
	  	<?php include('privacy-aside.php'); ?>
		
	  </div><!-- end col 4 -->
	  <!-- ASIDE -->
	</div><!--  end row -->

</div><!-- end div container -->


	<!-- java scripts -->

<?php require('footer.php'); ?>