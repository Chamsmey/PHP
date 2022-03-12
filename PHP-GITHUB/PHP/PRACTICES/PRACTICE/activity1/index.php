<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First server</title>
    <style>
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 10px;
            border: 3px solid green;
        }
    </style>
</head>

<body>
    <div class="container">
        <p><?php echo "Hello World!"; ?></p>
        <button class="show">Show</button>
    </div>

    <script>
        function showConfirm(event) {
            event.preventDefault();
            window.confirm('Are you sure you want to Show');
        }

        const btnShow = document.querySelector('.show');
        btnShow.addEventListener('click', showConfirm)
    </script>

</body>

</html>