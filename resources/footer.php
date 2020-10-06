<p>Autors: Aleksejs Pavlovs</p>
<p><a href="mailto:info@pavlovs.lv">aleksejs@pavlovs.lv</a></p>
<a href="">Facebook</a> | <a href="">Whatsapp</a> | <a href="">LinkedIn</a> | <a href="">Instagram</a> |
<?php
if ($alert == ""){
  // nekas nenotiek
  echo "nav kludas";
}
else{
  echo "
  <div class='alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>Kļūda!</strong>" . $alert. "
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>
  ";

}?>
