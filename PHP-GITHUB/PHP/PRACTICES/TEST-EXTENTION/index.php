<?php


if(in_array("mysql",PDO::getAvailableDrivers())){
    echo "You have PDO";
}else{
    echo "You don't have ";
}
try{
    $pbo=new PDO("mysql:host=localhost;dbname=users",'root','');
    echo "you success";
}
catch(PDOException $e){
    print $e->getMessage();

}