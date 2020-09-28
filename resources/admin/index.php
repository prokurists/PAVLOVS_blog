<?php

if(!isset($_COOKIE['user'])) {
	include __DIR__ . '/new_post.php';}
else{
	include __DIR__ . '/admin_login.php';}


?>


