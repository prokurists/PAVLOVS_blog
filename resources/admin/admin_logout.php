<h1>Logout</h1>
<?php

setcookie("user", "", time() - 3600);
sleep(5);
header('Location: http://www.pavlovs.lv');



?>