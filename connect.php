<?php
    $conn = new mysqli('localhost', 'root','','Student_Management');
    if ($conn){
   // echo"connected";
    } else {
        die(mysqli_error($conn));
    }

?>