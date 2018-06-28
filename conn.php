<?php

//set that this location cant be access directly
defined( 'MAIN' ) or die( 'Direct access to this location is not allowed!' );
require ('conf.php');

//IF NOT SAME CONFIGURATION THEN FORCE THE PAGE TO BE OFFLINE
if(!($con = @mysql_connect( $host, $user, $pass)))
{
	//require('header.php');
	#require('offline.php');
	exit("Error on host/user/pass");
}

//IF NOT SAME DATABASE NAME THEN FORCE THE PAGE TO BE OFFLINE
if(!(@mysql_select_db($dbname)))
{
	//require('header.php');
	#require('offline.php');
	exit("Cannot connect from database");
}

date_default_timezone_set('Asia/Manila');
$dateTime = date("Y-m-d H:i:sa");


?>
