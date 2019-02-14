

<html>
<head>
<link rel="stylesheet" href="main.css">
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</head><?php 

include "dbconfig.php"; ?>
<script>
function getTown(val) {
	$.ajax({
	type: "POST",
	url: "get_town.php",
	data:'countryid='+val,
	success: function(data){
		$("#town-list").html(data);
	}
	});
}
function getClinic(val) {
	$.ajax({
	type: "POST",
	url: "getclinic.php",
	data:'townid='+val,
	success: function(data){
		$("#clinic-list").html(data);
	}
	});
}
function getDoctorday(val) {
	$.ajax({
	type: "POST",
	url: "getdoctordaybooking.php",
	data:'cid='+val,
	success: function(data){
		$("#doctor-list").html(data);
	}
	});
}

function getDay(val) {
	var cidval=document.getElementById("clinic-list").value;
	var didval=document.getElementById("doctor-list").value;
	$.ajax({
	type: "POST",
	url: "getDay.php",
	data:'date='+val+'&cidval='+cidval+'&didval='+didval,
	success: function(data){
		$("#datestatus").html(data);
	}
	});
}

</script>
<body style="background-image:url(images/gmans_1.png)">
	<div class="header">
		<ul>
			<li style="float:left;border-right:none"><a href="ulogin.php" class="logo"><img src="images/gmans_1.png" width="30px" height="30px"><strong> Dr FB Molopo </strong>Appointment Booking System</a></li>
			<li><a href="ulogin.php">Back</a></li>
		</ul>
	</div>
	<form action="book.php" method="post">
	<div class="sucontainer" >
		<label><b>Name:</b></label><br>
                <input type="text"style="color:red" value="<?php session_start(); echo $_SESSION['user'];?>" name="fname" readonly><br>
		
		<label><b>Gender</b></label><br>
                <input type="radio" name="gender" value="female"><label >Female</label>
                <input type="radio" name="gender" value="male"><label>Male</label>
                <input type="radio" name="gender" value="other"><label>Other</label><br><br>
	
		<label style="font-size:20px" >City:</label><br>
		<select name="city"  id="city-list" class="demoInputBox"  onChange="getTown(this.value);" style="width:100%;height:35px;border-radius:9px ;color:red">
		<option value="">Select Province</option>
                <option value="Gauteng">Gauteng</option>
                <option value="Mpumalanga">Mpumalanga</option>
                <option value="Northern Cape">Northern Cape</option>
                <option value="North West">North West</option>
                <option value="Eastern Cape">Eastern Cape</option>
                <option value="Kwa Zulu Natal">Kwa Zulu Natal</option>
                <option value="Free State">Free State</option>
                <option value="Limpopo">Limpopo</option>
                <option value="Western Cape">Western Cape</option>
                
                
                
                
                
                
                
                
		<?php
		$sql1="SELECT distinct(city) FROM clinic";
         $results=$conn->query($sql1); 
		while($rs=$results->fetch_assoc()) { 
		?>
		<option value="<?php echo $rs["city"]; ?>"><?php echo $rs["city"]; ?></option>
		<?php
		}
		?>
		</select>
        <br>
	
		<label style="font-size:20px" >Town:</label><br>
		<input id="town-list"type="text" style="color:red" placeholder="Town" name="Enter your Town"  style="width:100%;height:35px;border-radius:9px">
		<br>
		
		<label style="font-size:20px" >Surgery:</label><br>
		<select id="clinic-list" name="Clinic" style="width:100%;height:35px;border-radius:9px ;color:red">
		<option value="">Select Surgery</option>
		<option value="1">Dawn Park</option>
		
                </select><br>
		
		<label style="font-size:20px" >Doctor:</label><br>
		<select id="doctor-list" name="Doctor" onChange="getDate(this.value);" style="width:100%;height:35px;border-radius:9px; color:red">
		<option value=""style="color:red">Select Doctor</option>
		
                <option value="1"style="color:red">Dr F.B Molopo</option>
		</select><br>
		
		
		<label><b>Date of Visit:</b></label><br>
		<input type="date"style="color:red" name="dov"  min="<?php echo date('Y-m-d');?>" max="<?php echo date('Y-m-d',strtotime('+7 day'));?>" required><br><br>
		<div id="datestatus"> </div>
		
		<div class="container">
		
                    <center>     <button type="submit" style="position:center" name="submit" value="Submit">Submit</button> </center>
		
                
                
                
                </div>
<?php
session_start();
if(isset($_POST['submit']))
{
		
		include 'dbconfig.php';
		$fname=$_POST['fname'];
		$gender=$_POST['gender'];
		$username=$_SESSION['username'];
		$cid=$_POST['Clinic'];
		$did=$_POST['Doctor'];
		$dov=$_POST['dov'];
		$status="Booking Registered.Wait for the update";
		$timestamp=date('Y-m-d H:i:s');
		$sql = "INSERT INTO book (Username,Fname,Gender,CID,DID,DOV,Timestamp,Status) VALUES ('$username','$fname','$gender','$cid','$did','$dov','$timestamp','$status') ";
		if(!empty($_POST['fname'])&&!empty($_POST['gender'])&&!empty($_SESSION['username'])&&!empty($_POST['Clinic'])&&!empty($_POST['Doctor']) && !empty($_POST['dov']))
		{
			$checkday = strtotime($dov);
			$compareday = date("l", $checkday);
			$flag=0;
			require_once("dbconfig.php");
			$query ="SELECT * FROM doctor_availability WHERE DID = '" .$did. "' AND CID='".$cid."'";
			$results = $conn->query($query);
			
			
				if (mysqli_query($conn, $sql)) 
				{
						echo "<center><h2 style='color:white'>Booking successful!! Redirecting to home page....</h2></center>";
						echo "<script type='text/javascript'>window.location.href = 'ulogin.php';</script>";
				} 
				else
				{
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			
		}
		else
		{
			echo "Enter data properly!!!!";
		}
}


?>
	</form>
</body>
</html>