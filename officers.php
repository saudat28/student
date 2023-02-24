<?php 
include('connect.php');

if(isset($_POST['submit'])){
    $firstname= $_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $sql= "INSERT INTO `officer`(`officer_id`, `firstname`, `lastname`, `email`, `password`) VALUES (null,'$firstname','$lastname','$email','$password')";
    $result = mysqli_query($conn,$sql);
        if($result){
            echo '<script>alert("OFFICER ADDED SUCCESFUL")</script>';
            header('location:officerdisplay.php');
        
        }else{
            die(mysqli_error($conn));
        }

    }
?> 

<!DOCTYPE htlm>
<html>
    <head>
        <meta charset="utf-8">


        <!-- Bootstrap CSS-->
        <script src="https://kit.fontawesome.com/3378d807ec.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
       
        <title>Student Management</title>
    </head>
    <body>
         <!--Navigation bar -->
        <nav class="nav">
            <div class="container">
                <h1 class="logo"><a href="#">TOST COMPANY</a></h1>
                <ul>
                    <li><a href="index.php"> Home</a></li>
                    <li><a href="student.php"> Students </a></li>
                    <li><a href="office.php">Tost Office </a></li>
                    <li><a href="contact.php"> contact</a></li>
                </ul>
            </div>
        </nav>
        <!--Navigation bar -->       
        <!--Cover section -->
    <section>
        <div class= "content">
            <div class="register">
            <div class="grid">
                        <div class="columna">
                          <h1>OFICER REGISTRATION DONE BY ADMIN</h1>
                        </div>   
                        <div class="columnb">
                        <div class="contain">
                            <h1>PLEASE FILL ALL THE BELOW FILLED</h1>
                                <form method="POST"  action="">
                                    <div class="group">
                                            <div class="grid">
                                                <div class="column1">
                                                    <ul> 
                                                        <li> <label>Firstname: </label></li>
                                                        <li> <label>Lastname: </label></li>
                                                        <li> <label>Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label> </li>
                                                        <li> <label>Password </label></li>
                                                    </ul>
                                                </div>             
                                                <div class="column2">
                                                    <input type="text" name="firstname" autocomplete="off" Required>
                                                    <input type="text"name="lastname" autocomplete="off"  Required >
                                                    <input type="email"name="email" autocomplete="off"  Required >
                                                    <input type="text" name="password" autocomplete="off"  Required >
                                                    <div class="confirm"> <i class="fa-light fa-asterisk"></i> Please confirm the officers details before submit</div>
                                                </div>
                                            </div>
                                        <button type="submit" name ="submit"class="button1">ADD OFFICER</button> 
                                    </div>
                                </form>
                        </div>
                        </div>
            </div>
            </div>
        </div> 
    <setion/>
         <?php
    include 'footer.php';
    ?>
        <script type="text/javascript" src="js/main.js"></script>
        </body>
        </html>