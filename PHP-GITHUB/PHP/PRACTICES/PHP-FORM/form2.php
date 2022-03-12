<?php
require_once 'includes/header.php';
?>
<div class="container">

    <form class="form-control" method="POST">
        <div class="form-group">
            <input class="form-control" type="color" name="color" id=""> <br>
            <input class="form-control" type="date" name="date" id=""><br>

            <div class="form-group">
                <h3 class="text text-bold">Major</h3>
            </div>
            <select name="subject" id="">
                <option value="IT">IT</option>
                <option value="Engeneer">Engeneer</option>
                <option value="Co">co</option>
            </select>


        </div>
        <div class="row">
            <div class="col col-6>">
                <div class="form-group">
                    <h3 class="text text-bold">Class</h3>
                </div>
                <input type="radio" name="class" id="A" value="WEB 2022 B" checked><label for="A">WEB 2022 A</label><br>
                <input type="radio" name="class" id="B" value="WEB 2022 A"><label for="B">WEB 2022 B</label><br>
                <input type="radio" name="class" id="C" value="WEB 2022 C"><label for="C">WEB 2022 C</label><br>
            </div>
            <div class="col col-6">
                <div class="form-group">
                    <h3 class="text text-bold">Province</h3>
                </div>
                <input type="checkbox" name="province[]" id="bmc" value="Beanteay Meanchey" checked><label for="bmc">Beanteay Meanchey</label><br>
                <input type="checkbox" name="province[]" id="kd" value="Kondal"><label for="kd">Kondal</label><br>
                <input type="checkbox" name="province[]" id="tk" value="Takeov"><label for="tk=">Takeov</label><br>
                <input type="checkbox" name="province[]" id="tpt" value="kom pong Tom"><label for="kpt">Kom pong Tom</label><br>
            </div>
            
        </div>


        <div class="form-group mt-2"><button type="submit" class="btn btn-primary">Submit</button></div>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') :
        $color = $_POST['color'];
        $date= $_POST['date'];
        $class = $_POST['class'];
        $provinces = $_POST['province'];
        $subject = $_POST['subject'];
        if (
            !empty( $color) and !empty($date) and !empty($class)
            and !empty($provinces) and !empty($subject)

        ) {

    ?>
            <div class="container mt-5">
                <div class="card">
                    <div class="card header bg-warning">
                        <h2 class="text text-white">Result</h2>
                    </div>
                    <div class="card-body">
                        <p class="text">Color :<?php echo  $color; ?></p>
                        <p class="text">Class :<?php echo     $class; ?></p>
                        <p class="text">Major :<?php echo $subject; ?> </p>
                        <p class="text">province :<?php foreach($provinces as $province):echo $province.' ';endforeach?></p>
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
