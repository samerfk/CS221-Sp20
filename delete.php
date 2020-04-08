<?php


include 'db.php';
$id =  $_GET['id'];

$sql = "delete from users where id = \"$id\"";

//run

if(mysqli_query($conn, $sql)){

    echo "<p>user id " . $id. " was successfully deleted</p>";
}
else{
    echo "<p>error happened</p>";
}

echo "<a href=\"signup.php\">Sign up page </a>";
echo "<a href=\"users.php\">Users </a>";

?>