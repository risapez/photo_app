<?php

include 'configure.php';

$sql = "SELECT photo_id, user_id, photo_name, upload_date, labels
		FROM photo 
		ORDER BY photo_id desc
		LIMIT 30";

try {
	$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $dbh->query($sql);  
	$photos = $stmt->fetchAll(PDO::FETCH_OBJ);
	$dbh = null;
	echo '{"photos":'. json_encode($photos) .'}'; 
	} catch(PDOException $e) {
	echo '{"error":{"text":'. $e->getMessage() .'}}'; 
}

?>

