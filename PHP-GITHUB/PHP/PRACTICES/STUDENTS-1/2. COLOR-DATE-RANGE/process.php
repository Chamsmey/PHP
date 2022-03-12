<?php require_once('templates/header.php')  ;?>
<?php
    // YOUR CODE HERE 
    function getInfo($post)
    {
        return isset($_POST[$post]) ? $_POST[$post] : null;
    }

    $color = getInfo('color');
    $range = getInfo('range');
    $date = getInfo('date');
?>
    <div class="alert alert-secondary">
        <strong>Color: </strong> <span><?php echo  $color;?></span>
    </div>
    <div class="alert alert-info">
        <strong>Range: </strong> <span><?php echo  $range; ?></span>
    </div>
    <div class="alert alert-danger">
        <strong>Date: </strong> <span><?php echo    $date; ?></span>
    </div>

<?php require_once('templates/footer.php');?>