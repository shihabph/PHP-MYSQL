<?php
$userid=filter_input(INPUT_POST,'id');
$username= filter_input(INPUT_POST,'username');
$email= filter_input(INPUT_POST,'email');
$password= filter_input(INPUT_POST,'password');
$contact= filter_input(INPUT_POST,'contactnumber');
$photo= filter_input(INPUT_POST, 'photo');

$host= "localhost";
$dbusername= "root";
$dbpassword="";
$dbname="user";

$conn=new mysqli($host, $dbusername, $dbpassword, $dbname);

if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_errno());
}
else{
    $sql= "INSERT INTO user_info(UserID, Username, Email, UPassword, Contact, Photo) values('$userid','$username','$email', '$password', '$contact','photo')";
    if($conn->query($sql)){
        echo "New record is Inserted Successfully";
    }
    else{
        echo "Error:" .$sql."<br>".$conn->error;
    }
    $conn->close();
}
 
    ?>
