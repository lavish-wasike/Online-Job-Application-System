<?php
$host="localhost";
$user="root";
$password="";
$dbname="ojasystem";
$conn = mysqli_connect("localhost","root","","ojasystem") or die("not connected");



if(isset($_POST['submit'])){

$jobid=$_POST['jobid'];


$sql = $conn->query ("DELETE FROM `ojasystem`.`jobstable` WHERE `jobstable`.`jobid` = '$jobid' ");

}
?>
<html>
<head>
<title>adminjobstable
</title>
</head>

<body bgcolor="magenta">

<marquee><h3>Adminstrator Only!!!!<h3></marquee>

  <center>
    <table border ="2px solid black">
      <th>jobid</th><th>jobtype</th><th>jobdescription</th><th>qualifications</th><th>validity</th>
      <?php
  $sql ="SELECT * FROM `jobstable`" ;

  $result=mysqli_query($conn,$sql) or die($mysqli->error());

  while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['jobid']."</td>";
      echo "<td>".$row['jobtype']."</td>";
           echo "<td>".$row['jobdescription']."</td>";
           echo "<td>".$row['qualifications']."</td>";
           echo "<td>".$row['validity']."</td>";

           echo"</tr>";
  }//end of while loop




  ?>


  </table>
  </center>



  <form name="applicationtable" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"><br>


    <script>
    function numbersOnly(input){
      var regex = /[^0-9]/g;
      input.value = input.value.replace(regex,"");
    }

    function lettersOnly(input){
      var regex = /[^a-z]/gi;
      input.value = input.value.replace(regex,"");
    }

    </script>


  <input type="text" name="jobid" required="required" id="jobid" size="3" maxlength="3" placeholder="Job id" onkeyup="numbersOnly(this)" />

<br>
  <input name="submit" id="submit" type="submit" value="DELETE" />
  <input name="resetForm" id="resetForm" type="reset" value="RESET" />



  </form>






</body>
</html>
