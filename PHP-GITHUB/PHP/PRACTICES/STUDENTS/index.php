<?php
require_once 'templates/header.php';
?>

<?php
$db = new PDO("mysql:host=localhost;dbname=Practice_security", "root", "");
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['username']) && !empty($_POST['password'])) :
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT username, credit_card_number FROM userdata WHERE username='$username' and password='$password';";
    error_log("executed query: " . $query);
    $statement = $db->query($query);
    $list_of_users = $statement->fetchAll();

    if (count($list_of_users) == 0) :
?>
        <div class="text-danger">Wrong username or password !</div>
        <?php
    else :

        foreach ($list_of_users as $user) :
        ?>
            <div class="card m-3">
                <div class="card-header">
                    <span><?php echo $user['username'] ?></span>
                </div>
                <div class="card-body">
                    <p class="card-text">Your credit card number: <?php echo $user['credit_card_number']; ?></p>
                </div>
            </div>
            <hr>
<?php
        endforeach;
    endif;
endif;
?>

<form action="" method="post" class="m-3">
    <div class="row mb-3 mt-3">
        <div class="col">
            <input type="text" class="form-control" placeholder="Enter Username" name="username">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Enter password" name="password">
        </div>
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-primary">View your data</button>
    </div>
</form>

<?php
require_once 'templates/footer.php';
?>