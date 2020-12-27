<!--connection-->
<?php
session_start();
require 'config.php';
$name = $_POST['user'];
$department = $_POST['department'];
$cat = $_POST['cat'];
$dboard = $_POST['dboard'];
$Hblock = $_POST['Hblock'];
$Rooom = $_POST['Rooom'];
$pn = $_POST['pn'];
$pd = $_POST['pd'];
$dboarder = $_POST['dboarder'];
$route = $_POST['route'];
$buss = $_POST['buss'];

$query = "insert into candidate_master(id,candidate_name) values('1',' $name' )";
mysqli_query($con, $query);
$query = "insert into admitted_department(id,department) values('1',' $department' )";
mysqli_query($con, $query);
$query = "insert into financial_master(id,catogory_fees) values('1',' $cat' )";
mysqli_query($con, $query);
$query = "insert into hostel_master(id,hostel_block,roomtype) values('1',' $Hblock',' $Rooom' )";
mysqli_query($con, $query);
$query = "insert into proctor_master.(id,proctor_name,proctor_department) values('1',' $pn',' $pd' )";
mysqli_query($con, $query);
$query = "insert into transport_master(id,dayboarder,route,busno) values('1',' $dboarder','$route ',' $buss' )";
mysqli_query($con, $query);
echo "succesfully details has been stored into database";
?>