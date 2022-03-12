<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validation</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>
  <form class="container mt-5" action="action.php" method='post'>

    <input type="text" name="name" placeholder="Your name ...." class="form-control">

    <?php
    
      if (isset($_SESSION['name'])) {
        if ($_SESSION['name']) {
          echo '<p class=" text text-danger"> Invalid </p>';
        }
      }
    ?>
    <input type="email" name="email" placeholder="Email..." class="form-control mt-3">
    <?php
    if (isset($_SESSION['email'])) {  
      if ($_SESSION['email']) {
        echo '<p class=" text text-danger"> Invalid </p>';
      }
    }
    ?>
    <button type="submit" class="btn btn-primary mt-2">submit</button>

  </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</html>