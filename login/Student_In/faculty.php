<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Faculty Member List</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384 gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="faculty.css">
</head>
<body>
     <div class="head">
     <img src="elms.png" alt="eLms.png">
       <a href="#" id = "a1"> All course</a>
       <a href="#" id = "a2"> Course search</a>
       
    </div><br><br>
    <hr>
   <h1>Faculty Member Details</h1>
 <table class = "table table-striped">
   <thead>
    <tr>
         <th>Name</th>
         <th>Designation</th>
         <th>Room</th>
         <th>Availability</th>
         <th> Counselling </th>
     </tr>
     </thead>
     <tbody>
       <?php
         $conn = mysqli_connect("localhost","saif","","uiu");
         $sql = "SELECT* FROM faculty";
         $results = mysqli_query($conn, $sql);
         
         while($_data = $results->fetch_assoc()){
             
            if($_data['Availability'] == 'Yes'){
                     $room = 'I am Available' ; 
                     $f = 1;
             }
                 else{
                      $room = 'Not Available In Room' ; 
                      $f = 0;
                 }
              $id = $_data['Id'];
             
             echo "<tr> 
                   <td>" .$_data['Name']. "</td>   
                   <td>" .$_data['Designation']. "</td>   
                   <td>" .$_data['Room']. "</td>
                   <td>" .$room. "</td>
                   <td> <a href= form.php?id=$id>".$_data['coun']."</a></td> 
                   </tr>";
             
         }
         
         
        ?>
         
     </tbody>
 </table>
 <br><br><br>
 <footer>
  <!-- Copyright -->
  <div class="text">
   <p class = "f"> Featured By : </p>
    <h3 class="text_dark">TEAM LORDS</h3>
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>