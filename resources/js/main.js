function parbaudit_formu(){
    var vards = document.forms["form"]["email"].value;
    var teksts = document.forms["form"]["textarea"].value;
    var summa = document.forms["form"]["total_sum"].value;


    if (vards == ""){
        alert("Jāaizpilda vārds");
    }
    else if (teksts == ""){
        alert("Jāaizpilda teksts");
    }

    elseif (summa == first_number + $second_number){
        alert("Summa nesakrīt!");
    }
    else {
        alert("Nedrīkst būt tukši lauki!")
    }
    
}