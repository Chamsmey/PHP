<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php
        function getInfo($post)
        {
            return isset($_POST[$post]) ? $_POST[$post] : null;

        }   ;
        $name = getInfo('name');
        $email = getInfo('email');
        $password= getInfo("password");
        $number = getInfo('number');
        $message = getInfo('message');
        $province = getInfo('province');
        $subjects = getInfo('subject');
        $gender = getInfo('gender');
    ?>
        <tr>
            <td><?php echo $name;?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $password; ?></td>
            <td><?php echo $number; ?></td>
            <td><?php echo $message ; ?></td>
            <td><?php echo $gender; ?></td>
            <td>
            <?php
                foreach( $subjects as $subject){
                    echo $subject.' | ';
                }
              ?>
            </td>
            <td><?php echo $gender ?></td>
        </tr>
 
</table>
<?php require_once 'templates/footer.php' ?>