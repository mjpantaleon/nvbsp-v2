<?php
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
    //ip from share internet
    $ip = $_SERVER['HTTP_CLIENT_IP'];
}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    //ip pass from proxy
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}else{
    $ip = $_SERVER['REMOTE_ADDR'];
}
$ip_address = $ip;
#exit(var_dump($ip));

$page_address = mysql_real_escape_string(basename($_SERVER['SCRIPT_NAME']));
$sql = "INSERT INTO `page_hits` SET
		`page_address` = '{$page_address}',
		`page_id` = '".$page_id."',
		`hits` = 1,
		`ip_address` = '".$ip_address."',
		`dateTime` = '".$dateTime."' ";
mysql_query($sql)
or die(mysql_error());

?>