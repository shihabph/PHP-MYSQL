<?php

    $host= "localhost";
    $dbusername= "root";
    $dbpassword="";
    $dbname="user";

    //Creating Connection
    $conn =mysqli_connect($host, $dbusername, $dbpassword, $dbname);
     //Checking Connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $result = mysqli_query($conn,"SELECT *FROM user_info");
?>
<!DOCTYPE html>
<html>
<head class=H1><h1>DATA RETRIVALS</h1>
</head>
<link rel="stylesheet" href="dist/css/retrive.css">
<?php
if (mysqli_num_rows($result) > 0) {
?>
    <table>
    <tr><th>USERID</th> <th>USERNAME</th> <th>EMAIL</th> <th>PASSWORD</th> <th>CONTACT NUMBER</th></tr>
    
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    echo "<tr><td>" . $row["UserID"]."</td> <td>" . $row["Username"]."</td> <td>" . $row["Email"]."</td> <td>" . $row["UPassword"]."</td> <td>" . $row["Contact"]."</br>";
        }
        $i++;
    }
    else {
        echo"No Result Found";
    }
    ?>
    </table>

</html>