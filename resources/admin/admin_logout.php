<?php
setcookie("user", "", time() - 3600);
header('Location: http://www.pavlovs.lv');
?>