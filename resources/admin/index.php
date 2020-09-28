<?php

if ($_SESSION["admin_Session"] == "admin"){
	require __DIR__ . '/new_post.php';}
else{
	require __DIR__ . '/admin_login.php';}


?>


