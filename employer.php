<?php
session_start ();
include 'connection.php';


if(isset($_POST['submit'])){

$Employer=$_POST['Employer'];
$email=$_POST['email'];
$jobtype=$_POST['jobtype'];
$jobdescription=$_POST['jobdescription'];
$qualifications=$_POST['qualifications'];
 $validity= mysqli_real_escape_string($conn, $_POST['validity']);



$sql = $conn->query ("INSERT INTO `ojasystem`.`jobstable`
( `Employer`,`email`,`jobtype` ,`jobdescription` ,`qualifications` ,`validity` )VALUES
( '$Employer','$email','$jobtype','$jobdescription', '$qualifications', '$validity')");


?>
					
    <script type="text/javascript">
    alert("Successful uploaded vacancy");
    </script>
	
    <?php

}

?>
<html>
<head>
<title>employertable
</title>
    
 <script type="text/javascript" src="js/jquery.3.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
                 
                         
                          });
        </script>
    
    <link href="jquery-ui.css" rel="stylesheet" >
    <script src="jq/jquery.js"></script>
    <script src="jq/jquery-ui.js"></script>
    <script>
        $(document).ready(function(){
           $("#calender").datepicker({
           minDate: new Date(2018,8,18)   
           
           
           }); 
        });
        </script>


</head>



<body bgcolor="white">
    
<?php
echo $_SESSION['email']; 

?> <br>
<a  href="logout.php" target="_self">logout</a><br>
    
    <h2>click the link Below to view Applicants</h2>
    
   <a  href=" http://localhost/ojasystem/applicants.php" target="_self">applicants</a><br>
    

<form name="employer" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<center><table border="1" width="400" height="300">

  <script>
  function lettersOnly(input){
    var regex = /[^a-z ]/gi;
    input.value = input.value.replace(regex,"");
  }


  </script>


  <tr>
  <td colspan= "5" align="center" bgcolor="grey">Job Vacancies</td>
  </tr>
    
    <tr>
  <td align="right">Employer name:</td><td><input type="text" name="Employer" required="required" id="Employer" placeholder="Employer" onkeyup="lettersOnly(this)"/></td>
  </tr>
    
     <tr>
  <td align="right"> email:</td><td><input type="text" name="email" required="required" id="email" placeholder="email Address" /></td>
  </tr>
    
  <tr>
  <td align="right">Jobtype:</td><td><input type="text" name="jobtype" required="required" id="jobtype" placeholder="Job type" onkeyup="lettersOnly(this)"/></td>
  </tr>
  <tr>
  <td align="right">Jobdescription:</td><td><textarea name="jobdescription" id="jobdescription" required="required" cols="20" rows="10" placeholder="Please Enter the jobdescription here."></textarea></td>
  </tr>
  <tr>
  <td align="right">Qualifications:</td><td><textarea name="qualifications" id="qualifications" required="required" cols="20" rows="10" placeholder="Please Enter The required qualifications."></textarea></td>
  </tr>
  <tr>
  <td align="right">Validity:</td><td><input type="text" name="validity" id="calender"  required="required"  placeholder="Validity" /></td>
  </tr>



<tr>
<td colspan= "5" align="center"><input name="submit" id="submit" type="submit" value="SUBMIT" />
<input name="reset" id="resetForm" type="reset" value="RESET" /></td>
</tr>




</table></center>


</form>

<address><br><br>
Last Updated: 11-Jan-2016<br />
WebMaster: Lavish Wasike lavishwacke@gmail.com<br />
&copy; copyright 2016 lavish<br />
</address>
</body>

</html>
