<?php
$conn = mysqli_connect("localhost","saif","","uiu");
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
  
</head>


<body>

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

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            UPLOAD NOTE
                        </h1>
                        <form role="form" action="index.php" method="POST" enctype="multipart/form-data">


	<div class="form-group">
		<label for="post_title">Note Title</label>
		<input type="text" name="title" class="form-control" placeholder="Eg: Php Tutorial File" >
	</div>

	<div class="form-group">
		<label for="post_tags">Note Tags</label>
		<input type="text" name="tags" class="form-control" placeholder="Eg: Php, Tutorial, Learn Php etc.." >
	</div>

	<div class= "form-group">
		<label for="post_content">Write a short Description about your note</label>
		<textarea  class="form-control" name="description" id="" cols="12" rows="6">
		</textarea>
	</div>

	 <div class="form-group">
        <label for="post_image">Select File</label>
		<input type="file" name="file"> 
     </div>

<button type="submit" name="upload" class="btn btn-primary" value="Upload Note">Upload Note</button>
<br>
<br>
</form>
</div>
</div>
</div>
</div>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>

</html>
