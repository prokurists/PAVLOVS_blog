function check_Form(){

    var email = document.forms["new_email"]["email"].value;
    var text_area = document.forms["new_email"]["textarea"].value;
    var total_client = document.forms["new_email"]["total_sum_client"].value;

    if (total_client !== total_real){
        alert("Summa nesakrīt!"); return false;  }

    else if (email == ""){
        alert("Jāaizpilda vārds"); return false;   }

    else if (text_area == ""){
        alert("Jāaizpilda teksts"); return false;   }

    else{

    }


}
