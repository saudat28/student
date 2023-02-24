<?php 
    include  'connect.php';
    if (isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];
        $sql= "DELETE FROM `students` WHERE student_id=$id";
        $result=mysqli_query($conn,$sql);
        if ($result){
            //echo "deleted succesful";
            header('location:displaying.php');
        }else {
            die(mysqli_error($conn));
        }
    }
?>