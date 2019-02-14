<html>
<head>
	<link rel="stylesheet" href="main.css">
</head>
<body >
<div class="header">
				<ul>
                                    <li style="float:left;border-right:none"><a href="cover.php" class="logo"><img src="images/gmans_1.png" width="30px" height="30px"><strong> Dr FB Molopo </strong>Appointment Booking System</a></li>
					
					<li><a href="cover.php">Home</a></li>
				</ul>
</div>
<form action="signup.php" method="post">
	<div class="sucontainer">
		<label><b>Name:</b></label><br>
                <input type="text" style="color:red" placeholder="Enter Full Name" name="fname" required><br>
	
		<label><b>Date of Birth:</b></label><br>
		<input type="date"style="color:red" name="dob" required><br><br>
	
		<label><b>Gender</b></label><br>
                <input type="radio" name="gender" value="female"><label><b>Female</b></label>
                <input type="radio" name="gender" value="male"><label><b>Male</b></label>
                <input type="radio" name="gender" value="other"><label><b>Other</b></label><br><br>
		
		<label><b>Contact No:</b></label><br>
                
                <input type="tel" maxlength="10" pattern="[0]{1}[6-8]{1}[0-9]{1}[0-9]{3}[0-9]{4}" style="color:red; width: 100%" placeholder="Contact Number" name="contact" required><br>
		
		<label><b>Username:</b></label><br>
                <input type="text" style="color:red" placeholder="Create Username" name="username" required><br>
		
		<label><b>Email:</b></label><br>
		<input type="email" style="color:red" placeholder="Enter Email" name="email" required><br>

		<label><b>Password:</b></label><br>
		<input type="password"style="color:red" placeholder="Enter Password" name="pwd" id="p1" required><br>

		<label><b>Repeat Password:</b></label><br>
		<input type="password"style="color:red" placeholder="Repeat Password" name="pwdr" id="p2" required><br>
		<p style="color:white">By creating an account you agree to our <a href="#" style="color:grey">Terms & Conditions</a>.</p><br>

		<div class="container" style="background-color:grey">
			<button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
			<button type="submit" name="signup" style="float:right">Sign Up</button>
		</div>
  </div>
<?php

function newUser()
{
		include 'dbconfig.php';
		$name=$_POST['fname'];
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['pwd'];
		$prepeat=$_POST['pwdr'];
		$sql = "INSERT INTO patient (Name, Gender, DOB,Contact,Email,Username,Password) VALUES ('$name','$gender','$dob','$contact','$email','$username','$password') ";

	if (mysqli_query($conn, $sql)) 
	{
		echo "<center><h2 style='color:red'>Record created successfully!! Redirecting to login page....</h2><center>";
		header( "Refresh:3; url=cover.php");

	} 
	else
	{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
function checkusername()
{
	include 'dbconfig.php';
	$usn=$_POST['username'];
        
        
       
         
	$sql= "SELECT * FROM patient WHERE username = '$usn'";

	$result=mysqli_query($conn,$sql);
        

		if(mysqli_num_rows($result )!=0)
		{
			echo"<center><h2 style='color:red'><b><br>Username already exists </h2></center>";
		}
		else if($_POST['pwd']!=$_POST['pwdr'])
		{
			echo"Passwords dont match!";
		}
               
		else if(isset($_POST['signup']))
		{ 
			newUser();
		}

	
}
function checkemail()
{
	include 'dbconfig.php';
	$e=$_POST['email'];
        
        
       
         
	$sql= "SELECT * FROM patient WHERE email = '$e'";

	$result=mysqli_query($conn,$sql);
        

		if(mysqli_num_rows($result )!=0)
		{
			echo"<center><h2 style='color:red'><b><br>Email already exists! </h2></center>";
		}
		
               
		else if(isset($_POST['signup']))
		{ 
			newUser();
		}

	
}
if(isset($_POST['signup']))
{
	if(!empty($_POST['username']) && !empty($_POST['pwd']) &&!empty($_POST['fname']) &&!empty($_POST['dob'])&& !empty($_POST['gender']) &&!empty($_POST['email']) && !empty($_POST['contact']))
            checkusername();
        
            
}
?>

</form>
</body>
</html>