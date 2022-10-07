<?php
$title= "| Registration Validate";
  require_once('common_files/header.php');
?>
<?php

    include('dbconn.php');

    $email = $_POST['email'];
    $phone=$_POST['phone'];

 

   $sql = "SELECT * FROM regis WHERE email ='$email' AND phone='$phone';";
   $result = mysqli_query($conn,$sql);

    $rowcount = mysqli_num_rows($result);

    if($rowcount == 1) {
        $row = mysqli_fetch_assoc($result);
        echo "Yeah! User exists!!!";
  
    } else {
        
      
    }

?>