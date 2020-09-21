<?php
  $first_Number = rand(0,10);
  $second_Number = rand(0,10);
  $total_Sum = $first_Number + $second_Number;
?>
<script>
var first_number = "<?php echo $first_Number; ?>";
var second_number = "<?php echo $second_Number; ?>";
var total_sum = "<?php echo $total_Sum; ?>";

</script>
<h3> Ja vēlies sazināties ar mani, lūdzu aizpildi formu </h3>
<form name="form" onsubmit="return parbaudit_formu()">
  <div class="form-group">
    <label for="email">E-pasta adrese</label>
    <input type="email" name="email" class="form-control">
  </div>
  <div class="form-group">
    <label for="textarea">Piezīmes</label>
    <textarea class="form-control" name="textarea" rows="3"></textarea>
  </div>
  <div class="form group">
  <label for="captcha"><?php echo "Cik ir " . $first_Number . " + " . $second_Number. " = " . $total_Sum; ?></label>
  <input type="number" name="total_sum" class="form-control">

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
