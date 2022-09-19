<?php
session_start();
$fid = $_SESSION['f_id'];
$con = mysqli_connect("localhost","saif","","uiu");
if($_SERVER["REQUEST_METHOD"] == "POST"){
if(isset($_POST['btn1'])){
  
    $day =  $_POST['day'];
    $stime =  $_POST['s'];
    $etime =  $_POST['e'];
   
    $sql = "INSERT INTO faculty_day(f_id , day, s_time, e_time) VALUES('$fid' , '$day' , '$stime' , '$etime')";
    $res = mysqli_query($con, $sql);        
    if($res){
         echo  '<script type = "text/javascript">alert("Your Scheduled successfully uploaded")</script>';
    }
    
 }
    
   else if(isset($_POST['btn2'])){
  
    $day =  $_POST['day'];
    $stime =  $_POST['s'];
    $etime =  $_POST['e'];
   
    $sql = "UPDATE faculty_day
           SET s_time = '$stime' , e_time = '$etime' , day = '$day'
           WHERE f_id = '$fid'";
    $res = mysqli_query($con, $sql);        
    if($res){
         echo  '<script type = "text/javascript">alert("Your Scheduled successfully updated")</script>';
    }
    
 }
    
    else if(isset($_POST['btn3'])){
   
    $sql = "DELETE
           FROM faculty_day
           WHERE f_id = '$fid'";
    $res = mysqli_query($con, $sql);        
    if($res){
         echo  '<script type = "text/javascript">alert("Your Scheduled successfully deleted")</script>';
    }
    
 }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update List</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
    </script>
    <link rel="stylesheet" href="list.css">
</head>
<body>
       <div class="head">
     <img src="elms.png" alt="eLms.png">
       <a href="#" id = "a1"> All course</a>
       <a href="#" id = "a2"> Course search</a>
       
    </div>
    <h1>Update Your Counselling Schedule</h1>
    <ul type="radix">It is necessary for every trimester staring</ul>
    
    <hr>
    <a href="#" id="aa">Your Counselling Scheduled</a>
    
    <form action="" method="POST">
        
    <select name="day" id="time"> 
    <option value= " " selected hidden>Select Day</option> 
    <option value="Saturday">Saturday</option>
    <option value = "Sunday">Sunday</option>
    <option value="Tuesday">Tuesday</option>
    <option value="Wednesday">Wednesday</option>
</select>
   <div class="time">

       <label for="s_time" id="s">Starting Time :  </label>
   <input type="time" id = "time" name="s">
           <label for="e_time" id="e">Ending Time :  </label>
   <input type="time" id = "time" name="e"> 
   <button type="submit" class="btn btn-success" name="btn1" value = "yes">ADD</button>
   <button type="submit" class="btn btn-success" name="btn2" value="update">UPDATE</button>
  <button type="submit" class="btn btn-danger" name = "btn3" value="no">Delete Last Trimester Schedule</button> 
   </div>
</form>
   <br><br><br>
   <hr> 
 <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text" style="background-color: rgba(0, 0, 0, 0.2);">
   <p class = "f"> Featured By : </p>
    <h3 class="text-dark">TEAM LORDS</h3>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>