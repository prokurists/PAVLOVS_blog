<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item">
      <a class="nav-link" href="/">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/contact">Contact us</a>
    </li></ul>
    <ul class="nav navbar-nav navbar-right">
    <li class='nav-item'>
      <a class='nav-link' href='/admin'>cPanel</a>
    </li>
    <?php if(isset($_COOKIE['user'])) { ?>
    <li class='nav-item'><a class='nav-link' href='/post/new'>New Post</a></li>
	<li class='nav-item'><a class='nav-link' href='/post/delete'>Delete Post</a></li>
	<li class='nav-item'><a class='nav-link' href='/logout'>Logout</a></li></ul>

    <?php } ?>
</ul>
  </div>
</nav>
