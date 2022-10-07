<?php
require "dbconn.php";

if(isset($_POST['action'])){
    if($_POST['action']=="insert"){
        insert();
    }
    else if($_POST["action"]=="edit"){
        edit();
    }
    else if($_POST['action']=="insert11"){
        insert11();
    }
    else{
        delete();
    }
}
function insert(){
    global $conn;
    $empid=$_POST['empid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    //$password=$_POST['password'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $query="INSERT INTO `users_details` (`user_Id`, `empid`, `user_name`, `user_email`, `user_phone`, `user_address`, `time`) VALUES (NULL, '$empid', '$name', '$email', '$phone', '$address', current_timestamp());";
    mysqli_query($conn,$query);
    echo "Inserted Sucessfully";
}
function insert11(){
    global $conn;
    $empid=$_POST['empid'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

    $query="INSERT INTO `regis` (`regis_ID`, `emp_Id`, `name`, `email`, `password`, `role`, `phone`, `address`, `time`) VALUES (NULL, '$empid', '$name', '$email', '$password', '$role', '$phone', '$address', current_timestamp());";
    mysqli_query($conn,$query);
    echo "Inserted Sucessfully";
}
function edit(){
    global $conn;

    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
  
   $query="UPDATE users_details SET user_name='$name',user_email='$email',user_password='$password' ,user_phone='$phone',user_address='$address' WHERE user_Id=$id";
   mysqli_query($conn,$query);
   echo "Updated Sucessfully";
}

function delete(){
    global $conn;
    $id=$_POST["action"];
    $query="DELETE FROM users_details WHERE user_Id=$id";
    mysqli_query($conn,$query);
    echo "Deleted Sucessfully";
}
?>