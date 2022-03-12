<?php



if ($_GET['gender']=="male"){
    $iamge ="images/man.jpg";
}else if($_GET['gender']=="female"){
    $iamge ="images/girl.jpg";
}

?>

<img src="<?php echo $iamge;  ?>" alt="">


