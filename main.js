function print_about (){
    var x = document.getElementById("about_message");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
function parbaudit_formu(){
    var vards = document.forms["forma"]["vards"].value;
    var teksts = document.forms["forma"]["teksts"].value;

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

