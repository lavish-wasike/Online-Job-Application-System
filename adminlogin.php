<?php
session_start ();
include 'connection.php';




if(isset($_POST['login'])) {

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password=mysqli_real_escape_string($conn,md5($_POST['password']));


	
		
		
		$res="SELECT * FROM `signuptable` WHERE email='$email' AND password='$password'"; 
			
			$result = mysqli_query($conn,$res);
			if($result){
				if(mysqli_num_rows($result) >= 1 ){
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
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
}

?>



<html>
<head>
  <title>login</title>
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css" / >
<link rel="stylesheet" href="bootstrap/fonts/bootstrap.css" type="text/css" / >
<link rel="stylesheet" href="bootstrap/js/bootstrap.js" type="text/javascript" / >

<link rel="stylesheet" href="style.css" type="text/css" />
    
</head>
<body>

<div class="container">
    
    
    
    <form name="applicationtable" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post"><br>

<div class="form-group">

  

<br> <br>


<label>Enter email:</label>
<input type="text"  name="email" name="email" required="required" id="email" size="20" maxlength="20" placeholder="email"> <br>
<br>
<label>password:</label>
<input type="password"  name="password" required="required" id="password" size="20" maxlength="20" placeholder="password" ><br>
<br>
<br>
    

    
<button type="submit" class="btn btn-default " name="login"  value="login">login</button>
<input name="resetForm" id="resetForm" type="reset" value="RESET" />
</div>
</form>

</div>
    
    

</body>
</html>
