<?php
/** Set flag that this is a parent file */
define( "MAIN", 1 );

//require connection to the database
require('conn.php');

require('header.php'); 
	
	$msg = '';
	$valid = true;

	if(isset($_POST['cmdAdd'])){

	$banner = $_FILES['fileUpload'];
	$title = trim(mysql_real_escape_string($_POST['txtTitle']));
	$description = trim(mysql_real_escape_string($_POST['txtDescription']));
	#exit(var_dump($description));
	/* ----------------------------------------------------- */
	$Month = $_POST['cmbMonth'];
	$Day = $_POST['cmbDay'];
	$Year = $_POST['cmbYear'];
	$countdown = $Year.'-'.$Month.'-'.$Day;

	$FileName	=	$_FILES['fileUpload']['name'];
	$Temp 		=	$_FILES['fileUpload']['tmp_name'];
	$Path		= 'images/events/'.$FileName;
	#var_dump($FileName);

		if($banner == ''){
			$valid = false;
			$msg = '
			<div class="alert alert-danger" role="alert">
			Ooops! File is empty. Please select file to upload.
			</div>
			';
		}elseif($title == ''){
			$valid = false;
			$msg = '
			<div class="alert alert-danger" role="alert">
			Title is Left empty. Please Enter the Title.
			</div>
			';
		}elseif($description == ''){
			$valid = false;
			$msg = '
			<div class="alert alert-danger" role="alert">
			Description is Left empty. Please Enter the Description.
			</div>
			';
		}
		if($valid == true){

			$FileName	=	$_FILES['fileUpload']['name'];
			$Temp 		=	$_FILES['fileUpload']['tmp_name'];
			$Path		= 'images/events/'.$FileName;
			#var_dump($Path);
			mysql_query("INSERT INTO `events` SET
						`banner` 		= '".$Path."',
						`title` 		= '".$title."',
						`description` 	= '".$description."',
						`countdown` 	= '".$countdown."',
						`created_date` 	= '".$dateTime."',
						`disable_flag` 	= 0 ")
			or die(mysql_error());
			move_uploaded_file($Temp,$Path);

			$msg = '
			<div class="alert alert-success" role="alert">
				<i class="fa fa-fw fa-check-circle"></i>&nbsp;New Event has been successfully added!
			</div>
			';
		}
	}/* end if button upload has been detected */
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

<div class="container mb-5">
	<div class="col-12 text-center display-4">
		<?php echo $msg; ?>
	</div> 

	<div class="card bg-warning mb-5">
		
		<div class="col-12 bg-light">
			 <h5 class="card-title display-4  col-12"><i class="fa fa-fw fa-book"></i>&nbsp;ADD EVENTS</h5>
		</div>

		<form method="POST" action="#" enctype="multipart/form-data">
	    <div class="card-body bg-light">
	    	<div class="col-12">
	    		<!-- FILE UPLOAD -->
	    		
				<div class="input-group input-group-sm mb-4">
				   <div class="form-group col-12">
				    <label for="exampleInputFile">BANNER SPECS (1200x315px)</label>
				    <input type="file" name="fileUpload" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" required>
				  </div>
				</div>
	    		<!-- FILE UPLOAD -->


	    		<!-- TITLE -->
	    		<div class="input-group mb-4 col-12">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-sm">TITLE</span>
				  </div>
				  <input type="text" name="txtTitle" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
				</div>
	    		<!-- TITLE -->

	    		<!-- DESCRIPTION -->
	    		<div class="input-group input-group-sm mb-4 col-12">
				  <div class="input-group-prepend">
				    <span class="input-group-text">DESCRIPTION</span>
				  </div>
				  <textarea class="form-control" name="txtDescription" rows="10" aria-label="With textarea" required></textarea>
				</div>
	    		<!-- DESCRIPTION -->

	    		<!-- SET COUNTDOWN -->
	    		<div class="row input-group input-group-sm mb-3 col-12">
					<div class="col-sm-3">
				      <select class="custom-select mr-sm-2" name="cmbMonth" id="inlineFormCustomSelect" required>
				        <option value="">Month</option>
				        <option value="1">January</option>
				        <option value="2">February</option>
				        <option value="3">March</option>
				        <option value="4">April</option>
				        <option value="5">May</option>
				        <option value="6">June</option>
				        <option value="7">July</option>
				        <option value="8">August</option>
				        <option value="9">September</option>
				        <option value="10">October</option>
				        <option value="11">November</option>
				        <option value="12">December</option>
				      </select>
				    </div>

				    <div class="col-sm-3">
				      <select class="custom-select mr-sm-2" name="cmbDay" id="inlineFormCustomSelect" required>
				        <option value="">Day</option>
				        <option value="1">1</option>
				        <option value="2">2</option>
				        <option value="3">3</option>
				        <option value="4">4</option>
				        <option value="5">5</option>
				        <option value="6">6</option>
				        <option value="7">7</option>
				        <option value="8">8</option>
				        <option value="9">9</option>
				        <option value="10">10</option>
				        <option value="11">11</option>
				        <option value="12">12</option>
				        <option value="13">13</option>
				        <option value="14">14</option>
				        <option value="15">15</option>
				        <option value="16">16</option>
				        <option value="17">17</option>
				        <option value="18">18</option>
				        <option value="19">19</option>
				        <option value="20">20</option>
				        <option value="21">21</option>
				        <option value="22">22</option>
				        <option value="23">23</option>
				        <option value="24">24</option>
				        <option value="25">25</option>
				        <option value="26">26</option>
				        <option value="27">27</option>
				        <option value="28">28</option>
				        <option value="29">29</option>
				        <option value="30">30</option>
				        <option value="31">31</option>
				      </select>
				    </div>

				    <div class="col-sm-3">
				      <select class="custom-select mr-sm-2" name="cmbYear" id="inlineFormCustomSelect" required>
				        <option value="">Year</option>
				        <option value="2018">2018</option>
				        <option value="2019">2019</option>
				        <option value="2020">2020</option>
				        <option value="2021">2021</option>
				        <option value="2022">2022</option>
				      </select>
				    </div>
				</div>
	    		<!-- SET COUNTDOWN -->

	    	</div>	<!-- div col-12 -->	
	    </div><!-- card-body -->

	    <div class="card-footer">
	      <button name="cmdAdd" class="btn btn-primary"><i class="fa fa-fw fa-book"></i>&nbsp;ADD NEW EVENT</button>
	    </div>
	    </form>

	</div><!-- div card -->

</div><!-- end container -->

<!-- java scripts -->

<?php require('footer.php'); ?>