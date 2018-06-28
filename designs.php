<?php 
/** Set flag that this is a parent file */
define( "MAIN", 1 );

//require connection to the database
require('conn.php');

	/* PAGE HITS LOGGER */
	$page_id = 5;
	include('page-logger.php');
	/* PAGE HITS LOGGER */

require('header.php'); 
?>

<div class="top_nav">
	<div class="top_nav_link">
		<li><a href='index.php'><i class="fa fa-fw fa-home"></i>&nbsp;HOME</a></li>
		<li><a href='contact.php'><i class="fa fa-fw fa-user"></i>&nbsp;CONTACT US</a></li>
		<li><a href='download.php'><i class="fa fa-fw fa-gift"></i>&nbsp;DOWNLOADABLES</a></li>
		<li><a href='news.php'><i class="fa fa-fw fa-bullhorn"></i>&nbsp;NEWS & UPDATES</a></li>
		<li><a href='designs.php' class='active'><i class="fa fa-fw fa-certificate"></i>&nbsp;APPROVED PROTOTYPE DESIGNS</a></li>	
		<li><a href='events.php' class="blink"><i class="fa fa-fw fa-book"></i>&nbsp;EVENTS</a></li>	
	</div>	
</div>

<div class="crumb">&nbsp;</div>

<div class="container container-fluid mb-5">
	<div class="row">
	<div class="col-8">
			<!-- <div class="panel_header bsi_theme"><h2>Approved Designs for Backdrop and Baller</h2></div>
			<hr> -->
	<!-- <div class="card-columns"></div> -->
	<div class="card-columns">	
		<?php
		$query = " SELECT * FROM `designs` WHERE `disable_flag` = 0  ORDER BY `id` ASC";
		$result = mysql_query($query);
		while($row = mysql_fetch_array($result)){
			$img_src = $row['img_src'];
			$title = $row['title'];
			$div = '
			<div class="card text-light bg-dark mb-3">
			  <img class="card-img-top" src="'.$img_src.'" alt="Card image cap">
			  <div class="card-body">
			  	<hr>
			  	<h5><i class="fa fa-fw fa-certificate"></i>&nbsp;'.$title.'</h5>
			  </div>
			</div>

			';
			echo $div;
		}
		?>
	</div>
		
		
	</div>
	<div class="col-4">
		<?php include('aside.php'); ?>
	</div>
		
</div><!-- end row -->

<div class="col-12 mt-4">
	<div class="alert alert-dark text-center" role="alert">
	To download the designs, click this link:&nbsp;
	<a href="images/prototype_designs/designs.zip">Download WBDD 2016 Approved Prototype Designs</a>
	</div>
</div>

</div><!-- end div container -->


	<!-- java scripts -->

<?php require('footer.php'); ?>