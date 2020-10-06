<?php

if(isset($_COOKIE['user'])) {

	$adminPanelLinks = "
	<li class='nav-item'><a class='nav-link' href='/post/new'>New Post</a></li>
	<li class='nav-item'><a class='nav-link' href='/post/delete'>Delete Post</a></li>
	<li class='nav-item'><a class='nav-link' href='/admin/logout'>Logout</a></li>";

	

	} else {
		header('Location: http://www.pavlovs.lv/admin/login');
	}


?>


