<?php

if (isset($_SESSION["admin_Session"])){
	include __DIR__ . '/new_post.php';}
else{
	include __DIR__ . '/admin_login.php';}


?>


