<?php
include 'connection.php';

?>
<html>
<head>
<title>Welcome 
</title>
    
    <script>
        var i=null;
        function move(){
            i++;
            document.getElementById("cont").style.backgroundPosition=i+"px";
        }
        window.setInterval(move,100);
        </script>
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css" / >
<link rel="stylesheet" href="bootstrap/fonts/bootstrap.css" type="text/css" / >
<link rel="stylesheet" href="bootstrap/js/bootstrap.js" type="text/javascript" / >

<link rel="stylesheet" href="style2.css" type="text/css" >
    
</head>
<body background="">

<div class="container-fluid" id="cont">

   

    <div class="row" id="section2">
  <div class="col-sm-6">
      <h3>Welcome Jobseeker</h3>
      <h4>click the link below to sign up</h4>
      
      <a style="font-weight:bold" href="http://localhost/ojasystem/signuptable.php">Jobseeker</a><br>
        
      <p>	Jobseeker-A person who is looking for a job i.e. a person who wants to change their current work state (can either be unemployed, employed or a new graduate).

 </p>
        
        
        </div>
  <div class="col-sm-6">
      <h3>Welcome Employer</h3>
        <h4>click the link below to sign up</h4>
        
        <a style="font-weight:bold" href="http://localhost/ojasystem/signup.php">Employer</a>
        
        
        <p>	Employer- An organization, institution, government entity, agency, company, professional services firm, nonprofit association, small business, store, or individual who employs or put to work, a person who is called an employee or staff member.
 </p>
        
        </div>
</div>
  
  
 
  
  
        
    
    
    </div>

</body>
</html>
