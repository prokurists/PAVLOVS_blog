<?php
  $first_Number = rand(0,10);
  $second_Number = rand(0,10);
  $total_Sum = $first_Number + $second_Number;
?>

<script>
var total_real = "<?php echo $total_Sum; ?>";

</script>

<?php

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



if (isset($_POST["new_email"])){
  $email = test_input($_POST["email"]);
  $text_area = test_input($_POST["textarea"]);

  $stmt = $conn->prepare("INSERT INTO contacts (email, text) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $text_area);

    $stmt->execute();
    $resMessage = array(
      "status" => "alert-success",
      "message" => "Your message is sent!");
    $stmt->close();
    $conn->close();}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  







?>
