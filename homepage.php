<html>
<head><title>Homepage</title>
<link rel="stylesheet" href="style.css" type="text/css" / >
</head>
<body>
<div class="wrapper">
<div class="heading">
<h1 align ="center">
  WELCOME TO ONLINE JOB APPLICATION
  </h1>
</div>
<div class="navigation">

<ul>
<li><a>Home</a></li>
<li><a href="http://localhost/ojasystem/login.php" target="_self">Login</a></li>       
<li><a href="http://localhost/ojasystem/signuptable.php"  target="_self">Signup</a></li>
<li><a href="http://localhost/ojasystem/adminlogin.php"  target="_self">Admin</a></li>
</ul>
</div>
<div class="time">
<h3 >Date:
<?php
date_default_timezone_set('Africa/Nairobi');
$current_date= date("Y.m.d");
echo $current_date;

?>
</h3>
<h4>Time
<?php
$current_time= date("h:i:s A");
echo $current_time;

$timezone = date("e");
echo "-";
echo $timezone;



?></h4>

</div>
<div class="maingoal">


 <p>On line Job Application is a system based on offering job vacancies from employers on an on line platform thus reaching a larger target audience.


 This removes the need for employers having to advertise for positions and On line Job Application does that on their behalf.</p>


 <p>Applicants send their qualification documents to the On line Job Application team who then send them to interviewing bodies of respective organizations for verification.


 Once the verification is done, the job advertising organization posts the name of short listed candidates and interview dates on On line Job Application site.</p>

 Once a candidate has qualified for a job short listing, they are required to pay a non-refundable fee of KSH 650/=.


<p> Upon payment of the fee, one is issued with a receipt that bears a unique transaction number that should be presented to interviewing body on arrival.


 This ensures authenticity and legitimacy of our esteemed customers.</p>

</div>
<div class="information">
Customer care<br>
Email:lavishwacke@gmail.com<br>
Telephone 1:+254711812104<br>
Telephone 2:<br>

</div>
<div class="footer">
Footer
</div>
</div>
</body>
</html>