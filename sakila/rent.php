<!DOCTYPE HTML>
<html>
<title></title>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <div class="maindiv">
            <div class="divA">
                <div class="title"><h2>Rent Data Using PHP</h2></div>
                <div class="divB">
                    <div class="divD">
                        <p>Which film do you want to rent?</p>

                        <?php                        
                        $connection = mysqli_connect("localhost", "root", "", "sakila");
                      //  $db = mysqli_select_db("test", $connection);
						
									
                        $query = mysqli_query($connection,"select * from film_list where film_id=$rent");
                        while ($row = mysqli_fetch_array($query)) 
						{
                            echo "<form class=\"form\" method=\"get\">";
							echo "<h2>Rent Form</h2>";
							echo "<hr/>";
                            echo "<br />";
                            echo "<label>" . "ID:" . "</label>" . "<br />";
                            echo"<input class=\"rent\" type=\"text\" name=\"ID\" value=\"\" />";
                            echo "<br />";
                            echo "<label>" . "Name:" . "</label>" . "<br />";
							echo"<input class=\"rent\" type=\"text\" name=\"Name\" value=\"\" />";
							echo "<br />";
                            echo "</form>";
  
                        }
						
                        ?>
                    </div>
                    <?php
                    if (isset($_GET['rent'])) {
                        $rent = $_GET['rent'];
                        $query1 = mysqli_query($connection,"rent from employees where employee_id=$rent");
						echo '<div class="form" id="form3"><br><br><br><br><br><br><Span>Data rentd Successfuly......!!</span></div>';
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