<?php
require_once('templates/header.php');
require_once('templates/navbar.php');
require_once('templates/footer.php');
$page='pages/home.php';
if(isset($_GET['page']))
{
    $file= 'pages/' .$_GET['page'].'.php';
    if(file_exists($file)){
        $page=$file;
    }else{
        $page= "pages/404.php";
    }
}
require_once $page;
