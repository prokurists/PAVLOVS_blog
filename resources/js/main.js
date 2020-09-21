function parbaudit_formu(){
    var vards = document.forms["form"]["email"].value;
    var teksts = document.forms["form"]["textarea"].value;

    if (vards == ""){
        alert("Jāaizpilda vārds");
    }
    else if (teksts == ""){
        alert("Jāaizpilda teksts");
    }
    else {
        alert("Nedrīkst būt tukši lauki!")
    }
    
}