<?php
/** Set flag that this is a parent file */
define( "MAIN", 1 );

//require connection to the database
require('conn.php');

	/* PAGE HITS LOGGER */
	$page_id = 7; #event signup page
	include('page-logger.php');
	/* PAGE HITS LOGGER */



	$event_id = $_REQUEST['id'];
	$msg = '';

	if(isset($_POST['cmdSignup'])){
		$first_name 	= trim(mysql_real_escape_string($_POST['txtFN']));
		$middle_name 	= trim(mysql_real_escape_string($_POST['txtMN']));
		$last_name 		= trim(mysql_real_escape_string($_POST['txtLN']));

		$institution 	= trim(mysql_real_escape_string($_POST['txtInstute']));
		$email 			= trim(mysql_real_escape_string($_POST['txtEmail']));
		$contact_num	= trim(mysql_real_escape_string($_POST['txtContactNum']));
		$will_attend 	= isset($_POST['check1'])*1;

		$success_msg = 'You have successfully signed-up for this event!';
		$valid = true;

		if ($first_name == '') {
			$valid = false;
			$msg = '
			<div class="alert alert-danger" role="alert">
			  <i class="fa fa-fw fa-exclamation-circle"></i>&nbsp;
			  Oopps! First name is left empty.
			</div>
			';
		}elseif ($middle_name == '') {
			$valid = false;
			$msg = '
			<div class="alert alert-danger" role="alert">
			  <i class="fa fa-fw fa-exclamation-circle"></i>&nbsp;
			  Oopps! Middle name is left empty.
			</div>
			';
		}elseif ($last_name == '') {
			$valid = false;
			$msg = '
			<div class="alert alert-danger" role="alert">
			  <i class="fa fa-fw fa-exclamation-circle"></i>&nbsp;
			  Oopps! Last name is left empty.
			</div>
			';
		}elseif ($institution == '') {
			$valid = false;
			$msg = '
			<div class="alert alert-danger" role="alert">
			  <i class="fa fa-fw fa-exclamation-circle"></i>&nbsp;
			  Oopps! Name of Institution is left empty.
			</div>
			';
		}elseif ($email == '') {
			$valid = false;
			$msg = '
			<div class="alert alert-danger" role="alert">
			  <i class="fa fa-fw fa-exclamation-circle"></i>&nbsp;
			  Oopps! Email address is left empty.
			</div>
			';
		}elseif ($contact_num == '') {
			$valid = false;
			$msg = '
			<div class="alert alert-danger" role="alert">
			  <i class="fa fa-fw fa-exclamation-circle"></i>&nbsp;
			  Oopps! Contact number is left empty.
			</div>
			';
		}elseif ($will_attend == '') {
			$valid = false;
			$msg = '
			<div class="alert alert-danger" role="alert">
			  <i class="fa fa-fw fa-exclamation-circle"></i>&nbsp;
			  Oopps! Please confirm that you are attending by clicking the checkbox.
			</div>
			';
		}

		if($valid == true){
			mysql_query("	INSERT INTO `events_participants` SET
							`event_id` = '".$event_id."',
							`first_name` = '".$first_name."',
							`middle_name` = '".$middle_name."',
							`last_name` = '".$last_name."',
							`institution` = '".$institution."',
							`contact_num` = '".$contact_num."',
							`email` = '".$email."',
							`will_attend` = '".$will_attend."',
							`signup_date` = '".$dateTime."',
							`ip` = '".$ip_address."' ")
			or die(mysql_error());


			$msg = '
			<div class="alert alert-success" role="alert">
			  <i class="fa fa-fw fa-check-circle"></i>&nbsp;'.$success_msg.'
			</div>
			';
		}
	}

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

<div class="container container-fluid mt-5">
	<div class="col-12 text-center display-4">
		<?php echo $msg; ?>
	</div> 
	<?php
	$query = "	SELECT * FROM `events` WHERE `id` = ".$event_id."
				ORDER BY `countdown` DESC ";
	$result = mysql_query($query) or die(mysql_errno());
	$row = mysql_fetch_array($result);
	?>	
	<div class="card bg-warning mb-5">
		<img src="<?php echo $row['banner']; ?>"> 

		<div class="col-12 bg-light">
			<div class="display-3 col-12 bsi_theme text-center">	
				<?php  echo $row['title']; ?>
			</div>
			<div class="col-12 mb-5 text-center">
				<h5 class="display-4 text-muted"><?php  echo date("F d, Y - (D)",strtotime($row['countdown'])); ?></h3>
			</div>
		</div>

		<div class="col-12 bg-light">
			 <h5 class="card-title col-12">SIGN-UP FOR THIS EVENT</h5>
		</div>
		<form method="POST">
	    <div class="card-body bg-light">
	    	<div class="row">
		    	<div class="col-8">

		    		<!-- FIRST/ MIDDLE/ LAST NAME -->
		    		<div class="input-group mb-4 col-12">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id=""><i class="fa fa-fw fa-user"></i>&nbsp;</span>
					  </div>
					  <input type="text" name="txtFN" class="form-control" placeholder="First name" required>
					  <input type="text" name="txtMN" class="form-control" placeholder="Middle name" required>
					  <input type="text" name="txtLN" class="form-control" placeholder="Last name" required>
					</div>
		    		<!-- FIRST/ MIDDLE/ LAST NAME -->

		    		<!-- INSTITUTION -->
					<div class="input-group mb-4 col-12">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id=""><i class="fa fa-fw fa-university"></i>&nbsp;</span>
					  </div>
					  <input type="text" name="txtInstute" class="form-control" placeholder="Name of Institution" required>
					</div>
		    		<!-- INSTITUTION -->

		    		<!-- EMAIL ADDRESS -->
					<div class="input-group mb-4 col-12">
					  <div class="input-group-prepend">
					    <span class="input-group-text"><i class="fa fa-fw fa-envelope"></i>&nbsp;</span>
					  </div>
					  <input type="email" name="txtEmail" class="form-control" placeholder="e-mail address" aria-label="email" required>
					</div>
		    		<!-- EMAIL ADDRESS -->

		    		<!-- CONTACT # -->
		    		<div class="input-group mb-4 col-12">
					  <div class="input-group-prepend">
					    <span class="input-group-text"><i class="fa fa-fw fa-tty"></i>&nbsp;</span>
					  </div>
					  <input type="text" name="txtContactNum" class="form-control" placeholder="contact number" aria-label="contact #" required>
					</div>
		    		<!-- CONTACT # -->

		    		<!-- WILL ATTEND BOX -->
					<div class="input-group mb-4 col-12">
					  <div class="input-group-prepend">
					    <div class="input-group-text">
					      <input type="checkbox" name="check1" value="1" aria-label="Checkbox" required>
					    </div>
					  </div>
					  <label class="italic">&nbsp;
					  By clicking the checkbox, you are confirming that you are participating in this event.</label>
					</div>
		    		<!-- WILL ATTEND BOX -->
		    	</div><!-- div col-12 -->

		    	<div class="col-4">
		    		<!-- GET THE TOTAL NUMBER OF PARTIPANTS -->
		    		<?php
		    		$query = " 	SELECT SUM(`will_attend`) as participants, `signup_date`
		    					FROM `events_participants`
		    					WHERE `event_id` = '".$event_id."' ";
		    		$result = mysql_query($query) or die(mysql_error());
		    		while($row = mysql_fetch_assoc($result)){
		    			$total_participants = $row['participants'];
		    			$as_of = $row['signup_date'];
		    		};

		    		
		    		?>
		    		<div class="card bg-info" style="width: 18rem;">
					  <div class="card-body">
					    <h5 class="card-title display-1 text-center text-light">
					    	<?php echo number_format($total_participants); ?>
					    </h5>
					    <p class="card-text lead text-center text-light">
					    	<i class="fa fa-fw fa-user"></i>&nbsp; Current number of Participants in this event
					    </p>
					  </div>
					  <div class="card-footer text-center">
					  <span>as of <?php  echo date("F d, Y - (D)",strtotime($as_of)); ?></span>
					  </div>
					</div>
		    	</div>		
	    	</div>
	    </div><!-- card-body -->

	    <div class="card-footer">
	      <button name="cmdSignup" class="btn btn-primary mr-2"><i class="fa fa-fw fa-user"></i>&nbsp;SIGN ME UP</button>
	      <a href="events.php" class="btn btn-danger"><i class="fa fa-fw fa-reply"></i>&nbsp;BACK TO EVENTS</a>
	    </div>
	    </form>

	</div>

	  
</div><!-- end container -->

<!-- java scripts -->

<?php require('footer.php'); ?>