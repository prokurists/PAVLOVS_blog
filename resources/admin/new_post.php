<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = test_input($_POST["name"]);
    $text_area = test_input($_POST["post_text"]);

    echo "Paldies, " . $name . ". Tavs teksts: " . $text_area . " ir nosūtīts!"; }

?>
