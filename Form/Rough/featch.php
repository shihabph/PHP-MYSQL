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
?> 
    <table><tr><th>USERID</th> <th>USERNAME</th> <th>EMAIL</th> <th>PASSWORD</th> <th>CONTACT NUMBER</th></tr>
    
    <?php 
    
     $sql = "SELECT UserID, Username, Email, UPassword, Contact FROM user_info";
     $result = $conn->query($sql);
     echo">";

if (mysqli_num_rows($result)> 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["UserID"]."</td> <td>" . $row["Username"]."</td> <td>" . $row["Email"]."</td> <td>" . $row["UPassword"]."</td> <td>" . $row["Contact"]."</br>";
        echo"</table>";
    }
} else {
    echo "No Data is Retrived";
}
$conn->close();
?>