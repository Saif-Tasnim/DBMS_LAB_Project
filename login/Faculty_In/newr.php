<?php
$conn = mysqli_connect("localhost","saif","","uiu");
$id=$_GET['id'];

 $qu = "UPDATE counselling_info SET status ='Rejected' WHERE Id = '$id'";
  $my = mysqli_query($conn, $qu);
 
  
  header("Location:counselling.php");


?>