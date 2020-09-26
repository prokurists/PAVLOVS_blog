<?php
session_start();

if ($_SESSION["admin"] != "admin"){ ?>

<body class="text-center">
    <form class="form-signin" method="POST" name="admin_login" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
      <h1 class="h3 mb-3 font-weight-normal">Lūdzu ielogojies</h1>
      <label for="inputEmail" class="sr-only">E-pasta adrese</label>
      <input type="email" name="admin_email" id="inputEmail" class="form-control" placeholder="E-pasta adrese" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="admin_password" id="inputPassword" class="form-control" placeholder="Parole" required>
      <div class="checkbox mb-3">

      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

<?php  
    if(isset($_POST['admin_login'])){
    $admin_email = test_input($_POST["admin_email"]);
    $admin_password = test_input($_POST["admin_password"]);

    echo $admin_email;
    
    if ($admin_password = "admin" & $admin_email = "admin@admin"){
      echo "Esi ielogojies";
      $_SESSION["admin"] = "admin";}
      else{
        echo "Parole vai lietotājvārds ir nepareizs";
      }
    } 

} else {    ?>

  <form name="admin_add"  method="POST" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
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
}
  if(isset($_POST['admin_add'])){
  $post_name = test_input($_POST["post_name"]);
  $post_text = test_input($_POST["post_text"]);


  }

?>