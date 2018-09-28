<?php
include 'connection.php';

date_default_timezone_set('Africa/Nairobi');
$current_date= date("Y.m.d");

echo $current_date;



if(isset($_POST['submit'])){

$fname= mysqli_real_escape_string($conn, $_POST['fname']);
$mname= mysqli_real_escape_string($conn, $_POST['mname']);
$lname= mysqli_real_escape_string($conn, $_POST['lname']);
$Gender= mysqli_real_escape_string($conn, $_POST['Gender']);
$dob= mysqli_real_escape_string($conn, $_POST['dob']);
$email= mysqli_real_escape_string($conn, $_POST['email']);
$phonenumber= mysqli_real_escape_string($conn, $_POST['phonenumber']);
$address= mysqli_real_escape_string($conn, $_POST['address']);

$password=mysqli_real_escape_string($conn,md5($_POST['password']));
$password2 =mysqli_real_escape_string($conn, md5($_POST['password2']));
$userole = mysqli_real_escape_string($conn, $_POST['userole']);


if(filter_var($email,FILTER_VALIDATE_EMAIL) == true){

$result = $conn->query("SELECT * FROM `signuptable` WHERE `email`= '$email'") or die($mysqli->error());
if($result->num_rows >0){
  ?>
  <script type="text/javascript">
  alert("user already exists");
  </script>
  <?php

}

elseif($password==$password2){
  


$sql = $conn->query ("INSERT INTO `ojasystem`.`signuptable`
(`fname` ,`mname` ,`lname` ,`Gender` ,`dob` ,`email` ,`phonenumber` ,`address` ,`password`,`password2`,`userole`)VALUES
( '$fname','$mname', '$lname', '$Gender', '$dob', '$email', '$phonenumber', '$address', '$password', '$password2','$userole')");


?>
<script type="text/javascript">
alert("successfully registered");
</script>
<?php

}


else if($password<>$password2) {
  ?>
  <script type="text/javascript">
  alert("Password mismatch!!");
  </script>
  <?php

}



}else{

  ?>
  <script type="text/javascript">
  alert("invalid email adress format");
  </script>
  <?php

}



}

?>
<html>
<head>
<title>signuptable
</title>

    
     <script type="text/javascript" src="js/jquery.3.js"></script>
    
    <link href="jquery-ui.css" rel="stylesheet" >
    <script src="jq/jquery.js"></script>
    <script src="jq/jquery-ui.js"></script>
    <script>
        $(document).ready(function(){
           $("#calender").datepicker({
           maxDate: new Date(2000,8,14)   
           
           
           }); 
        });
        </script>
    
    
<link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css" / >
<link rel="stylesheet" href="bootstrap/fonts/bootstrap.css" type="text/css" / >
<link rel="stylesheet" href="bootstrap/js/bootstrap.js" type="text/css" / >

<link rel="stylesheet" href="newstyle.css" type="text/css" 
</head>

<body>
<div class="container">
  <br>

  <?php
  $current_time= date("h:i:s A");
  echo $current_time;

  $timezone = date("e");
  echo "-";
  echo $timezone;
  ?>
<br>

<h1>NEW USER? NEED AN ACCOUNT REGISTER WITH US BELOW </h1>



<form name="application" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

<div class="form-group">

<script>
function lettersOnly(input){
  var regex = /[^a-z_]/gi;
  input.value = input.value.replace(regex,"");
}
</script>

<script>
function numbersOnly(input){
  var regex = /[^0-9]/g;
  input.value = input.value.replace(regex,"");
}

function numberdotOnly(input){
  var regex = /[^0-9.]/g;
  input.value = input.value.replace(regex,"");

}
function numberplusOnly(input){
  var regex = /[^0-9+]/g;
  input.value = input.value.replace(regex,"");

}

</script>



 <input type="text"  name="fname" required="required" id="fname" placeholder="First Name" onkeyup="lettersOnly(this)"/>
 <input type="text" name="mname" id="mname" placeholder="Middle Name" onkeyup="lettersOnly(this)" />
 <input type="text" name="lname"required="required" id="lname" placeholder="Last Name" onkeyup="lettersOnly(this)" /><br><br>

Male:<input type="radio" name="Gender" required="required"  value="Male"/>
 Female:<input type="radio" name="Gender"  required="required" value="Female" />  <br><br>



<input type="text" name="dob" required="required" id="calender"   placeholder="Date Of Birth"/>

<input type="text" name="email" required="required" id="email" placeholder="Email Address" /><br><br>
<input type="text" name="phonenumber" required="required" id="phonenumber" placeholder="Phone Number" onkeyup="numberplusOnly(this)" /><br><br>
<input type"text" name="address" required="required" id="address" placeholder="Address"  /><br><br>


  <input  type="password" name="password" required="required" id="password" placeholder="Enter Password" size="30" minlength="8" /><br><br>
<input  type="password" name="password2" required="required" id="password2" placeholder="Confirm Password" size="30" minlength="8" /><br><br>

Jobseeker:<input type="radio" name="userole" required="required"  value="jobseeker"/><br><br>
 

<input name="submit" id="submit" type="submit" value="SUBMIT" />
<input name="reset" id="resetForm" type="reset" value="RESET" /><br>
<h4>already have an account? follow the link below to log in</h4>
<a href="http://localhost/ojasystem/login.php" target="_self">login</a><br>

</div>
</form>



</div>
</body>

</html>
