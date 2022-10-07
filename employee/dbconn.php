<?php
    $conn = mysqli_connect("localhost","root","","data");
    if(!$conn) {
        echo "Connection Failed!";
        die($conn);
    }
?>