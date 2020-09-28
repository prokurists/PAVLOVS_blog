
<form name="new_post"  method="POST">
  <div class="form-group">
    <label for="text">Posta nosaukums</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="form-group">
    <label for="textarea">Teksts</label>
    <textarea class="form-control" name="post_text" rows="5"></textarea>
  </div> 
  <button type="submit" class="btn btn-primary" name="new_post">Submit</button>
</form>
<?php
if (isset($_POST["new_post"])){
    $post_name = test_input($_POST["name"]);
    $post_text = test_input($_POST["post_text"]);
  
$sql = "INSERT INTO MyGuests (name, text)
VALUES (."'$post_name'"., ."'$post_text'".)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
