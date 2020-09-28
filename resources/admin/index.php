<?php

if ($_SESSION["admin_Session"] == "admin"){
	include __DIR__ . '/new_post.php';}
else{
	include __DIR__ . '/admin_login.php';}


?>


