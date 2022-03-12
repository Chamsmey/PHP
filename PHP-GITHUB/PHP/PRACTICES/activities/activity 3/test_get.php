<html>

<body>

<?php

    require_once("index.html");
?>
    <h1><?php echo $_GET["web"]; ?></h1>
    <?php
    echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
    echo $_GET["web"];
    ?>
</body>

</html>