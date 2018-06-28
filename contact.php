<?php 
/** Set flag that this is a parent file */
define( "MAIN", 1 );

//require connection to the database
require('conn.php');

	/* PAGE HITS LOGGER */
	$page_id = 2;
	include('page-logger.php');
	/* PAGE HITS LOGGER */

require('header.php'); 
?>

<div class="top_nav">
	<div class="top_nav_link">
		<li><a href='index.php'><i class="fa fa-fw fa-home"></i>&nbsp;HOME</a></li>
		<li><a href='contact.php' class='active'><i class="fa fa-fw fa-user"></i>&nbsp;CONTACT US</a></li>
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
		
		<div class="card bg-light mb-4">
		  <div class="card-body">
		    <h2 class="card-title bsi_theme">Contact Us</h2>
		    <hr>
		     <p class="card-text">
		    	NVBSP Admin <br>
		    	<span class="italic"><i class="fa fa-phone"></i>&nbsp;(02) 995 - 3846 local 213</span>
		    </p>
		    <p class="card-text">
		    	Info. Management Unit (IMU)<br>
		    	<span class="italic"><i class="fa fa-phone"></i>&nbsp;(02) 995 - 3846 local 214</span>
		    </p>
		  </div>
		  <div class="card-footer"></div>
		</div>

		<div class="card bg-light">
		  <div class="card-body">
		    <h2 class="card-title bsi_theme">Email Us</h2>
		    <hr>
		    <p class="card-text">
		    	NVBSP <br>
		    	<span class="italic"><i class="fa fa-envelope"></i>&nbsp;nvbsp.doh@gmail.com</span>
		    </p>
		    <p class="card-text">
		    	BSI concerns <br>
		    	<span class="italic"><i class="fa fa-envelope"></i>&nbsp;bsi@nbbnets.net</span>
		    </p>
		    <p class="card-text">
		    	NBBNetS/Transfusion/R3/others<br>
		    	<span class="italic"><i class="fa fa-envelope"></i>&nbsp;support@nbbnets.net</span>
		    </p>
		  </div>
		  <div class="card-footer"></div>
		</div>
		
		
	</div>
	<div class="col-4">
		<?php include('aside.php'); ?>
	</div>
		
</div><!-- end row -->

</div><!-- end div container -->


	<!-- java scripts -->

<?php require('footer.php'); ?>