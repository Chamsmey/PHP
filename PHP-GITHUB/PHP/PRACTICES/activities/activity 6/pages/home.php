<div class="main-content">
  <main>

<?php

    $currentPage = "I dont know";

    // 1-  Check if the querry parameter "page" exist on the URL, using isset


if (isset($_GET["page"])==true ){
  $currentPage= $_GET["page"];
}

    // 2 - If exist set $currentPage with the value of this querry parameter
  
  


    // 3 - Test the URL with different values 

    echo "<h1>" . $currentPage . "</h1>";
?>


  </main>
</div>