<form name="new_email" id="contactUs" method="POST" action="#">
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

