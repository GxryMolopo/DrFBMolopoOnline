<?php


include '../dbconfig.php';
	
$id=$_GET['id'];
$status=$_POST['status']
        
        
        
;$sql="UPDATE book SET Status='$status' ";

if(mysql_query($conn,$sql))
        header("refresh:1; url=cover.php");
else
    echo "Not updated"; 
       
            


?>
