
<?php
include 'connection.php';


?>


<html>
<head><title>Homepage</title>
    
    <script>
        var i=null;
        function move(){
            i--;
            document.getElementById("container").style.backgroundPosition=i+"px";
        }
        window.setInterval(move,60);
        </script>
    
    
<link rel="stylesheet" href="style.css" type="text/css" / >
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid" id="container">
<div class="heading" id="header">
<h2 class="page-header" >
  WELCOME TO ONLINE JOB APPLICATION SYSTEM
  </h2>
   
  </div>
  
  <nav class="navbar navbar-inverse">
  <div class="container">
  <div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
  data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
  <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="#">O.J.A</a>
  </div>
  
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   <ul class="nav navbar-nav">
  <li class="active"><a href="http://localhost/ojasystem/">Homepage<span class="sr-only">(current)</span></a>
  </li>
  <li><a href="http://localhost/ojasystem/login.php">Login</a></li>
  <li><a href="http://localhost/ojasystem/register.php">Register</a></li>
  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://localhost/ojasystem/information.php">History</a></li>
          <li><a href="#">Jobs</a></li>
          <li><a href="#">Info</a></li>
        </ul>
      </li>
      
   
    </ul>
  
  
      
          
      
      
      
      
  <ul class="nav navbar-nav">
     <li><a href="http://localhost/ojasystem/contacts.php">Contacts</a></li>
	 
	 </ul>
  </div>
  </div>
  </nav>
  
    
  
    <div class="row" id="section1">
  <div class="col-sm-6">.Welcome
        
      <p>
          Online Job Application system would act as a common online platform where the employers and the job seekers can interact. The employers post the job vacancies on the online platform i.e. advertise the job vacancies, while the job seekers acquire accounts too, log in the portal and view the job vacancies together with their required qualifications.

 </p>
        
        
        </div>
  <div class="col-sm-6">Welcome
        
        
        <p>
          Many job seekers incur substantial costs during the job seeking process and sometimes even end up still unemployed after putting in so much effort. Due to unequal distribution of job opportunities some don’t receive information about job vacancies in time, others incur transport costs and still fail to secure the job and some waste a lot of time even years trying to manually secure jobs. The employers too are faced with advertisement costs because their advertisements sometimes reach the general audience rather than the target audience leading to wastage of resources. The employers and job seekers too lack a common platform of interaction hence the need to reduce this gap. 

 </p>
        
        
        
        
        </div>
</div>
    
<div class="maingoal" id="maingoal">
<h3>Job opportunities! login to Apply</h3>
<center>
    <table class ="table table-striped table-bordered table-hover table-condensed">
      <th>jobid</th><th>Employer</th><th>jobtype</th><th>jobdescription</th><th>qualifications</th><th>validity</th>
      <?php
$sql ="SELECT * FROM `jobstable`" ;

$result=mysqli_query($conn,$sql) or die($mysqli->error());

while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['jobid']."</td>";
    echo "<td>".$row['Employer']."</td>";
      echo "<td>".$row['jobtype']."</td>";
           echo "<td>".$row['jobdescription']."</td>";
           echo "<td>".$row['qualifications']."</td>";
           echo "<td>".$row['validity']."</td>";
           echo"</tr>";
}//end of while loop

?>


</table>
</center>

</div>

</div>
</body>
</html>