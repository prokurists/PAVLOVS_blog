<?php

if(isset($_COOKIE['user'])) {
	echo "<h1> Admin panelis </h1>"; }
	else{
    http_response_code(404);
    require __DIR__ . '/views/404.php';}


?>


