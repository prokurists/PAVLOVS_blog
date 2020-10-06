<?php

if(isset($_COOKIE['user'])) {

	echo "<h1>cPanel content</h1>";	

	} else {
		header('Location: http://www.pavlovs.lv/admin/login');
	}


?>


