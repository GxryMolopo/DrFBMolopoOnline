<!DOCTYPE html>


<?php 
include '../dbconfig.php';
function SignIn() 
{ 
session_start();
 
 {  
	if($_POST['username']=='admin' && $_POST['password']=='admin') 
	{ 
		$_SESSION['userName'] = 'admin'; 
		echo "<center><h3 style='color:red'>Logging you in..</h3></center>";
		header( "Refresh:3; url=mgrmenu.php");
	} 
	else { 
		echo "Wrong Credentials!"; 
		} 
	}
	} 
	if(isset($_POST['submit'])) 
	{ 
		SignIn(); 
	} 
?>





<html>
    <head>
        <link rel="stylesheet" href="../main.css"> 
    </head>
<body >
    
    <form action="mlogin.php" method="post">
	<div class="header">
				<ul>
					<li style="float:left;border-right:none"><strong> Manager Login</strong></li>
					<li><a href="cover.php">Home</a></li>
				</ul>
	</div>
	<div class="sucontainer">
		<label><b>Username:</b></label><br>
		<input type="text" placeholder="Enter Username" name="username" required><br>
	
		<label><b>Password:</b></label><br>
		<input type="password" placeholder="Enter Password" name="password" required><br><br>
		
		<div class="container" >
			<button type="submit" name="submit" style="float:right">Log In</button>
		</div>
                
        </div>
        </form>
   


</body>
</html>

 