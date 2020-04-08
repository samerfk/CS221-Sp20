<?php
     include 'db.php'; // bring the other file

    $name = $_POST['name'];

    $email = $_POST['email'];

    $phone = $_POST['phone'];

    $password = $_POST['password'];

   



     echo "<p>Welcome " . $name . "</p>";
     echo "<p>The email address you used is  " . $email . "</p>";


     //check if email address is already in the database

     $sql = "select * from users where email =\"$email\" ";

     $result = mysqli_query($conn, $sql);

     // if number of rows > 0, the email address already exists

     if (mysqli_num_rows($result) > 0 ){
         echo "<p>This email address is already in use. Please choose another email address</p>";
     }
     else{
         //put sql code in a variable
     
        $sql ="insert into users(name, email, phone, password) values(\"$name\", \"$email\", \"$phone\", \"$password\")";
        
        //check if query is OK
        if(mysqli_query($conn, $sql)){
            echo "<p>Record inserted successsfully</p>";
        }
        else{
            echo "<p>Error happened: " . mysqli_error($conn) . "</p>";
        }
         
     }


     

     echo "<a href=\"signup.php\">Sign up page </a>";
?>