<?php 
	$year = 2018;
	$month = 06;
	$day = 14;
?>
<div class="deadline">
	<h5>countdown</h5>
	<script type="application/javascript">
		var myCountdownTest = new Countdown({
		year: <?php echo $year; ?>,
		month	: <?php echo $month; ?>, 
		day		: <?php echo $day; ?>,
		width	: 300, 
		height	: 50
		});
	
	</script>
</div>