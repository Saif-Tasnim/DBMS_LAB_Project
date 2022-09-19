<?php
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
            echo "<h1>Deleted From DATABASE</h1>";
        }
        
        else{
            echo "<h1>No Date Found</h1>";
        }
    }
    
    else{
        echo "<h1>No Month Found</h1>";
    }
    

    
}

?>