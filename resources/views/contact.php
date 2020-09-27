<?php
  $first_Number = rand(0,10);
  $second_Number = rand(0,10);
  $total_Sum = $first_Number + $second_Number;
?>

<script>
var total_real = "<?php echo $total_Sum; ?>";

</script>

<h3> Ja vēlies sazināties ar mani, lūdzu aizpildi formu </h3>
<form name="new_email"  method="POST">
  <div class="form-group">
    <label for="email">E-pasta adrese</label>
    <input type="email" name="email" class="form-control">
  </div>
  <div class="form-group">
    <label for="textarea">Jūsu teksts</label>
    <textarea class="form-control" name="textarea" rows="3"></textarea>
  </div>
  <div class="form group">
  <input type="text" class="form-control" name="captcha"
                data-bv-callback="true"
                data-bv-callback-message="Wrong answer"
                data-bv-callback-callback="checkCaptcha" />
  <button type="submit" onclick="return check_Form()" class="btn btn-primary" name="new_email">Submit</button>
</form>

<?php
if (isset($_POST["new_email"])){
  $email = test_input($_POST["email"]);
  $text_area = test_input($_POST["textarea"]);

    echo "Paldies, " . $email . ". Tavs teksts: " . $text_area . " ir nosūtīts!"; 

  }
?>