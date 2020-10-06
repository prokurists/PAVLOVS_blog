<?php
  $first_Number = rand(0,10);
  $second_Number = rand(0,10);
  $total_Sum = $first_Number + $second_Number;
?>

<script>
var total_real = "<?php echo $total_Sum; ?>";

</script>

<form name="new_email" id="contactUs"  method="POST">
  <div class="form-group">
    <label for="email">E-pasta adrese</label>
    <input type="email" name="email" class="form-control">
  </div>
  <div class="form-group">
    <label for="textarea">Jūsu teksts</label>
    <textarea class="form-control" name="textarea" rows="3"></textarea>
  </div>
  <div class="form group">
  <label for="captcha"><?php echo "Cik ir " . $first_Number . " + " . $second_Number; ?></label>
  <input type="number" name="total_sum_client" class="form-control">  <br>
  <button type="submit" onclick="return check_Form()" class="btn btn-primary" name="new_email">Submit</button>
</form>

<?php

if (isset($_POST["new_email"])){
  $email = test_input($_POST["email"]);
  $text_area = test_input($_POST["textarea"]);

  $stmt = $conn->prepare("INSERT INTO contacts (email, text) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $text_area);

    $stmt->execute();
    echo "
    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
    <strong>Paldies, " . $email . " </strong>Tavs teksts: " . $text_area . " ir nosūtīts!
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
  </div>"; 
    $stmt->close();
    $conn->close();
}
  
?>

