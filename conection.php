<?php
$user="root";
$password="";
$dbname="ojasystem";
$conn = mysqli_connect("localhost","root","","ojasystem") or die("not connected");

$current_date= date("Y.m.d");
echo $current_date;
?>