function check_Form(){

    var email = document.forms["form"]["email"].value;
    var text_area = document.forms["form"]["textarea"].value;
    var total_client = document.forms["form"]["total_sum_client"].value;

    if (total_client !== total_real){
      return ("Summa nesakrīt!");  }

    else if (email == ""){
      return ("Jāaizpilda vārds");    }

    else if (text_area == ""){
      return ("Jāaizpilda teksts");    }

    
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}