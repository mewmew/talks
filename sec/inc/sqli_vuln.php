<pre>
<?php
	include("config.php");
	$link = mysqli_connect($db_host, $db_username, $db_password, $db_name);

	// START OMIT
	$query = "SELECT email FROM users WHERE username = '".$_GET['user']."'";
	$result = $link->query($query);
	// STOP OMIT
	while($row = mysqli_fetch_array($result)) {
		print_r($row);
	}
?>
</pre>
