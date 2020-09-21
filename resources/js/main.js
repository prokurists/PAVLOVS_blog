function parbaudit_formu(){
    var vards = document.forms["form"]["email"].value;
    var teksts = document.forms["form"]["textarea"].value;
    var summa_client = document.forms["form"]["total_sum_client"].value;
    var summa_real = document.forms["form"]["total_sum_real"].value;

    if (summa_client !== summa_real){
      alert("Summa nesakrīt!");  }

    if (vards == ""){
        alert("Jāaizpilda vārds");    }

    else if (teksts == ""){
        alert("Jāaizpilda teksts");    }

    else {
        alert("Nedrīkst būt tukši lauki!");    }
    
}