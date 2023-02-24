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
        <!--Cover section 
        <?php 
include('connect.php');
if(isset($_POST['submit'])){
    $firstname= $_POST['firstname'];
    $lastname= $_POST['firstname'];
    $email= $_POST['email'];
    $message= $_POST['message'];
    $sql="INSERT INTO `messages`(`message_id`, `firstname`, `lastname`, `email`, `message`, `date`) VALUES (null,'$firstname','$lastname','$email','$message',default);";
 
    $result = mysqli_query($conn,$sql);
        if($result){
            echo '<script>alert("Message sent successful")</script>';
          
        }else{
            die(mysqli_error($conn));
        }

    }
?> -->
    <section id="contact-section"> 
        <div class="contact-cover"> 
             <h2> We'd love to hear from you<h2>
        </div>

      
    </section>
    <section>
        <div class= "container">
            <div class="register">
            <div class="grid">
                        <div class="columna">  
                            <div class="offic"> 
                            <h3> Our Offices<h3>
                            <p> Remera, Kigali, Rwanda</p><br>
                            <p> Prince House, 2nd Floor</p><br>
                        </div>  </div> 
                        <div class="columnd">
                             
                             </div>
                        <div class="columnb">
                        <div class="contain">
                            <h3>Get in Touch with Us</h3>
                                <form method="POST"  action="">
                                    <div class="group">
                                            <div class="grid">
                                                <div class="column1">
                                                    <ul> 
                                                        <li> <label>Firstname: </label></li>
                                                        <li> <label>Lastname: </label></li>
                                                        <li> <label>Your Email:  </label> </li>
                                                        <div class="msg"><li> <label>Message</label></li></div>
                                                        
                                                    </ul>
                                                </div>             
                                                <div class="column2">
                                                    <input type="text" name="firstname" autocomplete="off" Required>
                                                    <input type="text"name="lastname" autocomplete="off"  Required >
                                                    <input type="email"name="email" autocomplete="off"  Required > &nbsp; &nbsp; &nbsp; &nbsp; 
                                                    <textarea row="99" name="message" autocomplete="off" cols="73px" Required></textarea>
                                                  
                                                </div>
                                            </div>
                                        <button type="submit" name ="submit"class="button1">Submit</button> 
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