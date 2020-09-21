function parbaudit_formu(){
    var vards = document.forms["form"]["email"].value;
    var teksts = document.forms["form"]["textarea"].value;
    var summa = document.forms["form"]["total_sum"].value;
    var first_number = "<?php echo $first_Number; ?>";
    var second_number = "<?php echo $second_Number; ?>";
    var total_sum = "<?php echo $total_Sum; ?>";

    if (vards == ""){
        alert("Jāaizpilda vārds");
    }
    else if (teksts == ""){
        alert("Jāaizpilda teksts");
    }

    else if (summa !== first_number + second_number){
        alert("Summa nesakrīt!");
    }
    else {
        alert("Nedrīkst būt tukši lauki!")
    }
    
}