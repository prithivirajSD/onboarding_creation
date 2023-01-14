<!----
//including the database connection file
$id =$_post['id'];
$subjec = $_POST['subjec'];
//echo "$reason";

$report = $_POST['report'];
$message123 = $_POST['message123'];
{

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "370project";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
      . mysqli_connect_error());
  }

else
{ 
        $INSERT = "INSERT into daily_status_update (id, subjec, report, message123) values ($id, $subjec, $report,$message123)";
 

   if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("isss", $id, $subjec, $report, $message123);
      $stmt->execute();
      echo "New record inserted sucessfully";
     }
    
     $stmt->close();
     $conn->close();
    }
} 

?>

}


$sql = "INSERT INTO `daily_status_update`(`id`,`subjec, `report`, `message123`) VALUES ('$id','$subject','$report','$message123')";

$result = mysqli_query($conn, $sql);

//redirecting to the display page (index.php in our case)
header("Location:..//reportsubmittion.php?id=$id");



--->

<?php

require_once ('dbh.php');

$id = $_GET['id'];
$subjec = $_POST['subjec'];
$report = $_POST['report'];
$message123 = $_POST['message123'];

$sql = "INSERT INTO `daily _status_update` (`id`, `subjec`, `report` , `message123`) VALUES ('$id' , '$subjec' , '$report' , '$message123')";

$result = mysqli_query($conn, $sql);

//echo "$sql";
	//echo ("logged in");
	header("Location: ../reportsubmittion.php");
?>