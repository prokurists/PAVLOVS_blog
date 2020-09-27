<form name="admin_add"  method="POST" action="/post/new">
  <div class="form-group">
    <label for="text">Posta nosaukums</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="form-group">
    <label for="textarea">Teksts</label>
    <textarea class="form-control" name="post_text" rows="5"></textarea>
  </div> 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = test_input($_POST["name"]);
    $text_area = test_input($_POST["post_text"]);

    echo "Paldies, " . $name . ". Tavs teksts: " . $text_area . " ir nosūtīts!"; }

?>
