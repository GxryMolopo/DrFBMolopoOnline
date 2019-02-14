<!DOCTYPE html>
<html>
    <body>
<link rel="stylesheet" href="main.css">
			<div class="header">
				<ul>
                                    <li style="float:left;border-right:none"><a href="cover.php" class="logo"><img src="images/gmans_1.png" width="30px" height="30px"><strong> Dr FB Molopo </strong>Appointment Booking System</a></li>
                                    <li><a href="Admin/mlogin.php">Admin </a></li>
					<li><a href="#home">Home</a></li>
                                        
				</ul>
			</div>
			<div class="center">
				<h1></h1><br>
				<p style="text-align:center;color:grey;font-size:30px;top:35%"></p><br>
				<button onclick="document.getElementById('id01').style.display='block'" style="position:absolute;top:50%;left:50%">Login</button>
				
			</div>	

				
<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="cover.php">
    <div class="imgcontainer">
		<span style="float:left"><h2 style="color: red">&nbsp&nbsp&nbsp&nbspLog In</h2></span>
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
	
    <div class="container">
      <label><b>Username</b></label>
      <input type="text" style="color:red" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password"style="color:red" placeholder="Enter Password" name="psw" required>
      <center>	<button type="submit" name="login">Login</button>
          <br>
          <input type="checkbox" checked="checked"><p style="color:red"> Remember me</p></center>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <button onclick="document.getElementById('id02').style.display='block';document.getElementById('id01').style.display='none'" style="float:right">Register</button>
    </div>
  </form>
</div>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="signup.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span><br>
    </div>

	<div class="imgcontainer">
            <img src="images/gmans_1.png" alt="Avatar" class="avatar">
    </div>
	
    <div class="container">
		<p style="text-align:center;font-size:18px;color:red"><b>Welcome to Dr F.B Molopo Practice</b></p>
     
	  
    </div>
	
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
	  <button type="submit" name="signup" style="float:right">Sign Up</button>
    </div>
	
  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

</script>
<?php
session_start();
$error=''; 
if (isset($_POST['login'])) {
if (empty($_POST['uname']) || empty($_POST['psw'])) {
$error = "Username or Password is invalid";
}
else
{
	include 'dbconfig.php';
	$username=$_POST['uname'];
	$password=$_POST['psw'];

	$query = mysqli_query($conn,"select * from patient where password='$password' AND username='$username'");
	$rows = mysqli_fetch_assoc($query);
	$num=mysqli_num_rows($query);
	if ($num == 1) {
		$_SESSION['username']=$rows['username'];
		$_SESSION['user']=$rows['name'];
		header( "Refresh:1; url=ulogin.php"); 
	} 
	else 
	{
		$error = "Username or Password is invalid";
	}
	mysqli_close($conn); 
}
}
?>
</body>
</html>
