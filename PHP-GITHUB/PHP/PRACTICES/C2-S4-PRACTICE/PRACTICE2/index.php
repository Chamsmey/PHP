
<?php 
// include of header
if($_GET['page']=="home"){
    require_once('pages/home.php');
}
//  include of pages 
else if($_GET['page']=="about"){
    require_once('pages/about.php');
}
else{
    echo 'home';
}
//  include of footer 


