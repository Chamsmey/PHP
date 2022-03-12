<?php require_once('templates/header.php'); ?>



<?php
// YOUR CODE HERE
function getUserInfo($data)
{
    return isset($_POST[$data]) ? $_POST[$data] : null;
}

$province=getUserInfo('province');

$gender = getUserInfo('gender');
$img='<img src="images/male.png">';

if($gender!="Male"){
    
    $img= '<img src="images/female.png">';
}
$subjects= $_POST['subject'];
?>
    <div class="card mb-3">
        <div class="card-header">Province</div>
        <div class="card-body">
            <h2 class="display-3"><?php echo  $province;?></h2>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">Gender</div>
        <div class="card-body">
            <!-- YOUR CODE HERE [gender] -->
            <?php
                echo $img;

            ?> 
        </div>
    </div>
    <div class="card">
        <div class="card-header">Subject</div>
        <div class="card-body">
            <?php
                // YOUR CODE HERE [subject]
                foreach($subjects as $subject){
                    echo '<button type="button" class="btn btn-primary ms-2">';
                    
                    echo $subject;
                    
                    echo '</button>';    
                }
            ?>
        </div>
    </div>

<?php require_once('templates/footer.php'); ?>