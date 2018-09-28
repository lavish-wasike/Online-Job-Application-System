<?php

session_start ();
include 'connection.php';

$current_date= date("Y.m.d");
echo $current_date;





?>



<html>
<head>
<title>JObs On Offer</title>
<body bgcolor="grey">



 <a href="http://localhost/ojasystem/applicationtable.php" target="_self">applicationtable</a><br>
  <center>
    <table border ="2px solid black">
      <th>jobid</th><th>Employer</th><th>email</th><th>jobtype</th><th>jobdescription</th><th>qualifications</th><th>validity</th>
      <?php
$sql ="SELECT * FROM `jobstable`" ;

$result=mysqli_query($conn,$sql) or die($mysqli->error());

while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['jobid']."</td>";
    echo "<td>".$row['Employer']."</td>";
      echo "<td>".$row['email']."</td>";
      echo "<td>".$row['jobtype']."</td>";
           echo "<td>".$row['jobdescription']."</td>";
           echo "<td>".$row['qualifications']."</td>";
           echo "<td>".$row['validity']."</td>";
           echo"</tr>";
}//end of while loop

?>


</table>
</center>

</body>
</html>
