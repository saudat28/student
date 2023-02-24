<?php
include 'connect.php';

 $message="";
 if(count($_POST)>0) {
 $result = mysqli_query($conn,"SELECT * FROM officer WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
 $row = mysqli_fetch_array($result);
 if(is_array($row)) {
    session_start();

 $_SESSION["name"] = $row['firstname']; 

 header("Location: displaying.php");
 } else {
 $message = "Invalid Username or Password!";
 }
 }
 if(isset($_SESSION["officer_id"])) {
    
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
                    <li><a href="index.php" class="current"> Home</a></li>
                    <li><a href="student.php"> Students </a></li>
                    <li><a href="office.php">Tost Office </a></li>
                    <li><a href="contact.php"> contact</a></li>
                </ul>
            </div>
        </nav>
        <!--Navigation bar -->       
        <!--Cover section -->
      <section>
        <div class="login-section">
        <div class="grid"> 
            <div class="column">

            </div>
            <div class=columnp>
                <form action="" method="POST">
                    <div class="message"><?php if($message!="") { echo $message; } ?></div>
               <div class="loghr"> <i class="fa-solid fa-user"></i> LOGIN <HR> </div>
                <div class="grid"> 
                        <div class="columnq">
                                <ul>
                                    <li> <label>Email: </label></li>
                                    <li> <label>password: </label></li>
                                </ul>  
                        </div>
                        <div class=columng>
                            <input type="email" name="email" autocomplete="off" Required></input>
                            <input type="password" name="password" autocomplete="off" Required ></input>
                            <button type="submit" name ="submit" class="button2">LOGIN</button>  
                        </div> 
                </div>
                </form>
            </div>
            <div class="column">

            </div>
        </div>
        </div>
      </section>

      <?php
    include 'footer.php';
    ?>
        </footer>
        <script type="text/javascript" src="js/main.js"></script>
        </body>
        </html>