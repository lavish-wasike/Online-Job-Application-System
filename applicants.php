<?php

session_start ();

$host="localhost";
$user="root";
$password="";
$dbname="ojasystem";
$conn = mysqli_connect("localhost","root","","ojasystem") or die("not connected");



if(isset($_POST['submit'])){


}
?>
<html>
<head>
<title>adminapplicationtable
</title>
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
    
</head>

<body bgcolor="aqua">

<h3 align="center">List of Applicants</h3>
    
    <?php
echo $_SESSION['email']; 

?>
    <br><a  href="logout.php" target="_self">logout</a><br>

  <center>
    <table border ="2px solid black">
      <th>jobid</th><th>email</th><th>Qualifications</th><th>file</th>
      <?php
  $sql ="SELECT applicationtable.jobid, applicationtable.email, applicationtable.qualifications, applicationtable.file from `applicationtable` inner join `jobstable` on  applicationtable.jobid=jobstable.jobid and jobstable.email= '".$_SESSION['email']."'  ";

  $result=mysqli_query($conn,$sql) or die($mysqli->error());

  while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    
    echo "<td>".$row['jobid']."</td>";
      echo "<td>".$row['email']."</td>";
	echo "<td>".$row['qualifications']."</td>";
      echo "<td>".$row['file']."</td>";

           echo"</tr>";
  }//end of while loop




  ?>


  </table>
  </center>



 






</body>
</html>
