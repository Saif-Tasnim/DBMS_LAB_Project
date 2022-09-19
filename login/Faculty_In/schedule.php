<?php

$name = $_SESSION['f_name'];
$id = $_SESSION['f_id'];
$day = " ";
$re1;
$s_time = " ";
$e_time = " ";

if($_SERVER["REQUEST_METHOD"] == "POST"){
if(!empty($_POST['select']) && !empty($_POST['s']) && !empty($_POST['s'])){
$day = $_POST['select'];
$s_time = $_POST['s'];
$e_time = $_POST['e'];
$con = mysqli_connect("localhost","saif","","uiu");
$sql = "INSERT INTO schedule(f_id,f_name,day,s_time,e_time)
VALUES('$id','$name' , '$day','$s_time', '$e_time')";
$res= mysqli_query($con,$sql);
if($res){
echo '<script type="text/javascript">
    alert("Data saved")
</script>';
}
}

}
?>




<body>
    <div class="container">
        <form action="" method="post">
            <label for="schedule">
                <h2>Select Day :</h2>
            </label>
            <select name="select" id="schedule">
                <option value="saturday" name="day">Saturday</option>
                <option value="sunday" name="day">Sunday</option>
                <option value="tuesday" name="day">Tuesday</option>
                <option value="thursday" name="day">Wednseday</option>
            </select>

            <br><br>


            <h3>Start Time</h3> <input type="time" name="s" required>
            <h3>End Time</h3> <input type="time" name="e" required> <br><br>
            <div>
                <button type="submit" name="submit"> Submit </button>
            </div>
        </form>
    </div>
</body>
