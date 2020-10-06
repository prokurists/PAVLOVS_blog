<h1>Logout</h1>
<?php

setcookie("user", "", time() - 3600);
header( "refresh:5;Location: http://www.pavlovs.lv" );



?>