
<?php
 $conn = mysqli_connect("localhost","saif","","uiu");
$id=$_GET['id'];

 $qu = "UPDATE counselling_info SET status ='Accepted' WHERE Id = '$id'";
  $my = mysqli_query($conn, $qu);
 
  echo 'window.alert("Counselling Schedule is accpeted")';
  header("Location:counselling.php");


?>
