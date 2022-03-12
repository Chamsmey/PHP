<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logs server vs client side</title>
</head>

<body>
    <?php
    error_log("log displayed in server's console from PHP");
    ?>

    <?php
    for ($i = 0; $i < 5; $i++) {
        error_log("index=" . $i);
    ?>
        <div>HTML Display in web page</div>
        <div><?php echo "HTML generated from PHP"; ?></div>
    <?php
    }
    ?>

    <p id="paragraph"></p>

    <script>
        console.log("log displayed in client's browser from javascript");
        let element = document.getElementById("paragraph");
        element.textContent = "Paragraph content set with javascript";
    </script>
</body>

</html>