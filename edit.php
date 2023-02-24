<?php 
include('connect.php');
    $id = $_GET['updateid'];
if(isset($_POST['submit'])){
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    
    $sql= "UPDATE `students` SET  firstname ='$firstname', lastname='$lastname',email='$email',mobile='$mobile',`date`='default' WHERE  student_id='$id'";
    $result = mysqli_query($conn,$sql);
        if($result){
           //echo "updatedsuccesful";
           header('location:displaying.php');
        }else{
            die(mysqli_error($conn));
        }

    }


    $sql = "SELECT * FROM `students` where student_id='$id'";
    $result = mysqli_query($conn,$sql);
    if ($result){
      while($row= mysqli_fetch_assoc($result)){
        $id = $row ['student_id'];
        $firstname = $row ['firstname'];
        $lastname = $row ['lastname'];
        $email = $row ['email'];
        $mobile = $row ['mobile'];
        $date = $row [''];
?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Crud operation</title>
  </head>
  <body>
        <div class= "container">
        <div class="content">
        <form method="POST" action="">
        <div class="contain">
            <h1>UPDATING USER INFORMATION</h1>
            <div class="group">
                <label>Name: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="firstname" value="<?php echo $name?>" class="input" placeholder=" name" autocomplete="off" > <br>
                <label>lastname: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="lastname" value="<?php echo $name?>" class="input" placeholder=" name" autocomplete="off" > <br>
                <label>Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="email"name="email" value="<?php echo $email;?>" placeholder="@email" autocomplete="off" ><br>
                <label>Mobile:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="mobile" value="<?php echo $mobile;?>" placeholder="mobile number" autocomplete="off" ><br>
                <button type="submit" name ="submit"class="button1">Update</button>
             </div>
        </div>
        </form>
        </div>
        </div> 
        <?php }}?>