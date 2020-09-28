<a href="/logout">Izlogoties</a>
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
if ((isset($_POST["new_post"]) && isset($_COOKIE["user"]))){

    $post_name = test_input($_POST["name"]);
    $post_text = test_input($_POST["post_text"]);
  
$stmt = $conn->prepare("INSERT INTO posts (name, text) VALUES (?, ?)");
$stmt->bind_param("ss", $post_name, $post_text);

$stmt->execute();
  echo "Pievienots jauns ieraksts";
$stmt->close();
$conn->close();

}
