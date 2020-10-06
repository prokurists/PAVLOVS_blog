<?php
  $refreshUrl=$_SERVER['REQUEST_URI'];

  $first_Number = rand(0,10);
  $second_Number = rand(0,10);
  $total_Sum = $first_Number + $second_Number;
?>

<script>
var total_real = "<?php echo $total_Sum; ?>";
</script>

<?php

function showOnePost($conn, $number){
  $sql = "SELECT id, user, name, text, date FROM posts WHERE id = ".$number."";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "
      <div class='card'>
      <div class='card-body' >
      <h5 class='card-title'>" . $row["name"]. "</h5>
      <p class='card-text' id='postFull'>" . $row["text"]. "</p>
      <p class='card-text'><small class='text-muted'>Ievietots: " . $row["date"]. " Ievietoja: " . $row["user"]. "</small></p>
  </div></div><br>";    }
  } else {    echo "No posts right now...";  }}

function showAllPosts($conn){
  $sql = "SELECT id, user, name, text, date FROM posts WHERE active = 1 ORDER BY id DESC";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
  echo "
  <div class='col-md-4 mb-md-0 p-md-4'>
  <img src='../resources/images/1.jpg' id='images' class='w-100' alt=''>
  </div> 
  <div class='col-md-8 position-static p-4 pl-md-0'>
  <h5 class='mt-0'>" . $row["name"]. "</h5>
  <p>" . $row["text"]. "</p>
  <a href='". $row["id"]."' class='btn btn-primary stretched-link'>Read more</a>
  <small class='text-muted'>Ievietots: " . $row["date"]. " Ievietoja: " . $row["user"]. "</small>
  </div><hr>"; }
  } else {  echo "No posts right now...";}}


function showPostsD ($conn){
    $showPosts = "SELECT * FROM posts";
    $result = $conn->query($showPosts);
    
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    echo "
            <form action='#' method='POST'>
            <input type='hidden' name='postId' value='". $row["id"]."'>           
            <tbody>
            <tr>
              <th scope='row'>". $row["id"]."</th>
              <td>".$row["name"]."</td>
              <td><button type='submit' class='btn btn-danger' name='postDelete' value='Submit'>Delete</button></form></td>
            </tr>
            "; }
        } else {  echo "No posts right now to delete.";}}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  






if ((isset($_POST["new_post"])) && (isset($_COOKIE['user']))){
  $post_name = test_input($_POST["name"]);
  $post_text = test_input($_POST["post_text"]);

  $stmt = $conn->prepare("INSERT INTO posts (name, text) VALUES (?, ?)");
  $stmt->bind_param("ss", $post_name, $post_text);
  $stmt->execute();

  $resMessage = array(
    "status" => "alert-success",
    "message" => "Your POST is added!");
    header("Refresh: 3; URL=$refreshUrl");   

  $stmt->close();
  $conn->close();}   
  
if ((isset($_POST["postDelete"])) && (isset($_COOKIE['user']))){  

      $postId = $_POST["postId"];

      $deletePost = "DELETE FROM posts WHERE id = '".$postId."'";

      if ($conn->query($deletePost) === TRUE) {

      $resMessage = array(
          "status" => "alert-success",
          "message" => "Your POST is deleted!");}

      $conn->close(); }
    

if (isset($_POST['admin_Login'])){
  $admin_name = test_input($_POST["admin_name"]);
  $admin_password = test_input($_POST["admin_password"]);

 if ($admin_name == "admin" && $admin_password == "admin"){
  setcookie(user, $admin_name, time() + (86400 * 30), "/");

  $resMessage = array(
    "status" => "alert-success",
    "message" => "Login successful!");
    header("Refresh: 3; URL=$refreshUrl");
  }else{
  $resMessage = array(
        "status" => "alert-danger",
        "message" => "Your ID or password is incorrect!");}}

if (isset($_POST["new_email"])){
  $email = test_input($_POST["email"]);
  $text_area = test_input($_POST["textarea"]);

  $stmt = $conn->prepare("INSERT INTO contacts (email, text) VALUES (?, ?)");
  $stmt->bind_param("ss", $email, $text_area);

  $stmt->execute();
  $resMessage = array(
      "status" => "alert-success",
      "message" => "Your message is sent!");
      header("Refresh: 3; URL=$refreshUrl");
    $stmt->close();
    $conn->close();}




?>



