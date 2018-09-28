<?php
session_start ();
include 'connection.php';



if(isset($_POST['login'])) {


$email = mysqli_real_escape_string($conn, $_POST['email']);
$password=mysqli_real_escape_string($conn,md5($_POST['password']));
$userole = mysqli_real_escape_string($conn, $_POST['userole']);

    
switch($userole){
        case "admin":
	
		
		
		$res="SELECT * FROM `signuptable` WHERE email='$email' AND password='$password' AND userole='$userole'"; 
			
			$result = mysqli_query($conn,$res);
			if($result){
				if(mysqli_num_rows($result) >= 1 ){
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    $_SESSION['mname'] = $mname;
                    echo "<script> window.location.href=\"admin.php\"; </script>";
						exit();	
						
				}
				else{
					
					?>
					
    <script type="text/javascript">
    alert("incorrect user credentials");
    </script>
	
    <?php

	
  
            }
			}
			break;
			
			case "employer":
		$res2="SELECT * FROM `signuptable` WHERE email='$email' AND password='$password' AND userole='$userole'"; 
			$result = mysqli_query($conn, $res2);
			if($result){
				if(mysqli_num_rows($result) >=1 ){
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    echo "<script> window.location.href=\"employer.php\"; </script>";
						exit();
				}
				else{
					?>
    <script type="text/javascript">
    alert("incorrect user credentials");
    </script>
    <?php
            }
        }
		break;
			
			case "jobseeker":
			$res1="SELECT * FROM `signuptable` WHERE email='$email' AND password='$password' AND userole='$userole'"; 
			$result = mysqli_query($conn, $res1);
			if($result){
				if(mysqli_num_rows($result) >=1 ){
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    echo "<script> window.location.href=\"applicationtable.php\"; </script>";
						exit();
				}
				else{
					?>
    <script type="text/javascript">
    alert("incorrect user credentials");
    </script>
    <?php
            }
        }
        break;
		
		
		default:
	?>
    <script type="text/javascript">
    alert("incorrect password or email");
    </script>
    <?php
  
}
}


?>



<html>
<head>
  <title>login</title>
  
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css" / >
<link rel="stylesheet" href="bootstrap/fonts/bootstrap.css" type="text/css" / >
<link rel="stylesheet" href="bootstrap/js/bootstrap.js" type="text/javascript" / >

<link rel="stylesheet" href="style5.css" type="text/css" 
  
</head>
<body background="peace.jpg">




<div class="container" id="log">


<h3>Welcome please enter your details to log in </h3><br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="form" class="form-inline" >

<div class="form-group">
    
<div class="col-sm-15">
<label>Enter email:</label>
    
<input type="text"  name="email" class="form-control"><br>
<br>
    
    
<label >password:</label>
    
<input type="password"  name="password" class="form-control"><br>
<br>
    
<label>Userole:</label>
<select name="userole">

<option>jobseeker</option>
<option>employer</option>
</select>
<br><br><br>
    
<input type="submit" value="Login" name="login">
</div>
    </div>
</form>


<h6 align="center">don't have an account?</h6>
<h6 align="center"><a href="http://localhost/ojasystem/register.php">signup</a></h6>
</div>
</body>
</html>
