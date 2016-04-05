<pre>
<?php
	include("config.php");
	$link = new mysqli($db_host, $db_username, $db_password, $db_name);

	// START OMIT
	$stmt = $link->prepare("SELECT email FROM users WHERE username=?");
	$stmt->bind_param("s", $_GET['user']);
	$stmt->execute();
	$stmt->bind_result($result);
	$stmt->fetch();
	// STOP OMIT
	print_r($result);
?>
</pre>
