
<?php 
// include of header
 require_once("includes/header.php");

//  Get value from URL here
echo isset($_GET['page']) ? $_GET['page'] : "home";
//  include of footer 
require_once('includes/footer.php');




