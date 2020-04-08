<?php
    include 'db.php';

    $email = $_POST['email'];

    $password = $_POST['password'];

    //check if email exists in db

    $sql = "select * from users where email = \"" . $email . "\"";

    //run the query

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 0){ #no such email address
        echo "<p>This email address is not in our database!</p>";
    }
    else{ #email exists
        while($row = mysqli_fetch_array($result)){
            if ($password == $row['password']) { #correct password
                echo "<p>Correct password .. You are in</p>";

                echo "<p><a href=\"users.php\">Users Page </a></p>";
            }
            else{
                echo "<p>Wrong password</p>";

                echo "<p><a href=\"signin.php\">Sign in page </a></p>";
            }
        }
    }

?>