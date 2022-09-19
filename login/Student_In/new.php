<?php
session_start();
$con = mysqli_connect("localhost","saif","","uiu");
//echo "<h1>" . $_SESSION['sit'] . "</h1>";
$id = $_SESSION ['id'] ;
$fid = $_SESSION['f_id'] ;
$sa = "SELECT * FROM faculty WHERE Id = '$fid'";
$re = mysqli_query($con,$sa);
$nu = mysqli_num_rows($re);
$da = mysqli_fetch_assoc($re);
$as = $da['Name'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Page</title>
    <link rel="stylesheet" href="new.css">
</head>
<body>
    <div class="container">
        <div class="write">
        <?php
       $sql = "SELECT * FROM counselling_info WHERE s_id = '$id' AND f_id = '$fid' AND status NOT LIKE 'Rejected'";
       $res = mysqli_query($con,$sql);
       $data = mysqli_num_rows($res);
       $num = mysqli_fetch_assoc($res);
            if($num==NULL){
               echo '<script type="text/javascript">
                alert("Your schedule is not found. Please fill the form of application");
                </script>';
                header("location:faculty.php");
                
            }
        
            else{
            echo "
            <h3> To : " . $as. "</br>
            <h3> Course Name : " . $num['course']. "</br>
            <h3> Counselling Date : " . $num['date']. "</br>
            <h3> Counselling Time : " . $num['s_time'] . " to " . $num['e_time']. "</br>
            <h3> Current Status :  <span>" . $num['status']. "</span> </br>";
            }
            ?>
            
        </div>
        
    </div>
</body>
</html>