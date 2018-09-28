<?php
$host="localhost";
$user="root";
$password="";
$dbname="ojasystem";
$conn = mysqli_connect("localhost","root","","ojasystem") or die("not connected");



if(isset($_POST['submit'])){

$UserID=$_POST['UserID'];


$sql = $conn->query ("DELETE FROM `ojasystem`.`signuptable` WHERE `signuptable`.`UserID` = $UserID ");

}
?>
<html>
<head>
<title>admindelsinguptable
</title>
</head>

<body bgcolor="lime">

<marquee><h3>Adminstrator Only!!!!<h3></marquee>

  <center>
    <table border ="2px solid black">
      <th>id</th><th>fname</th><th>mname</th><th>lname</th><th>Gender</th><th>dob</th><th>email</th><th>phonenumber</th><th>address</th><th>password</th><th>password2</th>
      <?php
  $sql ="SELECT * FROM `signuptable`" ;

  $result=mysqli_query($conn,$sql) or die($mysqli->error());

  while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['UserID']."</td>";
      echo "<td>".$row['fname']."</td>";
           echo "<td>".$row['mname']."</td>";
           echo "<td>".$row['lname']."</td>";
           echo "<td>".$row['Gender']."</td>";
           echo "<td>".$row['dob']."</td>";
	        echo "<td>".$row['email']."</td>";
	          echo "<td>".$row['phonenumber']."</td>";
	       echo "<td>".$row['address']."</td>";
	       echo "<td>".$row['password']."</td>";
           echo "<td>".$row['password']."</td>";

           echo"</tr>";
  }//end of while loop




  ?>


  </table>
  </center>



  <form name="signuptable" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"><br>


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


  <input type="text" name="UserID" required="required" id="UserID" size="3" maxlength="3" placeholder="id" onkeyup="numbersOnly(this)" />

<br>
  <input name="submit" id="submit" type="submit" value="DELETE" />
  <input name="resetForm" id="resetForm" type="reset" value="RESET" />



  </form>






</body>
</html>
