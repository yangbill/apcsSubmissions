<!DOCTYPE HTML>
<html>
<title></title>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <div class="maindiv">
            <div class="divA">
                <div class="title"><h2>Managing DataBase Using PHP</h2></div>
                <div class="divB">
                    <div class="divD">
                        <p>Click On Menu</p>
						</br></br>
						<a href = "update.php" >Update</a> </br></br></br>
						<a href = "insert.php" >Insert</a> </br></br></br>
						<a href = "delete.php" >Delete</a> </br></br></br>
                    </div>
						 <?php                        
                        $connection = mysqli_connect("localhost", "root", "", "company");
                      //  $db = mysqli_select_db("test", $connection);
						
						
									
                        $query = mysqli_query($connection,"select * from employees");
						echo"<table width= '60%'>";
						    echo"<tr>";
							echo "<th width='20%'>Emp&nbsp;ID</th>";
							echo "<th width='40%'>Employee&nbsp;Name</th>";
							echo "<th width= '40%'>Employee&nbsp;Mobile</th>";
						    echo"</tr>";
                        while ($row = mysqli_fetch_array($query)) 
						{
                            echo"<tr>";
							echo "<td width='10%'>".$row['employee_id']."</td>";
							echo "<td width='50%'>".$row['employee_name']."</td>";
							echo "<td width= '40%'>".$row['employee_contact']."</td>";
						    echo"</tr>";
  
                        }
						echo"</table>";
                        ?>
                    
                    <div class="clear">
				
					
					</div>
					
                </div>
                <div class="clear">   </div>
				
            </div>        
     
    </div>
</body>
</html>
<?php
//mysql_close($connection);
?>