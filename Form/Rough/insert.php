<?php
    $con= mysqli_connect('localhost', 'root', '');

    if(!$con){
        echo 'Not Connectd to Server';
    }
    if(!mysqli_select_db($con, 'user')){
        echo'Database Not Selected';
    }
    $Name=$_POST['username'];
    $Email= $_POST['email'];
    $Contact=$_POST['contactnumber'];

    $sql="INSERT INTO user_info(username, email,Contact) VALUES('$Name','$Email,'$Contact)";
    if(!mysqli_query($con,$sql)){
        echo'Not Inserted';
    }
    else {
        echo'Inserted';
    }
    header("refresh:3; url=index.htm");

?>

mysqli_select_db('user');
     $retval = mysql_query( $sql, $conn );
     
     if(! $retval ) {
        die('Could not get data: ' . mysql_error());
     }
     
     while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
        echo "USER ID :{$row['UserID']}  <br> ".
           "USERNAME : {$row['Username']} <br> ".
           "EMAIL : {$row['Email']} <br> ".
           "PASSWORD : {$row['UPassword']} <br> ".
           "CONTACT NUMBER : {$row['Contact']} <br> ".
           "PHOTO : {$row['Photo']} <br> ".
           "--------------------------------<br>";
     }
     
     echo "Fetched data successfully\n";
     
     mysql_close($conn);