<?php 
include 'connect.php';
include 'header.php';
    $id = $_GET['updateiting'];
if(isset($_POST['submit'])){
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $email= $_POST['email'];
    $password= $_POST['password'];
   
    $sql= "UPDATE `officer` SET  firstname='$firstname', lastname='$lastname', email='$email',password='$password' where officer_id='$id' ";
    $result = mysqli_query($conn,$sql);
        if($result){
           //echo "updatedsuccesful";
           header('location:officerdisplay.php');
        }else{
            die(mysqli_error($conn));
        }

    }

    $sql = "SELECT * FROM `officer` where officer_id='$id'";
    $result = mysqli_query($conn,$sql);
    if ($result){
      while($row= mysqli_fetch_assoc($result)){
        $id = $row ['officer_id'];
        $firstname = $row ['firstname'];
        $lastname = $row ['lastname'];
        $email = $row ['email'];
        $password = $row ['password'];

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
    <title>Student management System</title>
  </head>
  <body>
  <body>
        <div class= "container">
        <div class="content">
        <form method="POST" action="">
        <div class="contain">
            <h1>UPDATING OFFICER INFORMATION</h1>
            <div class="group">
                <label>Firstname: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="firstname" value="<?php echo $firstname?>" class="input"  autocomplete="off" > <br>
                <label>Lastname: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="lastname" value="<?php echo $lastname?>" class="input"  autocomplete="off" > <br>
                <label>Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="email"name="email" value="<?php echo $email;?>"  autocomplete="off" ><br>
                <label>Password:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="text" name="password" value="<?php echo $password;?>"  autocomplete="off" ><br>
                <button type="submit" name ="submit"class="button1">Update</button>
             </div>
        </div>
        </form>
        </div>
        </div> 
       <?php }}?>
        