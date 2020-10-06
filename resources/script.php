<?php

  $first_Number = rand(0,10);
  $second_Number = rand(0,10);
  $total_Sum = $first_Number + $second_Number;
?>

<script>
var total_real = "<?php echo $total_Sum; ?>";

</script>
<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if (isset($_POST["new_email"])){
    $email = test_input($_POST["email"]);
    $text_area = test_input($_POST["textarea"]);
  
    $stmt = $conn->prepare("INSERT INTO contacts (email, text) VALUES (?, ?)");
      $stmt->bind_param("ss", $email, $text_area);
  
      $stmt->execute();
      $resMessage = array(
        "status" => "alert-success",
        "message" => "Your message is sent!");
      $stmt->close();
      $conn->close();
  }
?>
