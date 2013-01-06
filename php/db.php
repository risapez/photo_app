<?php
$db_username="risapezc_photo";
$pswd="cocowoco123";
$database="risapezc_photo_app";
mysql_connect("localhost",$db_username,$pswd);		
@mysql_select_db($database) or die( "Unable to select database");
?>