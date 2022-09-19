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
       <a href="#" id = "aa"> All course</a>
       <a href="#" id = "ab"> Course search</a>
        <a href="#" id="s1" target="">
            <button id="out" name="submit" type="submit" method="post">Log Out</button>
        </a>
   </div>
   <!--  <div class="wrapper">
           <div class="sidebar"> -->       
           <div class="wrapper">
            <div class="sidebar">
                <h2>Menu</h2>
                <ul>
                    <li>Dashboard</li>
                    <li>Site Home</li>
                    <li>My Courses</li>
                    <a href="faculty.php" > <li> Counselling </li></a>
                   
                    <li class="dropdown" ><a href="#" id="fir" style="color: #bdb8d7">Sharing</a>
                     <ul>
                         <li><a href="notes/index.php" 
                         style=" background: #333239;color: #bdb8d7;"> Note Share</a></li>
                         <li><a href="Blog/index.php" style=" background: #333239;color: #bdb8d7;">Blog</a></li>
                     </ul>
                    </li>
                </ul>
            
               </div>
    </div>
        
   <div class="container">
    <div class="card1">
   <input type="file" type = "file" id = "file1">
   <h1>
        <?php
        session_start();
        echo   $_SESSION['id'];
        echo " ";
        echo $_SESSION['name'];
        echo "<br>";
      
        ?>
    </h1>
    <a href="#" id = "a3">Messages</a>    
    </div>
    
    </div>
    
 <footer>
  <!-- Copyright -->
  <div class="text">
   <p class = "f"> Featured By : </p>
    <h3 class="text-dark">TEAM LORDS</h3>
  </div>
  <!-- Copyright -->
</footer>
</body>

</html>