<?php
require_once 'templates/header.php';
?>
<?php

echo phpinfo();

?>

<?php
$posts = [
    [
        'name' => 'Rady',
        'message' => 'Hello !'
    ],
    [
        'name' => 'Hyacinthe',
        'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
    ]
];
?>

<?php
$conn = new PDO("mysql:host=localhost;dbname=wechat", 'root', '');
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['username']) && !empty($_POST['message'])) :
    $name = $_POST['username'];
    $message = $_POST['message'];
    $newPost = [
        'name' => $name,
        'message' => $message
    ];
    array_push($posts, $newPost);
endif;
?>

<?php
foreach ($posts as $post) :
    $userName = $post['name'];
    $userMessage = $post['message'];
    // insert data into database
    $conn->query("INSERT INTO chatbox(name, message)values('$userName',' $userMessage')");

?>
    <div class="card">
        <div class="card-header">
            <span><?php echo $post['name'] ?></span>
        </div>
        <div class="card-body">
            <p class="card-text"><?php echo $post['message']; ?></p>
        </div>
    </div>
    <hr>
<?php
endforeach;
?>

<form action="#" method="post">
    <div class="row mb-3 mt-3">
        <div class="col">
            <input type="text" class="form-control" placeholder="Enter Name" name="username">
        </div>
    </div>

    <div class="mb-3">
        <textarea name="message" placeholder="Enter message" class="form-control"></textarea>
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Add new post</button>
    </div>
</form>

<?php
require_once 'templates/footer.php';
?>