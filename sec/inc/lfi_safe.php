<?php
	$valid = array("links.html" => true, "news.html" => true);
	if(!array_key_exists($_GET['page'], $valid)) {
		die("Permission denied.");
	}
	include($_GET['page']);
?>
