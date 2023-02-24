<?php 
 include 'connect.php';
 include 'deletemessage';
 include 'header.php' ?>
<!doctype html>

<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Student Management System </title>
  </head>

    <body>
        <div class="container">
        
            <h1 class="headdis">Student Management System</h1><hr>
            <a href="officers.php"><button class="view-btn">ADD NEW OFFICER</button></a>
            <a href="displaying.php" class="logout-link">  <button class="view-btn"> VIEW STUDENTS</button></a> 
            <a href="logout.php" class="logout-link">  <button class="btnlogout">LOGOUT <br> <i class="fa-solid fa-right-from-bracket"></i></button> </a> 
            
            <div class="tabl"> 
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">SN NO.</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message </th>
                        <th scope="col">Message Date</th>
                        <th scope="col">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                          $sql = "SELECT * FROM `messages`";
                          $result = mysqli_query($conn,$sql);
                          if ($result){
                            while($row= mysqli_fetch_assoc($result)){
                              $id = $row ['message_id'];
                              $firstname = $row ['firstname'];
                              $lastname = $row ['lastname'];
                              $email = $row ['email'];
                              $message = $row ['message'];
                              $date = $row ['date'];
                              echo '<tr>
                              <th>'.$id.'</th>
                              <td>'. $firstname.'</td>
                              <td>'. $lastname.'</td>
                              <td>'.$email.'</td>
                              <td>'.$message.'</td>
                              <td>'.$date.'</td>
                              <td><button class= "btn btn-danger"> <a href="deletemessage.php? deletedid='.$id.'" class="text-light text-decoration-none">Delete </a> </button></td>
                              </tr>';
                            }
                          }
                        ?>
                    </tbody>
                </table>
                </div>
        </div>
    </body>
    </html>