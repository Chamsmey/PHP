<html>
    <head>
    <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
    <?php 

    function getPostFromUser($post)
    {
        return isset($_POST[$post]) ? $_POST[$post] : null;
    }

    $name = getPostFromUser('name');
    $club = getPostFromUser('club');
    $time = getPostFromUser('time');
    $skills = getPostFromUser('skill');
    ?>
    <div class="result">
        <?php 
            if(($name!=null) and ($club!=null) and ($time!= null) and ($skills!=null )){
                    echo '<div class="head"> <img src="images/award.png" alt=""></div>';
                    echo '<div class="body"><h2>'.'Thanks '.$name." !!".'</h2></div>';
    
                
                    echo '<div class="para"><p>'.'We received your application for the '.$club.'</p></div>';
                    $message ="You are ";
                   
                    foreach($skills as $skill){
        
                            $message = $message.' '.$skill;
                        }
                        echo '<div class="para"><p>'.$message.'</p></div>';
                        echo '<div class="para"><p>'.'you will be  available on '.$time.'</p></div>';
            }else{
                echo '<div class="body"><h2>' .'Sorry you did not fill all input'.'</h2></div>' ;

            }
         ?>
    </div>
</body>
</html>











