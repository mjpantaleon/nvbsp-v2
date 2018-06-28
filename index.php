<?php 
/** Set flag that this is a parent file */
define( "MAIN", 1 );

//require connection to the database
require('conn.php');

/* PAGE HITS LOGGER */
$page_id = 1;
include('page-logger.php');
/* PAGE HITS LOGGER */

require('header.php'); 
?>

<div class="top_nav">
	<div class="top_nav_link">
		<li><a href='index.php' class='active'><i class="fa fa-fw fa-home"></i>&nbsp;HOME</a></li>
		<li><a href='contact.php'><i class="fa fa-fw fa-user"></i>&nbsp;CONTACT US</a></li>
		<li><a href='download.php'><i class="fa fa-fw fa-gift"></i>&nbsp;DOWNLOADABLES</a></li>
		<li><a href='news.php'><i class="fa fa-fw fa-bullhorn"></i>&nbsp;NEWS & UPDATES</a></li>
		<li><a href='designs.php'><i class="fa fa-fw fa-certificate"></i>&nbsp;APPROVED PROTOTYPE DESIGNS</a></li>	
		<li><a href='events.php' class="blink"><i class="fa fa-fw fa-book"></i>&nbsp;EVENTS</a></li>	
	</div>	
</div>



<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      	<img class="d-block w-100" src="images/carousel/1.png" alt="First slide">
		<div class="carousel-caption d-none d-md-block">
			<h5>&nbsp;</h5>
			<p><a href="#">JOIN NOW</a></p>
  		</div>
    </div>
    <div class="carousel-item">
      	<img class="d-block w-100" src="images/carousel/2.png" alt="Second slide">
      	<div class="carousel-caption d-none d-md-block">
			<h5>&nbsp;</h5>
			<p><a href="#">JOIN NOW</a></p>
  		</div>
    </div>
    <div class="carousel-item">
      	<img class="d-block w-100" src="images/carousel/3.png" alt="Third slide">
		<div class="carousel-caption d-none d-md-block">
			<h5>&nbsp;</h5>
			<p><a href="events.php">Check Event</a></p>
  		</div>
    </div>
    <div class="carousel-item">
      	<img class="d-block w-100" src="images/carousel/4.png" alt="fourth slide">
		<div class="carousel-caption d-none d-md-block">
			<h5>&nbsp;</h5>
			<p><a href="#">JOIN NOW</a></p>
  		</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="row">&nbsp;</div>

