<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('process/dbh.php');
	$sql = "SELECT * FROM `employee` where id = '$id'";
	$result = mysqli_query($conn, $sql);
	$employee = mysqli_fetch_array($result);
	$empName = ($employee['firstName']);
	//echo "$id";
?>



<html>
<head>
	<title>Apply Leave | Employee Panel | GRASPEAR</title>
	<link rel="stylesheet" type="text/css" href="styleapply.css">
</head>

<body bgcolor="#F0FFFF">
	
	<header>
		<nav>
			<h1>GRASPEAR SOLUTION PVT LTD</h1>
			<ul id="navli">
				<li><a class="homeblack" href="eloginwel.php?id=<?php echo $id?>"">HOME</a></li>
				<li><a class="homeblack" href="myprofile.php?id=<?php echo $id?>"">My Profile</a></li>
				<li><a class="homeblack" href="empproject.php?id=<?php echo $id?>"">My Projects</a></li>
				<li><a class="homered" href="applyleave.php?id=<?php echo $id?>"">Apply Leave</a></li>
				<li><a class="homeblack" href="reportsubmittion.php?id=<?php echo $id?>"">Report</a></li>
				<li><a class="homeblack" href="elogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Report or message</h2>
                    <form action="process/daily_status_process.php" method="POST">


					<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="subject" name="subjec">
                        </div>
						<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="report" name="report">
                        </div>

                       	
					<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="message" name="message123">
                        </div>
                      

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	







	

	<table>
			<tr>
				<th align = "center">Emp. ID</th>
				<th align = "center">SUBJECT</th>
				<th align = "center">Reason</th>
				<th align = "center">MESSAGE</th>
			</tr>


			<?php


				$sql = "Select employee.id, employee.firstName, employee.lastName, employee_leave.start, employee_leave.end, employee_leave.reason, employee_leave.status From employee, employee_leave Where employee.id = $id and employee_leave.id = $id order by employee_leave.token";
				$result = mysqli_query($conn, $sql);
				while ($employee = mysqli_fetch_assoc($result)) {
				
					$interval = $date1->diff($date2);
					$interval = $date1->diff($date2);

					echo "<tr>";
					echo "<td>".$daily_status_update['id']."</td>";
					
					echo "<td>".$interval->days."</td>";
					echo "<td>".$employee['reason']."</td>";
					echo "<td>".$employee['message']."</td>";
					
				}


			?>


		</table>













</body>
</html>