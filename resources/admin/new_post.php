<?php if(isset($_COOKIE['user'])) { ?>

<form name="new_post" id="new_post"  method="POST">
  <div class="form-group">
    <label for="text">Post name</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="form-group">
    <label for="textarea">Post text</label>
    <textarea class="form-control" name="post_text" rows="5"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="new_post">Submit</button>
</form>

<?php

if (isset($_POST["new_post"])){

    $post_name = test_input($_POST["name"]);
    $post_text = test_input($_POST["post_text"]);

    $stmt = $conn->prepare("INSERT INTO posts (name, text) VALUES (?, ?)");
    $stmt->bind_param("ss", $post_name, $post_text);

    $stmt->execute();
    echo "Added new post.";
    header('Location: http://www.pavlovs.lv');


    $stmt->close();
    $conn->close();
}
}
else{
  echo "No permisions";
}
