<style>
    td{
        padding:25px;
    }

</style>

<?php
 echo "<h3>The list of all users!</h3>";

 include 'db.php';

 $sql = "select * from users";


 $html = "<table border=\"1\">";
 $html .= "<tr><td>Name</td><td>Phone Number</td><td>ID</td><td>Operation</td></tr>";


 $result = mysqli_query($conn, $sql);

 if(mysqli_num_rows($result) > 0){ #there are some registered users
     while($row = mysqli_fetch_array($result)){
         $html .= "<tr><td>";
         $html .=  $row['name'] . "</td><td>" . $row['phone'] . "</td><td>". $row['id']. "</td>";
         $html .= "<td><a href=\"delete.php?id=". $row['id']. "\">Delete</a></td></tr>";
         

     }

     $html .= "</table>";
     echo $html;
 }
else{
    echo "<p>No current users available</p>";
}
 
 echo "<a href=\"signup.php\">Sign up page </a>";

?>