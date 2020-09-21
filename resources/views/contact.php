<h3> Ja vēlies sazināties ar mani, lūdzu aizpildi formu </h3>
<form>
  <div class="form-group" onSubmit="return parbaudit_formu()">
    <label for="email">E-pasta adrese</label>
    <input type="email" class="form-control">
  </div>
  <div class="form-group">
    <label for="textarea">Piezīmes</label>
    <textarea class="form-control" rows="3"></textarea>
  </div>
  <div class="form group">
  <label for="captcha">Captcha <?php echo "Cik ir " . $first_Number . " + " . $second_Number. " = " . $total_Sum; ?></label>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php

  $first_Number = rand(0,10);
  $second_Number = rand(0,10);
  $total_Sum = $first_Number + $second_Number;

?>