<?php 
    include  'connect.php';
    if (isset($_GET['deletedid'])){
        $id=$_GET['deletedid'];
        $sql= "DELETE FROM `messages` WHERE message_id=$id";
        $result=mysqli_query($conn,$sql);
        if ($result){
            //echo "deleted succesful";
            header('location:messages.php');
        }else {
            die(mysqli_error($conn));
        }
    }
?>