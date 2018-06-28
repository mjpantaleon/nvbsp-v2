<?php 
/** Set flag that this is a parent file */
define( "MAIN", 1 );

//require connection to the database
require('conn.php');

	/* PAGE HITS LOGGER */
	$page_id = 3;
	include('page-logger.php');
	/* PAGE HITS LOGGER */

require('header.php'); 
?>

<div class="top_nav">
	<div class="top_nav_link">
		<li><a href='index.php'><i class="fa fa-fw fa-home"></i>&nbsp;HOME</a></li>
		<li><a href='contact.php'><i class="fa fa-fw fa-user"></i>&nbsp;CONTACT US</a></li>
		<li><a href='download.php' class='active'><i class="fa fa-fw fa-gift"></i>&nbsp;DOWNLOADABLES</a></li>
		<li><a href='news.php'><i class="fa fa-fw fa-bullhorn"></i>&nbsp;NEWS & UPDATES</a></li>
		<li><a href='designs.php'><i class="fa fa-fw fa-certificate"></i>&nbsp;APPROVED PROTOTYPE DESIGNS</a></li>	
		<li><a href='events.php' class="blink"><i class="fa fa-fw fa-book"></i>&nbsp;EVENTS</a></li>	
	</div>	
</div>

<div class="crumb">&nbsp;</div>

<div class="container container-fluid mb-5">
	<div class="row">
		<div class="col-8">
			<div class="card-columns">
				<?php 
				$query = " SELECT * FROM `downloadables` WHERE `disable_flag` = 0	";
				$result = mysql_query($query);
				while($row = mysql_fetch_array($result)){
					$type = $row['type'];
					$link = $row['link'];

					$div = '
					<div class="card text-white bg-light back mb-5" style="width: 240px;">
					  <div class="card-body">
					    <h4 class="card-title bsi_theme"><i class="fa fa-gift"></i>&nbsp;'.$type.'</h4>
					    
					  </div>
					  <div class="card-footer">
					    <a href="'.$link.'" class="btn btn-danger"><i class="fa fa-download"></i>&nbsp;DOWNLOAD</a>
					  </div>
					</div>	
					';
					echo $div;
				}
				?>
			</div><!-- end card columns -->
		</div>
		<div class="col-4">
			<?php include('aside.php'); ?>
		</div>
	</div>
</div><!-- end div container -->


	<!-- java scripts -->

<?php require('footer.php'); ?>