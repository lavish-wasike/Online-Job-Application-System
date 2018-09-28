<?php

session_start ();

$user="root";
$password="";
$dbname="ojasystem";
$conn = mysqli_connect("localhost","root","","ojasystem") or die("not connected");

$current_date= date("Y.m.d");
echo $current_date;




if(isset($_POST['login'])) {


$email = mysqli_real_escape_string($conn, $_POST['email']);
$password=mysqli_real_escape_string($conn,md5($_POST['password']));


	
		
		
		$res="SELECT * FROM `signuptable` WHERE email='$email' AND password='$password'"; 
			
			$result = mysqli_query($conn,$res);
			
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
                }}

?>




<html>
<head>
<title>Welcome Admin
</title>
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css" / >
<link rel="stylesheet" href="bootstrap/fonts/bootstrap.css" type="text/css" / >
<link rel="stylesheet" href="bootstrap/js/bootstrap.js" type="text/javascript" / >

<link rel="stylesheet" href="style4.css" type="text/css" />
    
</head>
<body background="blue.jpg">

  <br>

  <?php
  $current_time= date("h:i:s A");
  echo $current_time;

  $timezone = date("e");
  echo "-";
  echo $timezone;
  ?>
<br>

  <h3>ADMIN ONLY !!!! Any unauthorised actions are being monitored!!<h3>
<a href="adminlogout.php" >logout</a><br>

<?php
echo $_SESSION['email'];
?>


  <h3>To Enter data into jobstable click the link below</h3>
<a href="http://localhost/ojasystem/adminjobstable.php" target="_self">Insert Into Jobstable</a><br>



<h3>To Delete data from jobstable click the link below</h3>
<a href="http://localhost/ojasystem/admindeljobstable.php" target="_self">Delete From Jobstable</a><br>

<h3>To View Registered Clients click the link below</h3>
<a href="http://localhost/ojasystem/admindelsignuptable.php" target="_self">signuptable</a><br>

<h3>To View Clients who have applied for Jobs click the link below</h3>
<a href="http://localhost/ojasystem/adminapplicationtable.php" target="_self">applicationtable</a><br>



<br><br><br>
  <address>
Last Updated: 11-July-2018<br />
WebMaster: Lavish Wasike lavishwacke@gmail.com<br />
&copy; copyright 2018 lavish<br />
</address>
</body>
</html>
