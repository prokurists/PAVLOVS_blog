<?php

if(isset($_COOKIE['user'])) {

	echo "<ul class='navbar-nav mr-auto mt-2 mt-lg-0'>
	<li class='nav-item'><a class='nav-link' href='/post/new'>New Post</a></li>
	<li class='nav-item'><a class='nav-link' href='/post/delete'>Delete Post</a></li>
	<li class='nav-item'><a class='nav-link' href='/admin/logout'>Logout</a></li></ul>";	

	} else {
		header('Location: http://www.pavlovs.lv/admin/login');
	}


?>


