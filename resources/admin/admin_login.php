<h1>Ielogojies iekšā lūdzu</h1>
<form name="admin_Login" class="formFix" method="post">
<div class="form-group">
    <label for="text">Lietotājvārds</label>
    <input type="text" name="admin_name" class="form-control" id="text">
  </div>
  <div class="form-group">
    <label for="pwd">Parole:</label>
    <input type="password" name="admin_password" class="form-control" id="pwd">
  </div>

  <button type="submit" name="admin_Login" class="btn btn-primary">Submit</button>
</form>
<?php
if (isset($_POST['admin_Login'])){
    $admin_name = test_input($_POST["admin_name"]);
    $admin_password = test_input($_POST["admin_password"]);

	if ($admin_name == "admin" && $admin_password == "admin"){
		setcookie(user, $admin_name, time() + (86400 * 30), "/"); // 86400 = 1 day
		header("Refresh:0");
	}
	else{
	$alert = "Nesakrīt parole vai lietotājvārds";
	}

}


?>
