<?php
    if(isset($_POST['submit'])){
    header('location:index.php');
    exit();
 }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard/Student</title>
      <link rel="stylesheet" href="home.css">
</head>

<body>
   <div class="head">
     <img src="elms.png" alt="eLms.png">
       <a href="#" id = "a1"> All course</a>
       <a href="#" id = "a2"> Course search</a>
       
<div>
        <a href="#" id="s1" target="">
        <form action="" method="post">
        <button id="out" name="submit" type="button">Log Out</button>
        </form>
        </a>
    </div>
     <div class="wrapper">
            <div class="sidebar">
                <h2>Menu</h2>
                <ul>
                    <li>Dashboard</li>
                    <li>Site Home</li>
                    <li>My Courses</li>
                    <a href="counselling.php" > <li> Counselling </li></a>
                    <a href="list.php" > <li> Schedule Update </li></a>
                 
               </ul>
            </div>
        </div>
    <div class="container">

        <div class="card1">
            <input type="file" type="file" id="file1">

            <h1>
                <?php 
            
        session_start();
        echo $_SESSION['f_name'];
        echo " </br>" ;
              ?>
            </h1>
            <a href="mailto: $_SESSION['f_email']" id="e"> <?php 
           echo   $_SESSION['f_email'] ; ?>

            </a>

            <a href="#" id="a3">Messages</a>
        </div>
        <div class='card'>
         
           <?php 
            
                $con = mysqli_connect("localhost","saif","","uiu");
                $a = "SELECT * FROM course WHERE f_id = '$_SESSION[f_id]'";
               $ar = mysqli_query($con, $a);
                $arr = mysqli_num_rows($ar);
                while($aar = mysqli_fetch_assoc($ar)){
                 echo  "<h1> <a href=#>" .$aar['c_name'] . "</a></h1>";
                 
                }
                ?>
        </div>
        </div>

    </div>
  
      
</body>

</html>