<?php

if(isset($_COOKIE['user'])) {

	echo "<h1> Admin panelis </h1>"; 

	} else {
		header('Location: http://www.pavlovs.lv/admin/login');
	}


?>


