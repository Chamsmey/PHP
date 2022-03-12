<?php
require_once 'includes/header.php';
?>
<div class="container">

    <form class="form-control" method="POST">

        <input type="text" class="form-control mt-2" name="name" placeholder="Your name ..">


        <input type="email" class="form-control mt-2" name="email" placeholder="Email ..">


        <input type="password" class="form-control mt-2" name="password" placeholder="password ..">


        <input type="textarea" class="form-control mt-2" name="message" placeholder="message">
        <div class="row">
            <div class="col col-6>">
                <div class="form-group">
                    <h3 class="text text-bold">Class</h3>
                </div>
                <input type="radio" name="class" id="A" value="WEB 2022 B"><label for="A">WEB 2022 A</label><br>
                <input type="radio" name="class" id="B" value="WEB 2022 A"><label for="B">WEB 2022 B</label><br>
                <input type="radio" name="class" id="C" value="WEB 2022 C"><label for="C">WEB 2022 C</label><br>
            </div>
            <div class="col col-6">
                <div class="form-group">
                    <h3 class="text text-bold">Province</h3>
                </div>
                <input type="checkbox" name="province[]" id="bmc" value="Beanteay Meanchey"><label for="bmc">Beanteay Meanchey</label><br>
                <input type="checkbox" name="province[]" id="kd" value="Kondal"><label for="kd">Kondal</label><br>
                <input type="checkbox" name="province[]" id="tk" value="Takeov"><label for="tk=">Takeov</label><br>
                <input type="checkbox" name="province[]" id="t  pt" value="kom pong Tom"><label for="kpt">Kom pong Tom</label><br>
            </div>
            <div class="col col-6">
                <div class="form-group">
                    <h3 class="text text-bold">Major</h3>
                </div>
                <select name="subject" id="">
                    <option value="IT">IT</option>
                    <option value="Engeneer">Engeneer</option>
                    <option value="Co">co</option>
                </select>
            </div>
        </div>


        <div class="form-group mt-2"><button type="submit" class="btn btn-primary">Submit</button></div>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') :
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $message = $_POST['message'];
        $class = $_POST['class'];
        $province = $_POST['province'];
        $subject = $_POST['subject'];
        if (!empty($name) and !empty($email) and !empty($password) and !empty($message) and !empty($class) 
        and !empty( $province ) and !empty($subject)
        
        ) {

    ?>
            <div class="container mt-5">
                <div class="card">
                    <div class="card header bg-warning">
                        <h2 class="text text-white">Result</h2>
                    </div>
                    <div class="card-body">
                        <p class="text">Your name :<?php echo $name; ?></p>
                        <p class="text">Email :<?php echo     $email; ?></p>
                        <p class="text">Password :<?php echo $password; ?> </p>
                        <p class="text">Feadback :<?php echo $message; ?></p>
                    </div>
                </div>
            </div>
    <?php
        } else {
            echo 'all input must be valid';
        }
    endif;
    ?>
</div>
<?php
require_once 'includes/footer.php';
