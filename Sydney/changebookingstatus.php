<?php include "dbconfig.php"; 




$sql="SELECT * FROM book";

$records=mysql_query($sql);



?>










<html>
<head>
<link rel="stylesheet" href=".css">
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</head>
<table width="600" border="1" cellpadding="1" cellspacing="1">
    
    
    
    <tr>
        <th>Username</th>
        <th>First Name<th>
            <th>Gender</th>
            <th>CID</th>
            <th>DID</th>
            <th>DOV</th>
            <th>Timestamp</th>
            <th>Status</th>
    
    
    
    
    
    
    
    
    </tr>
    
    <?php
    
    while ($employee=mysql_fetch_assoc($records)){
        echo "<tr>";
        
        echo "<td>".$employee['Username']."</td>";
        
        echo "<td>".$employee['Fname']."</td>";
        
        echo "<td>".$employee['Gender']."</td>";
        
        echo "<td>".$employee['CID']."</td>";
        
        echo "<td>".$employee['DID']."</td>";
        
        echo "<td>".$employee['DOV']."</td>";
        
        echo "<td>".$employee['Timestamp']."</td>";
        
        echo "<td>".$employee['Status']."</td>";
        
        echo "</tr>";
    }
    
    
    
    
    
    ?>

</table>

<body >
	

</body>
</html>