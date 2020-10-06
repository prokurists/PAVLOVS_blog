<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item">
      <a class="nav-link" href="/">Galvene</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/contact">Sakontaktēties</a>
    </li>
</ul>
    <div class="navbar-collapse collapse justify-content-between">
        <ul class="navbar-nav mr-auto">
    <?php if (isset($_COOKIE["user"])){
      echo "<li class='nav-item'><a class='nav-link' href='/logout'>Izlogoties</a></li>"; }
    else{
      echo "<li class='nav-item'><a class='nav-link' href='/admin'>Admin panelis</a></li>";} ?>
</ul></div>
  </div>
</nav>
