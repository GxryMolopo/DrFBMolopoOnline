<html>
<head>
    <link rel="stylesheet" href="../main.css">
<style>
table{
    width: 85%;
    border-collapse: collapse;
	border: 2px solid red;
   
        padding: 5px;
	font-size: 18px;
        margin-top: 50px;
        border-radius: 3px;
        
        
        
}

th{
border: 2px solid red;
	background-color: red;
    color: white;
	text-align: left;
        font-family: 'Roboto', sans-serif;
        padding:15px;
        text-align: left;
        
}
tr,td{
	padding:15px;
        text-align: left;
	background-color: white;
     
        
    color: red;
    font-family: 'Roboto', sans-serif;
}


a{
    color:red;
}

</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>


</head><?php include "../dbconfig.php"; ?>
<body>
<div class="header">
				<ul>
					<li style="float:left;border-right:none"><strong><?php session_start(); echo "Welcome Admin";?></strong></li>
                                        <li><a href="../Admin/mgrmenu.php">Home</a></li>
				</ul>
</div>
<center>
	<?php
         session_start();
         
	$_SESSION["user"]="";
        
	$sql1 = "Select * from book ";
			$result1=mysqli_query($conn, $sql1);  
			echo "<table>
					<tr>
					<th>Appointment-Date</th>
					<th>Name</th>
					
					<th>Status</th>
					<th>Booked-On</th>
                                        <th>Action</th>
					
					</tr>";
			while($row1 = mysqli_fetch_array($result1))
			{
						echo "<tr>";
								echo "<td>" . $row1['DOV'] . "</td>";
								echo "<td>" . $row1['Fname'] . "</td>";
								
								echo "<td>" . $row1['Status'] . "</td>";
								echo "<td>" . $row1['Timestamp'] . "</td>";
                                                                echo "<td><a href=edit.php?id=".$row1['id'].">Edit</a></td>";
                                                                
                                                                $_SESSION[$row1['id']]=$row1['id'];
                                                                
								echo "</tr>";
				}
	?>
</center>
</body>
</html>