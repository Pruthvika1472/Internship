<?php
$title= "| Login Validate";
  require_once('common_files/header.php');
?>
<?php

    include('dbconn.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    // echo $password."<br>";
    // echo $username."<br>";

   $sql = "SELECT * FROM users_details WHERE user_email ='$username' AND BINARY user_password='$password';";
   $result = mysqli_query($conn,$sql);

    $rowcount = mysqli_num_rows($result);

    //echo $rowcount;

    if($rowcount == 1) {
        $row = mysqli_fetch_assoc($result);
        //echo "Yeah! User exists!!!";
        include('empmanagement.php');
    } else {
       // echo "User does not exists!!!";
       echo "Invalid credentials";
    }

    //print_r($result); 

    // from mysqli query
    echo "<br>";
    //print_r($row); from mysqli num rows

    // echo $result; from mysqli query ::
    
?>