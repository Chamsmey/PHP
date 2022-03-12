
<?php
$active ='bg-danger';
$page='home';
if(isset($_GET['page'])){

  $page= $_GET['page'];

}

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link <?php if($page=='home'){ echo $active;} ?>" aria-current="page" href="?page=home">Home</a>
        <a class="nav-link <?php if($page=='about'){ echo $active;} ?>" href="?page=about">about</a>
        <a class="nav-link <?php if($page=='contact'){ echo $active;} ?>" href="?page=contact">Contact</a>
      </div>
    </div>
  </div>
</nav>