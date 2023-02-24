<?php 
include 'conn.php';
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
                <form action="login.php" method="POST">
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
                            <button type="submit" name ="submit"class="button2">LOGIN</button>  
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