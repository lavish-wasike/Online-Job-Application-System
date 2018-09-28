<?php
session_start();
include 'connection.php';


if(isset($_POST['submit'])){
	
$jobid= mysqli_real_escape_string($conn, $_POST['jobid']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
$qualifications= mysqli_real_escape_string($conn, $_POST['qualifications']);
$file= mysqli_real_escape_string($conn, $_POST['file']);



    $result = $conn->query("SELECT * FROM `applicationtable` WHERE `jobid`= '$jobid' AND `email`='$email' ") or die($mysqli->error());

if($result->num_rows >0){
  ?>
  <script type="text/javascript">
  alert("you have already applied for the job");
  </script>
  <?php

}
 
 else {
     
     $result = $conn->query("SELECT * FROM `jobstable` WHERE `jobid`= '$jobid'") or die($mysqli->error());
if($result->num_rows >0){
  

$sql = $conn->query ("INSERT INTO `ojasystem`.`applicationtable`
(`jobid` ,`email`,`qualifications`,`file`)VALUES
( '$jobid','$email','$qualifications','$file')");
       
    
?>
<script type="text/javascript">
alert("successfully registered");
</script>
<?php
}

else {
    
    ?>
<script type="text/javascript">
alert("job does not exist");
</script>
<?php
    
}
 }
   
}







?>
<html>
<head>
<title>application table
</title>



<link rel="stylesheet" href="style4.css" type="text/css" 



</head>
<body >

<div class="container">

<b>
WELCOME!      PLEASE FILL IN THE REQUIRED DETAILS AND REMEMBER TO SUBMIT
</b><br><br>
<a href="logout.php" target="_self">logout</a><br><br>
<a href="http://localhost/ojasystem/jobstable.php" target="_self">Jobs table</a><br>



<form name="applicationtable" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post"><br>

<div class="form-group">

  <script>
  function numbersOnly(input){
     var regex = /[^0-9+]/g;
  input.value = input.value.replace(regex,"");
  }
  </script>

  
<?php
echo $_SESSION['email']; 

?>
<br> <br>


<input type="text" name="jobid" required="required" id="jobid" size="3" maxlength="3" placeholder="Job id" onkeyup="numbersOnly(this)"/><br><br>
<input type="hidden" name="email" required="required" id="email" value="<?php
echo $_SESSION['email']; 

?>" readonly/><br><br>

<h3> Your cover letter</h3>
<textarea name="qualifications" id="qualifications" required="required" cols="20" rows="10" placeholder="Sell your self here. Limit to 400 words"></textarea><br><br>

<input type="file" name="file" required="required" id="file" /><br><br>

<button type="submit" class="btn btn-default " name="submit" >APPLY</button>
<input name="resetForm" id="resetForm" type="reset" value="RESET" />
</div>
</form>

</div>
  <address>
Last Updated: 11-Jan-2018<br />
WebMaster: Lavish Wasike lavishwacke@gmail.com<br />
&copy; copyright 2018 lavish<br />
</address>
</body>
</html>
