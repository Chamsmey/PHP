<?php require_once('templates/header.php') ?>
<ul class="list-group">
<?php
   // YOUR CODE HERE

    function getUserPost($post){
            return isset($_POST[$post]) ? $_POST[$post] : null;
    };


    $name = getUserPost( 'name');
    $email= getUserPost('email');
    $password= getUserPost('password');
    $numberPhone= getUserPost('number');
    $message= getUserPost('message');
?>
    <li class="list-group-item"><?php echo  $name ; ?></li>
    <li class="list-group-item"><?php echo $email; ?></li>
    <li class="list-group-item"><?php echo $password ?></li>
    <li class="list-group-item"><?php echo $numberPhone;?></li>
    <li class="list-group-item"><?php echo $message; ?></li>

</ul>
<?php require_once('templates/footer.php') ?>