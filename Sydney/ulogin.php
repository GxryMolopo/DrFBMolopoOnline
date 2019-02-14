<html>
<head>
	<link rel="stylesheet" href="main.css">
</head>
<body >
<div class="header">
				<ul>
					<li style="float:left;border-right:none"><strong><?php session_start(); echo $_SESSION['user']; ?></strong></li>
					
				</ul>
</div>
<div class="container" style="width:100%">
	<div class="container" >
	<form method="post">
      <button type="button" onclick="window.location.href='book.php'" style="background-color:red">Book Appointment</button>
	  <button type="button" onclick="window.location.href='viewpatientappointments.php'" style="background-color:red">Show Appointments</button>
	  <button type="submit" name="cancel" style="float:center;background-color:red">Cancel Booking</button>
	  <button type="submit" name="logout" style="float:right;background-color:grey">Log Out</button>
	</form>
    </div>
</div>
<?php
 session_start();
 $name=$_SESSION['user'];
if(isset($_POST['check']))
{
		include 'dbconfig.php';
		
		$sql = "Select * from book where name='$name'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($rows = mysqli_fetch_assoc($result)) 
			{
				echo "Username:".$rows["username"]."Name:".$rows["name"]."Date of Visit:".$rows["dov"]."Town:".$rows["town"]."<br>";
			}
		} 
		else 
		{
			echo "0 results";
		}
}
if(isset($_POST['cancel']))
{
	header( "Refresh:1; url=cancelbookingpatient.php"); 
}
if(isset($_POST['logout']))
{
	session_unset();
	session_destroy();
	header( "Refresh:1; url=cover.php"); 
}
?>
</body>
</html>