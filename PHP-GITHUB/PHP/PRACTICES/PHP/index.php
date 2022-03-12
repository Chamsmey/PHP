<?php     

require_once("php/app.php");
require_once("php/navbar.php");
require_once("php/footer.php");

?>
<h1>
<?php 
echo "page/".$_GET["page"].".php";
?>
</h1>
<a href="<?php echo "pages/".$_GET["page"].".php";?>"><?php echo "page/".$_GET["page"].".php";?></a>