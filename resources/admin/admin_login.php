<h1>Ielogojies iekšā lūdzu</h1>
<form name="admin_Login" method="post">

  <div class="container">
    <label for="uname"><b>Lietotājvārds</b></label>
    <input type="text" placeholder="Enter Username" name="admin_name" required>

    <label for="psw"><b>Parole</b></label>
    <input type="password" placeholder="Enter Password" name="admin_password" required>

    <button type="submit" name="admin_Login">Login</button>

  </div>

</form>
<?php
if (isset($_POST["admin_Login"])){
    $admin_name = test_input($_POST["admin_name"]);
    $admin_password = test_input($_POST["admin_password"]);
	
	if ($admin_name == "admin" && $admin_password == "admin"{
		$_SESSION["admin_Session"] == "admin"
	}
	else{
	echo "Error";}
}


?>
