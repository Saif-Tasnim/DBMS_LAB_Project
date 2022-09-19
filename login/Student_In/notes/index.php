<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard/Student</title>
         
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/tinymce/tinymce.min.js"></script>
    <script src="js/tinymce/script.js"></script>
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>

<body>

 <header>
 <div class="wel">
    Welcome <span><?php echo $_SESSION['name'] ;?></span>
 </div>   
  <div id="wrapper">
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <ul class="nav navbar-right top-nav">
    
                     <li><a href="uploads.php">UPLOAD</a></li> 
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['name']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="./userprofile.php?section=<?php echo $_SESSION['id']; ?>"><i class="fa fa-fw fa-user"></i> Account</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
       
       </ul>
      </nav>
     </div>
    <div id="page-wrapper">

            <div class="container-fluid">

                
             <div class="row">
                    <div class="col-lg-12">
                       

<h3 class="page-header" style="margin-top:40px;font-size:24px;">
                            <center> <marquee width = 70% ><font color="green" >CSE  Engineering </font><font color="brown"> notes uploaded by UIU Students</font></marquee></center>
                        </h3>

                    </div>
                </div>
                
                <div class="row">
<div class="col-lg-12">
        <div class="table-responsive">

<form action="" method="post">
            <table class="table table-bordered table-striped table-hover">


            <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Type </th>
                        <th>Uploaded by</th>
                        <th>Download</th>
                        
                    </tr>
                </thead>
                <tbody>

                 <?php
                
$conn = mysqli_connect("localhost","saif","","uiu");
$query = "SELECT * FROM uploads WHERE file_uploaded_to = 'Computer Science' AND status = 'approved' ORDER BY file_uploaded_on DESC";
$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
if (mysqli_num_rows($run_query) > 0) {
while ($row = mysqli_fetch_array($run_query)) {
    $file_id = $row['file_id'];
    $file_name = $row['file_name'];
    $file_description = $row['file_description'];
    $file_type = $row['file_type'];
    $file = $row['file'];
    $file_uploader = $row['file_uploader'];

    echo "<tr>";
    echo "<td>$file_name</td>";
    echo "<td>$file_description</td>";
    echo "<td>$file_type</td>";
    echo "<td> $file_uploader </td>";
    echo "<td><a href='allfiles/$file' target='_blank' style='color:green'>Download </a></td>";
 echo "</tr>";


}
}
?>
  </tbody>
            </table>
</form>
</div>
</div>
</div>

  



<script src="js/jquery.js"></script>

  
    <script src="js/bootstrap.min.js"></script>

    </body>
</html>