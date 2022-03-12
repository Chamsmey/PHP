<?php
require_once('templates/header.php');

echo "<ul>";

if (isset($_POST["name"])) {
    echo "<li> Your name is " . $_POST["name"];
}
if (isset($_POST["hobbies"])) {
    echo "<li> Your hobbies are " . $_POST["hobbies"];
}
if (isset($_POST["gender"])) {
    echo "<li>" . ($_POST["gender"] == "female" ? "You are a girl" : "You are a boy");
}
echo "</ul>";


require_once('templates/footer.php');
