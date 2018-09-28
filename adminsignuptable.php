<?php
$host="localhost";
$user="root";
$password="";
$dbname="ojasystem";
$conn = mysqli_connect("localhost","root","","ojasystem") or die("not connected");



if(isset($_POST['submit'])){


$jobtype=$_POST['jobtype'];
$jobdescription=$_POST['jobdescription'];
$qualifications=$_POST['qualifications'];
$validity=$_POST['validity'];



$sql = $conn->query ("INSERT INTO `ojasystem`.`jobstable`
( `jobtype` ,`jobdescription` ,`qualifications` ,`validity` )VALUES
( '$jobtype', '$jobdescription', '$qualifications', '$validity')");




}

?>
<html>
<head>
<title>adminjobstable
</title>
</head>

<body bgcolor="magenta">

<marquee><h3>Adminstrator Only!!!!<h3></marquee>





<form name="adminjobstable" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<center><table border="1" width="400" height="300">

  <script>
  function lettersOnly(input){
    var regex = /[^a-z_]/gi;
    input.value = input.value.replace(regex,"");
  }


  </script>


  <tr>
  <td colspan= "5" align="center" bgcolor="grey">Job Vacancies</td>
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
  <td align="right">Validity:</td><td><input type="text" name="validity" required="required" id="validity" placeholder="Validity" /></td>
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
