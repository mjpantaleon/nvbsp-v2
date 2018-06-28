<?php 
/** Set flag that this is a parent file */
define( "MAIN", 1 );

//require connection to the database
require('conn.php');

	/* PAGE HITS LOGGER */
	$page_id = 4;
	include('page-logger.php');
	/* PAGE HITS LOGGER */

require('header.php'); 
?>

<div class="top_nav">
	<div class="top_nav_link">
		<li><a href='index.php'><i class="fa fa-fw fa-home"></i>&nbsp;HOME</a></li>
		<li><a href='contact.php'><i class="fa fa-fw fa-user"></i>&nbsp;CONTACT US</a></li>
		<li><a href='download.php'><i class="fa fa-fw fa-gift"></i>&nbsp;DOWNLOADABLES</a></li>
		<li><a href='news.php' class='active'><i class="fa fa-fw fa-bullhorn"></i>&nbsp;NEWS & UPDATES</a></li>
		<li><a href='designs.php'><i class="fa fa-fw fa-certificate"></i>&nbsp;APPROVED PROTOTYPE DESIGNS</a></li>	
		<li><a href='events.php' class="blink"><i class="fa fa-fw fa-book"></i>&nbsp;EVENTS</a></li>	
	</div>	
</div>

<div class="crumb">&nbsp;</div>

<div class="container mb-5">
	<div class="row">
		<div class="col-8">
		<?php 
		$query = " SELECT * FROM `news_updates` WHERE `disable_flag` = 0 ORDER BY `news_code` DESC ";
		$result = mysql_query($query);
		while($row = mysql_fetch_array($result)){
			$topic = $row['topic'];
			$content = $row['content'];

			$div = '
			<div class="card bg-light text-center mb-4">
			  <div class="card-body">
			    <h5 class="card-title bsi_theme"><i class="fa fa-bullhorn"></i>&nbsp;'.$topic.'</h5>
			    <p class="card-text" style="text-indent: 50px;">'.nl2br($content).'</p>
			  </div>
			  <div class="card-footer text-muted">
			   	you may contact us @ support@nbbnets.net
			  </div>
			</div>
			

				
			';

			echo $div;
		}

		?>
		</div>
		<!-- <div class="card mb-4">
			  <img class="card-img-top" src="" alt="Card image" alt="picture">
			  <div class="card-body">
			    <h2 class="card-title bsi_theme"></h2>
			    <hr>
			     <p class="card-text"></p>
			  </div>
			  <div class="card-footer"></div>
			</div>
		</div> -->
		<div class="col-4">
			<?php include('aside.php') ?>
		</div>
	</div><!-- end row -->
		

</div><!-- end div container -->


	<!-- java scripts -->

<?php require('footer.php'); ?>