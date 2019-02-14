<html>
<head>
<link rel="stylesheet" href="../main.css">
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</head>
    
    
    
    
     
   
<script>


</script>
<body >
	<div class="header">
		<ul>
			<li style="float:left;border-right:none"><a href="ulogin.php" class="logo"><img src="../images/gmans_1.png" width="30px" height="30px"><strong> Dr FB Molopo </strong>Appointment Booking System</a></li>
                        <li><a href="changebookingstatus.php">Back</a></li>
		</ul>
	</div>
    <form action="../Admin/edit.php" method="post">
	<div class="sucontainer" >
		<label><b>Booking Status:</b></label><br>
                <input type="text"  name="status"  required><br>
 
                    <button type="submit" name="update">Update</button>
                    
                    
                    
                    
                    
                    
                 
                
                 <?php include "../dbconfig.php"; 
session_start();
if($_REQUEST['id']!=""){
    $_SESSION['user']=$_REQUEST['id'];
    
}




    $id=$_REQUEST['id'];
    
    $man="SELECT * FROM book WHERE id='$id'";
    
    $res= mysqli_query($conn, $man)or die("Couldnt update".mysql_error());
    
    $row= mysqli_fetch_assoc($res);
   
   


if(isset($_POST['update']))
{
    $statuses=$_POST['status'];
    $id=$_SESSION['user'];
    
    
    $sql= "UPDATE book SET Status='$statuses' WHERE id='$id'";
  
 
    
    
    
    $res =mysqli_query($conn,$sql) or die("Couldnt update".mysql_error());
    header('location:changebookingstatus.php');
    
   
            
}







  ?>              
		
		
                
                
                </div>
	</form>
</body>
</html>