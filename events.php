<?php
/** Set flag that this is a parent file */
define( "MAIN", 1 );

//require connection to the database
require('conn.php');

	/* PAGE HITS LOGGER */
	$page_id = 6;
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
		<li><a href='designs.php'><i class="fa fa-fw fa-certificate"></i>&nbsp;APPROVED PROTOTYPE DESIGNS</a></li>	
		<li><a href='events.php' class="active"><i class="fa fa-fw fa-book"></i>&nbsp;EVENTS</a></li>	
	</div>	
</div>

<div class="crumb">&nbsp;</div>

<div class="container mt-5">
	<?php
	/*
				SELECT a.*, SUM(b.`will_attend`) as participants, b.`signup_date` 
				FROM `events` a 
				INNER JOIN `events_participants` b ON a.`id` = b.`event_id`
				WHERE `disable_flag` = 0  
				ORDER BY `countdown` DESC 
	*/
	$query = "	SELECT * 
				FROM `events` 
				WHERE `disable_flag` = 0  
				ORDER BY `countdown` ASC ";
	$result = mysql_query($query);
	while($row = mysql_fetch_array($result)){
		$id = $row['id'];
		$banner = $row['banner'];
		$title 	= $row['title'];
		$description = $row['description'];
		$date = $row['countdown'];
		$created_date = $row['created_date'];
		/* format date of countdown */
		$countdown = explode('-', $date);
		$year = $countdown[0];
		$month   = $countdown[1];
		$day  = $countdown[2];

		
		/* from events_participants table*/
		#$participants = $row['participants'];
		#$signup_date = $row['signup_date'];

		/*
		<div class="participants">
			<p><i class="fa fa-fw fa-user"></i>&nbsp;Number of participants ('.$participants.') 
			- as of '.date("F d, Y - (D)",strtotime($signup_date)).'  </p>
		</div>
		*/

		$div = '

		<div class="banner">
			<img src="'.$banner.'">
			<div class="title">
				<h2>'.$title.' @ '.date("F d, Y - (D)",strtotime($date)).'</h2>
				<p>posted last '.date("F d, Y - (D)",strtotime($created_date)).'</p>
			</div>
			<div class="ml-3 mt-3">
				<a href="events-signup.php?id='.$id.'" class="btn btn-primary btn-sm">
					<i class="fa fa-fw fa-pencil"></i>&nbsp;SIGN UP FOR THIS EVENT
				</a>
			</div>
			<div class="description">
				<p>'.nl2br($description).'</p>
			</div>
			
			<div class="deadline">
				<h5>COUNTDOWN</h5>
				<script type="application/javascript">
					var myCountdownTest = new Countdown({
					year: '.$year.',
					month	: '.$month.', 
					day		: '.$day.',
					width	: 300, 
					height	: 50
					});
				
				</script>
			</div>	 
		</div>

		<div class="row">&nbsp;</div>
		';

		echo $div;
	}

	?>
</div><!-- end container -->

<!-- java scripts -->
<script type="text/javascript">
	$(function () {
	  $('[data-toggle="popover"]').popover()
	})
</script>
<?php require('footer.php'); ?>