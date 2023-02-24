<?php 
    include  'connect.php';
    if (isset($_GET['deleteofficer'])){
        $id=$_GET['deleteofficer'];
        $sql= "DELETE FROM `officer` WHERE officer_id=$id";
        $result=mysqli_query($conn,$sql);
        if ($result){
            //echo "deleted succesful";
            header('location:officerdisplay.php');
        }else {
            die(mysqli_error($conn));
        }
    }
?>