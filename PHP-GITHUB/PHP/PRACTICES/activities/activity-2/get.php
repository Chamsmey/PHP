<?php
require_once('templates/header.php');
echo "<ul>";?>
<li> <?php echo "Your name is ".$_GET['name']  ;?></li>
<li> <?php echo " Your hobbies are".$_GET['hobbies'] ; ?></li>
<li> <?php echo 'You are a'.$_GET['gender']; ?></li>
<?php
echo "</ul>";
require_once('templates/footer.php');
