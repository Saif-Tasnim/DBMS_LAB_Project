<?php
session_start();
$id = $_GET['id'];
$_SESSION['f_id'] = $id;

$conn = mysqli_connect("localhost","saif","","uiu");
$sql = "SELECT * FROM faculty WHERE Id = '$id'";
$res = mysqli_query($conn,$sql);
$data = mysqli_num_rows($res);
$row = mysqli_fetch_assoc($res);


 $course = "" ;
 $sum = "" ;
 $des = "" ;
 $date = "" ;
 $s_time = "" ;
 $e_time = "" ;
if(isset($_POST['submit'])){
    
    $s_id = $_POST['id'];
    $course = $_POST['course'];
    $sum = $_POST['sum'];
    $des = $_POST['des'];
    $date= $_POST['date'];
    $s_time=$_POST['s'];
    $e_time =$_POST['e'];
    $st = "Pending";

    $query = "INSERT INTO counselling_info (f_id,	s_id, course, summary, description,date,s_time,e_time,status)
     VALUES ('$id' , '$s_id', '$course' , '$sum','$des' , ' $date' , '$s_time' , '$e_time', '$st')";
    
     $query_run = mysqli_query($conn,$query);
    
    if($query_run){
        $_SESSION['sit'] = "Your Request Is Pending. Wait For Approval";
       header('location:new.php');
       
    }
    
    else{
        echo "Massive Error";
    }
    

    
  }



?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> Counselling Application </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
    </script>
    <link rel="stylesheet" href="form.css">
</head>
<style media="screen">
    label {
        display: block;
    }
</style>

<body>
    <div class="head">
        <img src="elms.png" alt="eLms.png">
        <a href="#" id="a1"> All course</a>
        <a href="#" id="a2"> Course search</a>

    </div>
    <hr>
    <header> Counselling Application </header>
    <div class="first">
        <h1> <label id="fac"> To : <?php echo $row['Name']; ?></label></h1>
        <table border=1px cellspacing=0 cellpadding=20px>
            <thead>
                <tr>

                    <th scope="col">Day</th>
                    <th scope="col">Schedule</th>
                </tr>
            </thead>
            <tbody>
                <?php 
$id = $_GET['id'];
$conn = mysqli_connect("localhost","saif","","uiu");
$sql = "SELECT * FROM faculty_day WHERE f_id = '$id'";
$res = mysqli_query($conn,$sql);
$data = mysqli_num_rows($res);
while($row = mysqli_fetch_assoc($res)){
    echo "<tr>
        <td>" . $row['day'] ."</td>
        <td>" .$row['s_time'] . " - " . $row['e_time']."</td>
        </tr>";
}
      
      ?>
            </tbody>
        </table>
    </div>

    <div class="container">
        <form class="main" action="" method="post" autocomplete="off">

            <label>ID </label> <input type="number" id="number" name="id" value="<?php echo $_SESSION['id']; ?>" readonly>

            <label for="">Course Name</label>

            <?php
            $id = $_GET['id'];
           $conn = mysqli_connect("localhost", "saif","","uiu");
            $sql = "SELECT * FROM course WHERE f_id = '$id' " ;
            $res = mysqli_query($conn, $sql);
            $data = mysqli_num_rows($res);
            echo "<select name = 'course' required>";
            echo " <option selected hidden> Select Course </br>";
            while($row = mysqli_fetch_assoc($res)){
                $c = $row['c_name'];
               echo "<option value = '$c'>" . $c . "</br>";
            }
            echo " <option value = 'others'> Other </br>";
            echo "</select>";
            
            ?>

            <label>Summary</label>
            <input type="text" id="sum" name="sum" required value="">
            <label>Describe your problems briefly</label>
            <input type="text" id="des" name="des" required value="">

            <label>Select Date</label><br>
            <input type="date" name="date" id="demo"><br><br>


            <label>Start Time</label>
            <input type="time" name="s" require><br>


            <label>End Time</label>
            <input type="time" name="e" required><br><br>

            <input type="submit" name="submit">
            <input type="reset" name="reset">


        </form>

    </div>
    <br><br><br><br>
    <hr>
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text" style="background-color: rgba(0, 0, 0, 0.2);">
            <p class="f"> Featured By : </p>
            <h3 class="text-dark">TEAM LORDS</h3>
        </div>
        <!-- Copyright -->
    </footer>
    <script>
        var date = new Date();
        var tdate = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getUTCFullYear();
        if (tdate < 10) {
            tdate = '0' + tdate;
        }
        if (month < 10) {
            month = '0' + month;
        }

        var minDate = year + "-" + month + "-" + tdate;
        document.getElementById("demo").setAttribute('min', minDate);
    </script>
</body>

</html>