<?php require_once 'templates/header.php' ?>
<?php

$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
// CODE HERE 
?>
    <div class="card">
        
        <div class="card-body">
            <?php
            // CODE HERE
            if(isset($_POST['subject'])){
                $subjects = $_POST['subject'];
                foreach($subjects as $subject)
                {
                    $color=($colors [array_rand($colors)]);
                    echo "<button class='btn ms-2 btn- $color'" ; echo $color."'>";
                    echo $subject;
                    echo "</button>";
                }
            }
            ?>
        </div>
    </div>


<?php require_once 'templates/footer.php' ?>