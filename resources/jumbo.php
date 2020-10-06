<div class="container" id="top-container">
<h1 class="display-4">Aleksejs Porftolio</h1>
<p class="lead">Fit fabricando faber.</p>
</div>

<?php if(!empty($resMessage)) {?>
    <div class="alert <?php echo $resMessage['status']?> alert-dismissible fade show' role='alert'">
      <?php echo $resMessage['message']?>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
      </button>
    </div>
    <?php }?>
  </div>

  
<?php
function checkError($alert){
if ($alert == ""){
  // nekas nenotiek
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

}}?>
