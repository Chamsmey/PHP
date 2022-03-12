<?php
session_start();
$_SESSION['name'] =false;
$_SESSION['email'] = false;
if($_SERVER['REQUEST_METHOD']=='POST'){

    if(isset($_POST['name']) && $_POST['name']!=''){
    }else{
        $_SESSION['name'] =true;
        header('location:index.php');
    }
    if(isset($_POST['email']) and $_POST['email']!=''){
        
    }else{
        $_SESSION['email'] = true;
        header('location:index.php');
    }

    }