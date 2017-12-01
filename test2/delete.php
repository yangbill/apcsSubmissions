<!DOCTYPE HTML>
<html>
<title></title>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <div class="maindiv">
            <div class="divA">
                <div class="title"><h2>delete Data Using PHP</h2></div>
                <div class="divB">
                    <div class="divD">
                        <p>Click On Menu</p>

                        <?php                        
                        $connection = mysqli_connect("localhost", "root", "", "company");
                      //  $db = mysqli_select_db("test", $connection);
						
									
                        $query = mysqli_query($connection,"select * from employees");
                        while ($row = mysqli_fetch_array($query)) 
						{
                            echo "<b><a href=\"delete.php?delete={$row['employee_id']}\">{$row['employee_name']}</a></b>";
                            echo "<br />";
						//	print_r($row);
  
                        }
						
                        ?>
                    </div>
                    <?php
                    if (isset($_GET['delete'])) {
                        $delete = $_GET['delete'];
                        $query1 = mysqli_query($connection,"delete from employees where employee_id=$delete");
						echo '<div class="form" id="form3"><br><br><br><br><br><br><Span>Data deleted Successfuly......!!</span></div>';
						header('location:index.php');
                    }                    
                    ?>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>        
       
    </div>
</body>
</html>
<?php
//mysql_close($connection);
?>