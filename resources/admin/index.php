<?php

if (isset($_SESSION["adminSession"])){
	require __DIR__ . '/new_post.php';}
else{
	require __DIR__ . '/admin_login.php';}


?>


