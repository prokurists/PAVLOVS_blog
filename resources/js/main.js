function check_Form(){

    var email = document.forms["form"]["email"].value;
    var text_area = document.forms["form"]["textarea"].value;
    var total_client = document.forms["form"]["total_sum_client"].value;

    if (total_client !== total_real){
        alert("Summa nesakrīt!"); exit;  }

    else if (email == ""){
        alert("Jāaizpilda vārds"); exit;   }

    else if (text_area == ""){
        alert("Jāaizpilda teksts"); exit;   }

    
}



function post_created(){
    return Date();
}