<div class="container container-fluid mb-5">
	<div class="row">
	  <div class="col-8">

	  	<div class="row">
		  	<div class="jumbotron" style="background:#FFF; !important">
			  <h1 class="display-4 bsi_theme">NATIONAL VOLUNTARY BLOOD SERVICES PROGRAM (NVBSP)</h1><br>
			  <p class="lead">
			  	<span class="bsi_theme">R.A. 7719 - NATIONAL BLOOD SERVICES ACT OF 1994</span><br/>
				An act promoting Voluntary Blood Donation, providing for an adequate supply of safe blood, 
				regulating blood banks, and providing penalties for violations thereof.</p>
			  <hr class="my-4">
			  <div class="row">
				  <div class="col-6 text-center"> 
				  	<span class="bsi_theme">MISSION</span>
				  	<div class="text-left">
				  		<ul>
				  			<li>Blood Safety</li>
				  			<li>Blood Adequacy</li>
				  			<li>Rational Blood Use</li>
				  			<li>Efficiency of blood services</li>
				  		</ul>
				  		  
				  	</div>
				  </div>
				  <div class="col-6 text-center">
				  	<span class="bsi_theme">GOALS</span>
				  	<div class="text-left">
				  		<ul>
				  			<li>Development of a fully voluntary blood donation system; Safe Adequate Blood Supply: 
				  				depends on Quality of Blood Source (i.e.-donor) Effective recruitment from healthy 
				  				low risk population Proper donor selection and counseling.</li>
				  			<li>Strengthening of a nationally coordinated network of BSF to increase efficiency by 
				  				centralized testing and processing of blood;</li>
				  			<li>Implementation of a quality management system including of Good Manufacturing Practice
				  			 GMP and Management Information System (MIS);</li>
				  			<li>Attainment of maximum utilization of blood through rational use of blood products and 
				  				component therapy;</li>
				  			<li>Development of a sound, viable sustainable management and funding for the nationally 
				  				coordinated blood network;</li>
				  		</ul>
				  	</div>
				  </div>
			  </div>
			  <div class="text-center">
			  	<img src="images/logos/DOH_LOGO.png" width="120px" height="100px">&nbsp;
			  	<img src="images/logos/NVBSP_LOGO.png" width="120px" height="100px">
			  	<img src="images/logos/IMU_LOGO.png" width="120px" height="100px">
			  </div>
			</div>
		</div>

		<div class="row">
			<div class="jumbotron" style="background:#FFF; !important">
			  <h1 class="display-4 bsi_theme">NBBNetS Subscription</h1>
			  <hr class="my-4">
			  <p class="lead" style="text-indent: 50px;">
			  	For NBBNetS subscription and training request, kindly send us a scanned/digital copy of accomplished forms 
		    	(<a href="downloadables/NBBNetS Subcription/NBBNetS Registration Form.docx" title="download form 1">FORM1</a>, 
		    	<a href="downloadables/NBBNetS Subcription/NBBNetS Preparedness Checklist.doc" title="download form 2">FORM2</a>) 
		    	and request letter, signed by an authorized personnel in your Blood Service Facility, 
		    	and addressed to:
			  </p>
			  <div class="row">&nbsp;</div>

			  <div class="row mb-3">
				  <div class="col-sm-6">
				  	<b>CRISELDA G. ABESAMIS, MD, FPSP, CESO III</b><br> 
					Director IV <br>
					Health Facility Development Bureau
				  </div>
				  <div class="col-sm-6 text-right">
				  	<b>THRU: PEDRITO Y. TAGAYUNA, MD, FPSP</b> <br>
					Medical Specialist III <br>
					National Voluntary Blood Services Program
				  </div>
			  </div>
			  <div class="row">&nbsp;</div>
			  <hr>
			  any other inquiries, please email <b class="bsi_theme">support@nbbnets.net</b>
			</div>
		</div>

		<div class="row">
			<div class="jumbotron" style="background:#FFF; !important">
			  <h1 class="display-4 bsi_theme">Requesting for Donation ID sticker</h1>
			  <hr class="my-4">
			  <p class="lead" style="text-indent: 50px;">
			  	Requesting of Donation ID sticker is on <b class="bsi_theme">FIRST-COME, FIRST-SERVE</b> basis. 
			  	Please keep in mind the following:
			  </p>
			  <div class="row">&nbsp;</div>

			  <div class="row mb-3">
			  	<ul>
			  		<li>Requesting for Donation ID stickers is <b class="bsi_theme">Free</b> of any charge.</li>
			  		<li>Production of Donation ID stickers will depend on the amount of work load. Usually, 
			  			he production will take about (3-5) working days depending on the work load.</li>
			  		<li><b class="bsi_theme">Facilities within Metro Manila:</b> please give us a (1) one week notice for us to have enough time 
			  			to process your request. Also, we will update your facility whenever your requested donation ID 
			  			sticker is ready for pick-up.</li>
			  		<li><b class="bsi_theme">Facilities outside Metro Manila:</b> production for donation ID stickers usually takes (1) one week 
			  			to process upon receiving the request and expect to be delivered within (2-3) two to three weeks 
			  			depending on the volume of request and location of the requesting facility.</li>
			  		<li>We strongly advice that <b class="bsi_theme">DO NOT walk-in</b> to pickup the donation ID stickers without any official 
			  			request or any notice coming from us.</li>
			  		<li>We are only (1) one text/email away for you to have an official request. Just text/email us the following:
			  		 Requesting for Donation ID sticker as the subject, the Amount/Quantity needed, the requesting facility 
			  		 and contact person.</li>
			  	</ul>
			  	  <p class="lead">YOU MAY CONTACT THE PERSONS BELOW TO ACCOMODATE YOUR REQUEST:</p>
				  <div class="col-sm-6">
				  	<b>RUBENA R. FELIX</b><br> 
					(0920) 440 - 7013
				  </div>
				  <div class="col-sm-6">
				  	<b>LESTER LOU L. REYES</b><br>
					(0916) 155 - 2239
				  </div>
			  </div>
			  <div class="row">&nbsp;</div>
			  <hr>
			  or send your request at  <b class="bsi_theme">support@nbbnets.net</b>
			</div>
		</div>
	  </div><!-- end col 8 -->


	  <!-- ASIDE -->
	  <div class="col-4">

		<?php include('aside.php'); ?> 
	  </div><!-- end col 4 -->
	  <!-- ASIDE -->
	</div><!--  end row -->

</div><!-- end div container -->


	<!-- java scripts -->

<?php require('footer.php'); ?>