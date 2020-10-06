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
<?php }?>
