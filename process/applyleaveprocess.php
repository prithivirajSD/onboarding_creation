<?php
//including the database connection file
require_once ('dbh.php');

//getting id of the data from url
$id = $_GET['id'];
//echo $id;

$start = $_POST['start'];

$end = $_POST['end'];
//echo "$reason";

$reason = $_POST['reason'];

$message = $_POST['message'];

$sql = "INSERT INTO `employee_leave`(`id`,`token`, `start`, `end`, `reason`, `status`,`message`) VALUES ('$id','','$start','$end','$reason','Pending','$message')";

$result = mysqli_query($conn, $sql);

//redirecting to the display page (index.php in our case)
header("Location:../eloginwel.php?id=$id");
?>

