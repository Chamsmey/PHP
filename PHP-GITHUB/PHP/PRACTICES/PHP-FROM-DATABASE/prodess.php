<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">

        <form action="" method="post">
            <input type="text" class="form-control mt-3" name="name" id="">
            <input type="password" class="form-control mt-3" name="password" id="">
            <div class="form-control"><button class="btn btn-primary mt-3" type="submit">Submit</button></div>
        </form>
    </div>
    <?php 
    $conn=new PDO("mysql:host=localhost,dbname=users",'root','');
        if($_SERVER['REQUEST_METHOD'] == 'POST'):

            $name = $_POST['name'];
            $password=$_post['password'];
            if(!empty($name) and !empty($password)):
    ?>
            <div class="card">
                <div class="card-header">
                <h3><?= ($name) ?></h3>
                </div>
                <div class="card-body"><p class="text"><?= $name ?></p></div>
            </div>
            <div class="card-footer"><a href="" class="btn btn-danger">Delete</a></div>
            
    <?php
            
            $conn->query("Insert into users (name,password) values ('$name', '$password')");
            $statement=$conn->query("select * from users");
 
            $posts=$statment->fetchAll();
            foreach($posts as $post):
                echo $post;
            endforeach;
            endif;
        endif;
    ?>
</body>
</html>