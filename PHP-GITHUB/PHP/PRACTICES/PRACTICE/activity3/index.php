<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic web site</title>
    <style>
        .container {
            background: #000;
            color: #fff;
        }
    </style>
</head>

<body>
    <?php
    // Sensitive code that the client should not see
    $PHPAdminPassword = "1234PHP";
    ?>

    <div class="container">
        <?php for ($i = 0; $i < 5; $i++) : ?>
            <h1><?= $i ?></h1>
        <?php endfor ?>
    </div>
</body>

<script src="js/main.js"></script>

</html>