<?php

if(isset($_COOKIE['user'])) {

	echo "<h1> cPanel </h1>"; 
	echo "<a href='/post/new'> New post </a>";
	echo "<a href='/post/new'> Delete post </a>";
	echo "<a href='/admin/logout'> logout </a>";


	} else {
		header('Location: http://www.pavlovs.lv/admin/login');
	}


?>


