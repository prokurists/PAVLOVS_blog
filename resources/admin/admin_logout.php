<h1>Logout</h1>
<?php

setcookie("user", "", time() - 3600);
header( "refresh:5;url: http://www.pavlovs.lv" );



?>