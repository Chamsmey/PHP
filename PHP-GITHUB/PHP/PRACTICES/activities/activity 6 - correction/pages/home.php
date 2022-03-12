<div class="main-content">
  <main>

    <?php
    $currentPage = "I dont know";
    if (isset($_GET['page'])) {
      $currentPage = $_GET['page'];
    }
    echo "<h1>" . $currentPage . "</h1>";
    ?>


  </main>
</div>