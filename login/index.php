<?php 
session_start();

$conn = mysqli_connect("localhost","saif","","uiu");

   $uname=$pass = '';
    $_error = ''; 
    $_info = '';
    if(isset($_POST['submit'])){
          $uname = $_POST['username'];
       $pass = $_POST['password'];
        if(empty($_POST['username']) && empty($_POST['password'])){
            $_error = 'Username & password required';
        }
       else if(empty($_POST['username'] )){
           $_error = 'Username required';
        }
         else if(empty($_POST['password'])){
            $_error = 'Password required';
        }
        
        else{
            
            // student site
            
            $sql = "SELECT * FROM log_in where S_id =  '$uname' AND S_password = '$pass' ";
            $sql1 = "SELECT * FROM log_in where F_id = '$uname' AND F_password = '$pass' ";
            $results = mysqli_query($conn, $sql);
            $results1 = mysqli_query($conn, $sql1);
            $data = $results->fetch_assoc();
            $num=mysqli_num_rows($results);
            if($num==1){
                
                $sql2="SELECT * FROM student inner join log_in on log_in.S_id=student.Id where log_in.S_id='$uname'";
                $result = mysqli_query($conn, $sql2);
                $data1 = $result->fetch_assoc();
                $num1=mysqli_num_rows($result);
                if($num1==1){
                    
                    $_SESSION['name']=$data1['Name'];
                    $_SESSION['id']=$uname;
                    $_SESSION['email']=$data1['E_mail'];
                    
                header('location: Student_In/home.php');
                }
                
            }
            
            /// 
            else{
                $_error =  "Inavlid Username or Password" ;
            }
            
            // faculty site
               
            
               $f_data = $results1->fetch_assoc();
                $f_num=mysqli_num_rows($results1);
           
                
                if($f_num==1){
                
                $f_sql="SELECT* FROM faculty INNER JOIN log_in on log_in.F_id = faculty.Id WHERE faculty.Id = '$uname'";
                $f_result = mysqli_query($conn, $f_sql);
                $data4 = $f_result->fetch_assoc();
                $num4=mysqli_num_rows($f_result);
                if($num4==1){
                    
                    $_SESSION['f_name']=$data4['Name'];
                    $_SESSION['f_id']=$uname;
                    $_SESSION['f_email']=$data4['E_mail'];
                    $_SESSION['f_design']=$data4['Designation'];
                    $_SESSION['f_room']=$data4['Room'];
                    
                    
                header('location: Faculty_In/home.php');
                }
                
                
            
                
            }
//            $_info1 = mysqli_fetch_all($results1, MYSQLI_ASSOC);
//            
//             if($_info1 ){
//                 
//                header('location: Faculty_In/home.php');
//            }
//            else{
//                $_error = "Invalid Username or Password" ;
//            }
           //mysqli_free_result($results);
           mysqli_close($conn);
        //   print_r($_info);
           
        }
    }
     
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>UIU eLearning Management System</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="bg">
    <div class="container">
        <span class="span">
            <?php echo "<h1 class = 'er'>" .$_error. "</h1>" ;?>
        </span>

        <div class="left">
            <h1>
                UIU eLearning<br> Management System
            </h1>
            <hr id="hr">
            <div class="xtra">
                <p id="p1"> Cookies must be enabled in your browser</p> <br><br>
                <p id="p2">Some courses may allow guest access </p> <br>
                <button id="guest">
                    <a href="#" id="button_guest"> Log in as a guest</a>
                </button>
            </div>
        </div>

        <div class="right">
            <h2 id="text1">Already have an account?</h2>
            <form action="index.php" method="POST">
                <input type="text" name="username" placeholder="Username" value="<?php echo $uname?>">
                <input type="password" name="password" placeholder="Password" value="<?php echo $pass ?>">

                <a href="#" id="s1" target="">
                    <button id="main" name="submit" type="submit"> Log in </button> </a><br>

                <a href="#" id="last_a">Forgotten your Username or Password?</a>
            </form>
        </div>

    </div>
    </div>

</body>

</html>