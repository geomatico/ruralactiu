<?php
	$url = "http://ruralactiu.cartodb.com/api/v2/sql?".http_build_query($_REQUEST);
	//echo $url;
	$contents = file_get_contents($url);
	echo $contents;
?>
