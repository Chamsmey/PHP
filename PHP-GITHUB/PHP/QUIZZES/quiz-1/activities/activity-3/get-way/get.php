<?php
require_once('templates/header.php');

echo "<ul>";

if (isset($_GET["name"])) {
    echo "<li> Your name is " . $_GET["name"];
}
if (isset($_GET["hobbies"])) {
    echo "<li> Your hobbies are " . $_GET["hobbies"];
}
if (isset($_GET["gender"])) {
    echo "<li>" . ($_GET["gender"] == "female" ? "You are a girl" : "You are a boy");
}
echo "</ul>";


require_once('templates/footer.php');
