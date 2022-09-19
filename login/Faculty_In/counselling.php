<?php
 
session_start();
 $conn = mysqli_connect("localhost","saif","","uiu");

   if(isset($_POST['button'])){
   $avail = $_POST['radio'];
   $fid = $_SESSION ['f_id'];
   $query = "UPDATE faculty SET Availability = '$avail' WHERE Id = '$fid'";
   $query_run = mysqli_query($conn,$query);
   if($query_run){
   if($avail == "Yes"){
   $_SESSION['y'] = "Yes";
   }
   else if($avail == "No"){
   $_SESSION['y']= "No";
   }

 

   echo '<script type="text/javascript">
       alert("Your availaibility is updated")
   </script>';
   }

   }

//echo "Today is " . b


//if(isset($_POST['btn1'])){
//    $id = $_POST['id'];
//    $qu = "UPDATE counselling_info SET status = Accepted WHERE Id = '$id'";
//    $my = mysqli_query($conn, $qu);
//    if($my){
//         echo '<script type="text/javascript">
//       alert("Counselling Schedule is seleted");
//   </script>';
//    }
//}

$con = mysqli_connect("localhost","saif","","uiu");
$mm=date("m");
  $int_mm = (int)$mm;
 // echo $int_mm;

$dd=date("d");
  $int_dd = (int)$dd;
 // echo $int_dd;

$sql = "SELECT * FROM counselling_info ";
$res = mysqli_query($con,$sql);
$num = mysqli_num_rows($res);
while($data = mysqli_fetch_assoc($res)){
    $date = $data['date'];
    $result = sscanf($date, '%d-%d-%d');
    
//    echo  $result['0'] . "  ";
//    echo  $result['1'] . "  ";
//    echo  $result['2'] . "<br>";
    
    
    $int_m = (int)$result['1'];
     
    $int_d = (int)$result['2'];
    
    if($int_mm >= $int_m){
        if($int_dd >  $int_d ){
            $sa = "DELETE FROM counselling_info WHERE date = ' $date'";
            $sd = mysqli_query($con,$sa);
             echo '<script type="text/javascript">
       alert("Previous Date Has Been Deleted ");
   </script>';
           
        }
        
        else{
           
        }
    }
    
    else{
       
    }
    

    
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Counselling Session</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
    </script>
     <link rel="stylesheet" href="counselling.css">
</head>

<body>
 <div class="head">
     <img src="elms.png" alt="eLms.png">
       <a href="#" id = "a1"> All course</a>
       <a href="#" id = "a2"> Course search</a>

    </div>
 
<header>
    <?php
    $avail = $_SESSION['y'];
         if($avail=="Yes"){
        echo "<h4 class='h'> Current Status : Active Now  </h4>";

    }
    else if($avail=="No"){
        echo "<h4 class='h'> Current Status : Not Active  </h4>";
  

    }

    ?>

</header>
<div class="container">
        <h2 class="h_f">Are You Available At this Moment ? </h2>
        <form  method="post">
            <div class="can">
                <h3 class="h_s"> <input type="radio" name="radio" value="Yes" > Yes </h3><br>
                <h3 class="h_t"> <input type="radio" name="radio" value="No"  > No </h3> <br>
            </div>

            <button type="submit" name="button" id=button>Ok</button>
        </form>
        
        
       <?php require('schedule.php'); ?>

        <div class="h2">
            <h2> Counselling Request </h2>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Student Id</th>
                    <th>Course</th>
                    <th>Problem Summary</th>
                    <th>Time</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>

               <?php
                $fid = $_SESSION ['f_id'];
                $conn = mysqli_connect("localhost","saif","","uiu");
                $sql = "SELECT * FROM counselling_info WHERE f_id = '$fid' order by Id DESC";
                $res = mysqli_query($conn, $sql);
                $num = mysqli_num_rows($res);
                while($data = $res->fetch_assoc()){
                   $id = $data['Id'];
                
            echo "<tr>
                    <td>".$data['s_id']. "</td>
                    <td>".$data['course']."</td>
                    <td>".$data['summary']."</td>
                    <td>".$data['s_time']. " to " .$data['e_time']. "</td>
                    <td>".$data['date']."</td>
                    <td>".$data['status']."</td>
                    <td>
                   <a href='new.php?id=$id'><input type = 'submit' class='btn btn-success' name = 'btn1' value = 'Accept'  > </a> 
                     </td>
                      <td>
                    <a href='newr.php?id=$id'><input type='submit' class='btn btn-danger' name='btn1' value= 'Reject' ></a>
                    </td>
                  </tr>";
                }
                

                ?>
             
            </tbody>
        </table>
    </div>
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